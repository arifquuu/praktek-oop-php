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
    :root {
      --bg-color: #f0f2f5;      /* Latar belakang halaman lebih lembut */
      --container-bg: #ffffff;  /* Latar belakang container */
      --text-color: #1c1e21;    /* Warna teks utama (mirip Facebook) */
      --subtle-text: #606770;   /* Warna teks sekunder */
      --primary-color: #1877f2; /* Warna biru utama (mirip Facebook) */
      --hover-bg: #f0f2f5;      /* Warna latar saat hover tombol */
      --border-color: #dddfe2;  /* Warna border */
      --shadow-color: rgba(0, 0, 0, 0.1); /* Warna bayangan */
    }

    /* Menghilangkan margin default dan mengatur box-sizing */
    *, *::before, *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, Segoe UI, Arial, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      /* Mengatur body agar container bisa ditengah secara vertikal & horizontal */
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    /* Styling Container Utama */
    .container {
      background-color: var(--container-bg);
      border-radius: 16px;
      padding: 32px;
      box-shadow: 0 4px 20px var(--shadow-color);
      max-width: 600px;
      width: 100%;
      text-align: center;
    }

    header h1 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .content-card p {
      color: var(--subtle-text);
      font-size: 1.1rem;
      margin-bottom: 24px;
    }

    /* Styling Menu Navigasi */
    .navigation-menu ul {
      list-style: none;
      display: flex; /* Mengatur tombol berdampingan */
      gap: 16px; /* Memberi jarak antar tombol */
      justify-content: center;
    }

    .navigation-menu li {
        flex: 1; /* Membuat kedua tombol memiliki lebar yang sama */
    }

    /* Styling Tombol Menu yang Baru */
    .menu-button {
      display: flex;
      align-items: center;
      gap: 12px; /* Jarak antara ikon dan teks */
      padding: 16px;
      border: 1px solid var(--border-color);
      border-radius: 10px;
      text-decoration: none;
      color: var(--text-color);
      font-weight: 500;
      transition: background-color 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
    }

    .menu-button:hover {
      background-color: var(--hover-bg);
      border-color: #ced0d4;
      transform: translateY(-2px); /* Efek terangkat sedikit saat hover */
    }

    .menu-button svg {
      width: 24px;
      height: 24px;
      flex-shrink: 0; /* Mencegah ikon menyusut */
      color: var(--primary-color);
    }

    .menu-button-text {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
    }
    
    .menu-button-text strong {
      font-size: 1rem;
      line-height: 1.2;
    }

    .menu-button-text small {
      font-size: 0.8rem;
      color: var(--subtle-text);
    }
    
    footer {
        margin-top: 32px;
        padding-top: 20px;
        border-top: 1px solid var(--border-color);
    }
     
    footer p {
        color: var(--subtle-text);
        font-size: 0.9rem;
    }
  </style>
</head> 
<body> 

  <!-- Container utama yang membungkus semua konten -->
  <main class="container">
    <header>
      <h1>Selamat Datang 👋</h1> 
    </header>

    <section class="content-card"> 
      <p>Ini adalah halaman utama untuk tugas PBO. Silakan pilih tujuan Anda di bawah ini.</p> 
    </section>

    <nav class="navigation-menu">
      <ul> 
        <li>
          <a href="/home.php" class="menu-button" title="Buka halaman home.php secara langsung">
            <!-- Ikon Rumah (SVG) -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M12 2.09961L1 12H4V22H10V16H14V22H20V12H23L12 2.09961ZM12 4.51367L18 10.1504V20H16V14H8V20H6V10.1504L12 4.51367Z"></path></svg>
            <div class="menu-button-text">
              <strong>Halaman Home</strong>
              <small>Buka /home.php</small>
            </div>
          </a>
        </li> 
        <li>
          <a href="/?page=home" class="menu-button" title="Buka halaman home melalui routing PHP">
            <!-- Ikon Routing (SVG) -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M13.9393 17.5251L12.5251 18.9393L18.4648 24.8789L19.8789 23.4648L13.9393 17.5251ZM24.8789 5.53516L18.9393 -0.404419L17.5251 1.00977L23.4648 6.94934L24.8789 5.53516ZM16.4648 10.0098C15.9023 10.0098 15.3496 10.2351 14.9355 10.6492C14.5215 11.0632 14.2961 11.6159 14.2961 12.1785C14.2961 12.741 14.5215 13.2937 14.9355 13.7077C15.3496 14.1218 15.9023 14.3471 16.4648 14.3471C17.0273 14.3471 17.5801 14.1218 17.9941 13.7077C18.4082 13.2937 18.6336 12.741 18.6336 12.1785C18.6336 11.6159 18.4082 11.0632 17.9941 10.6492C17.5801 10.2351 17.0273 10.0098 16.4648 10.0098ZM5.53516 23.4648L-0.404419 17.5251L1.00977 16.0955L6.94934 22.0506L5.53516 23.4648ZM1.00977 8.94934L-0.404419 7.53516L5.53516 1.59558L6.94934 3.00977L1.00977 8.94934ZM10.0098 12.1785C10.0098 11.6159 10.2351 11.0632 10.6492 10.6492C11.0632 10.2351 11.6159 10.0098 12.1785 10.0098C12.741 10.0098 13.2937 10.2351 13.7077 10.6492C14.1218 11.0632 14.3471 11.6159 14.3471 12.1785C14.3471 12.741 14.1218 13.2937 13.7077 13.7077C13.2937 14.1218 12.741 14.3471 12.1785 14.3471C11.6159 14.3471 11.0632 14.1218 10.6492 13.7077C10.2351 13.2937 10.0098 12.741 10.0098 12.1785ZM8.94934 23.4648L7.53516 22.0506L13.4749 16.0955L14.8891 17.5251L8.94934 23.4648ZM17.5251 3.00977L23.4648 8.94934L22.0506 10.3635L16.0955 4.42395L17.5251 3.00977Z"></path></svg>
            <div class="menu-button-text">
              <strong>Routing Query</strong>
              <small>Buka via ?page=home</small>
            </div>
          </a>
        </li> 
      </ul>
    </nav> 
  </main>

  <!-- Footer sekarang berada di luar container agar tidak ikut bayangan -->
  <!-- <footer>
    <p><small>&copy; <?php echo date("Y"); ?> Proyek PBO Sederhana.</small></p>
  </footer> -->

</body> 
</html>
