<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman CEO</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: grey;
    }

    header {
      background-color: black;
      color: White;
      padding: 20px 0;
      text-align: center;
    }

    nav ul {
      list-style: none;
      padding: 0;
      text-align: center;
    }

    nav ul li {
      display: inline;
      margin: 0 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: White;
    }

    .container {
      width: 80%;
      margin: 20px auto;
      overflow: hidden;
    }

    .main {
      float: left;
      width: 70%;
      background: #fff;
      padding: 20px;
      box-sizing: border-box;
    }

    .sidebar {
      float: left;
      width: 30%;
      background: #f2f2f2;
      padding: 20px;
      box-sizing: border-box;
    }

    footer {
      background-color: black;
      color: White;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <header>
    <h1>Selamat Datang di Perpustakaan Candra</h1>
    <nav>
      <ul>
        <li><a href="indexBuku.php">Data Buku</a></li>
        <li><a href="indexMahasiswa.php">Data Mahasiswa</a></li>
        <li><a href="indexPetugas.php">Data Petugas</a></li>
        <li><a href="indexPeminjam.php">Data Peminjam</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="main">
      <h2>Selamat Datang Perpustakaan Online</h2>
      <p>Website yang dirancang oleh perusahaan BLOODIAMOND untuk memudahkan kita dalam monitoring dan memanajement Perpustakaan.</p>
      <p>Banyak sekali jenis buku dan jurnal yang dapat kalian baca dengan pencarian yang sangat mudah dan peminjaman yang praktis.</p>
      <p>Tanpa harus datang ke perpustakaan kalian bisa baca dimana saja dan kapan saja.</p>
      <p>Akan selalu ada notivikasi untuk update koleksian buku terbaru.</p>
    </div>

    <div class="sidebar">
      <h3></h3>
      <p>instagram . WhatsApp . Github .  </p>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Library Digital Chandra's</p>
  </footer>

</body>
</html>