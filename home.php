<?php
// home.php — Halaman kedua
$date = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Home PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:720px;margin:40px auto;padding:0 16px}
    a{color:#0a7}
  </style>
</head>
<body>
  <h1>Selamat datang di Home</h1>
  <p>Waktu server: <strong><?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?></strong></p>
  <p><a href="/">← Kembali ke index</a></p>
</body>
</html>
