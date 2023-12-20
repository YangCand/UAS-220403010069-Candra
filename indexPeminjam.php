<?php 
require 'connection.php';
$perpustakaan = mysqli_query($conn, "SELECT * FROM peminjam");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index Peminjam</title>

    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: black;
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

    footer {
      background-color: black;
      color: White;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    h1 {
        text-align: center;
    }
    table {
        margin: 20px auto;
        border-collapse: collapse;
        width: 80%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
     form {
        text-align: center;
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

    <h1>Data Petugas</h1>
    <table>
        <tr>
            <th>Id Peminjam</th>
            <th>Nama Peminjam</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Id Petugas</th>
            <th>Nama Petugas</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Option</th>
        </tr>
        <?php foreach ($perpustakaan as $perpus) { ?>
            <tr>
                <td><?= $perpus['id_peminjam'] ?></td>
                <td><?= $perpus['nama_peminjam'] ?></td>
                <td><?= $perpus['kode_buku'] ?></td>
                <td><?= $perpus['judul'] ?></td>
                <td><?= $perpus['id_petugas'] ?></td>
                <td><?= $perpus['nama_petugas'] ?></td>
                <td><?= $perpus['tanggal_pinjam'] ?></td>
                <td><?= $perpus['tanggal_kembali'] ?></td>
                <td>
                    <a href="ubahPeminjam.php?id_peminjam=<?= $perpus['id_peminjam'] ?>">Ubah</a> ||
                    <a href="hapusPeminjam.php?id_peminjam=<?= $perpus['id_peminjam'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data Petugas ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <table>
        <tr>
        <td>
            <form action="tambahPeminjam.php" method="post">
                <input type="submit" value="Tambah Data">
            </form>
        </td>
    </tr>
   <tr>
        <td>
            <form action="homeCeo.php">
                <input type="submit" value="Kembali">
            </form>
        </td>
   </tr>
    </table>
<footer>
<p>&copy; 2023 Library Digital Chandra's</p>
</footer>
</body>
</html>
