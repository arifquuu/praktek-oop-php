<?php
// index.php — Halaman utama
$page = $_GET['page'] ?? '';
if ($page === 'home') {
    header('Location: /home.php');
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Index PHP Sederhana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:720px;margin:40px auto;padding:0 16px}
    a{text-decoration:none}
    .card{border:1px solid #ddd;border-radius:12px;padding:16px}
  </style>
</head>
<body>
  <h1>Halo dari index.php 👋</h1>
  <div class="card">
    <p>Ini halaman index sederhana untuk tugas PBO (PHP). Coba buka halaman Home:</p>
    <ul>
      <li><a href="/home.php">/home.php</a></li>
      <li><a href="/?page=home">/?page=home</a> (routing query)</li>
    </ul>
  </div>
</body>
</html>
