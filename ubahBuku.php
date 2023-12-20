<?php 
require 'connection.php';

if(isset($_GET['kode_buku'])){
    $kode_buku = $_GET["kode_buku"];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE kode_buku ='".$kode_buku."'");
    $buku = mysqli_fetch_array($query);
}

if(isset($_POST["ubah"])){
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $kode_buku = $_POST['kode_buku'];

    $query_update = "UPDATE buku SET 
    judul = '$judul', 
    penerbit = '$penerbit', 
    tahun_terbit = '$tahun_terbit', 
    kategori = '$kategori',
    pengarang = '$pengarang'
    WHERE kode_buku = '$kode_buku'";
    $result = mysqli_query($conn, $query_update);

    if($result){
?>
        <script type="text/javascript">
            alert("Data berhasil diubah!");
            window.location.href="indexBuku.php";
        </script>
<?php
    } else {
        echo "Gagal mengubah data!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Buku</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <h1>Ubah Data Buku</h1>
                <tr>
                    <td><input type="text" name="kode_buku" id="kode_buku" value="<?php echo $buku["kode_buku"] ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" name="judul" id="judul" value="<?php echo $buku["judul"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="text" name="penerbit" id="penerbit" value="<?php echo $buku["penerbit"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="date" name="tahun_terbit" id="tahun_terbit" value="<?php echo $buku["tahun_terbit"] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="kategori" id="kategori" value="<?php echo $buku["kategori"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="text" name="pengarang" id="pengarang" value="<?php echo $buku["pengarang"] ?>" autocomplete="off"></td>
                </tr>
              
            </table>

            <br><br>
            <input type="submit" value="ubah" name="ubah">
            <input type="reset" id="input" name="reset">
        </form>
        <br>
        <a href="homeCeo.php">Kembali</a>
    </center>
</body>
</html>
