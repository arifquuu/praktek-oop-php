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
  <title>Halaman Utama Proyek PBO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    /* Variabel Warna untuk kemudahan kustomisasi */
    :root {
      --bg-color: #f8f9fa; /* Latar belakang halaman */
      --card-bg: #ffffff; /* Latar belakang kartu */
      --text-color: #212529; /* Warna teks utama */
      --subtle-text: #6c757d; /* Warna teks sekunder */
      --primary-color: #0d6efd; /* Warna utama untuk link dan aksen */
      --border-color: #dee2e6; /* Warna border */
      --shadow-color: rgba(0, 0, 0, 0.075); /* Warna bayangan */
    }

    /* Pengaturan Dasar Body */
    body {
      font-family: 'Inter', system-ui, -apple-system, Segoe UI, Arial, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      max-width: 720px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.6;
    }

    /* Judul Utama */
    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--text-color);
      text-align: center;
      margin-bottom: 24px;
    }
    
    h1 .wave {
      display: inline-block;
      animation: wave-animation 2.5s infinite;
      transform-origin: 70% 70%;
    }

    @keyframes wave-animation {
        0% { transform: rotate( 0.0deg) }
       10% { transform: rotate(14.0deg) }
       20% { transform: rotate(-8.0deg) }
       30% { transform: rotate(14.0deg) }
       40% { transform: rotate(-4.0deg) }
       50% { transform: rotate(10.0deg) }
       60% { transform: rotate( 0.0deg) }
      100% { transform: rotate( 0.0deg) }
    }


    /* Styling Kartu */
    .card {
      background-color: var(--card-bg);
      border: 1px solid var(--border-color);
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 4px 12px var(--shadow-color);
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px var(--shadow-color);
    }

    .card p {
      color: var(--subtle-text);
      font-size: 1.1rem;
      margin-top: 0;
    }

    /* Styling Daftar Link */
    ul {
      list-style: none;
      padding: 0;
      margin: 16px 0 0 0;
    }

    li {
      margin-bottom: 12px;
    }
    
    /* Styling Link */
    a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 500;
      position: relative;
      display: inline-block;
      padding: 4px 0;
    }

    a::after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary-color);
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }

    a:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }

  </style>
</head>
<body>
  <h1>Halo dari index.php <span class="wave">👋</span></h1>
  <div class="card">
    <p>Ini halaman index sederhana untuk tugas PBO (PHP). Coba buka halaman Home:</p>
    <ul>
      <li><a href="/home.php">Buka /home.php</a></li>
      <li><a href="/?page=home">Buka via routing query</a></li>
    </ul>
  </div>
</body>
</html>
