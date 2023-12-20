<?php
require 'connection.php';
if(isset($_POST['tambah'])){
	$perpustakaan = mysqli_query($conn, ("INSERT INTO buku VALUES 
	('".$_POST['kode_buku']."',
	'".$_POST['judul']."',
	'".$_POST['penerbit']."',
	'".$_POST['tahun_terbit']."',
	'".$_POST['kategori']."',
    '".$_POST['pengarang']."')"));
	
	if($perpustakaan){
?>
		<script type="text/javascript">
			alert("Anda Berhasil Menambahkan data!");
			window.location.href="indexBuku.php";
		</script>
<?php
	}else{
		echo"Data Yang Anda Masukan Tidak Falid!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Buku</title>
</head>
<body>
<center>
<form action="tambahBuku.php" method="POST">
            <table>
                <tr>
                    <td><input type="text" name="kode_buku" placeholder="Kode Buku" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="judul" placeholder="Judul Buku" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="penerbit" placeholder="penerbit" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="date" name="tahun_terbit" placeholder="Tahun Terbit" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="kategori" placeholder="Kategori" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="pengarang" placeholder="Pengarang" autocomplete="off" required></td>
                </tr>
                <tr>
                <td>
                    <input type="submit" name="tambah" value="tambah">
                    <input type="reset" name="hapus"></br></br>
                </td>
                </tr>
                <tr>
                <td>
                click <a href="indexBuku.php">kembali</a> jika batal!
                </td>
                </tr>
            </table>
</form>
</center>
</body>
</html>