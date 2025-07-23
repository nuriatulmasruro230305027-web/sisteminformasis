<?php
include 'koneksi.php';
session_start();

$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['namaLengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah digunakan
    $cek = $conn->prepare("SELECT idUser FROM tbl_user WHERE username = ?");
    $cek->bind_param("s", $username);
    $cek->execute();
    $cek->store_result();

    if ($cek->num_rows > 0) {
        $pesan = "Username sudah digunakan!";
    } else {
        $stmt = $conn->prepare("INSERT INTO tbl_user (namaLengkap, email, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $email, $username, $password);
        if ($stmt->execute()) {
            header("Location: login.php?register=success");
            exit;
        } else {
            $pesan = "Gagal mendaftar!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
<div class="card p-4 shadow" style="width: 25rem;">
    <h3 class="mb-3 text-center">Daftar Akun</h3>
    <?php if ($pesan): ?>
        <div class="alert alert-danger"><?= $pesan ?></div>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="namaLengkap" class="form-control mb-2" placeholder="Nama Lengkap" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-primary w-100" type="submit">Daftar</button>
    </form>
    <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
</div>
</body>
</html>
