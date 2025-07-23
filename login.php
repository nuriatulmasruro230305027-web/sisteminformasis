<?php
include 'koneksi.php';
session_start();

$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT idUser, username, password FROM tbl_user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($idUser, $user, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['idUser'] = $idUser;
            $_SESSION['username'] = $user;
            header("Location: dashboard.php");
            exit;
        } else {
            $pesan = "Password salah!";
        }
    } else {
        $pesan = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
<div class="card p-4 shadow" style="width: 25rem;">
    <h3 class="mb-3 text-center">Login</h3>
    <?php if ($pesan): ?>
        <div class="alert alert-danger"><?= $pesan ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['register'])): ?>
        <div class="alert alert-success">Registrasi berhasil. Silakan login.</div>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </form>
    <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</div>
</body>
</html>
