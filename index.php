<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 20px;
            padding: 30px;
            background: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn-custom {
            background-color: #0d47a1;
            color: white;
        }
        .btn-custom:hover {
            background-color: #1565c0;
        }
        .title {
            font-weight: bold;
            color: #0d47a1;
        }
        .lead {
            color: #333;
        }
    </style>
</head>
<body>

<div class="card">
    <h1 class="title mb-3"><i class="bi bi-mortarboard"></i> Sistem CRUD Mahasiswa</h1>
    <p class="lead mb-4">Selamat datang di sistem manajemen data mahasiswa berbasis web.</p>
    <a href="login.php" class="btn btn-custom px-4">Login Sekarang</a>
</div>

</body>
</html>