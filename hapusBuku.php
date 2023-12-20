<?php 
require 'connection.php';
$kode_buku = $_GET["kode_buku"];
$sql = "DELETE FROM buku WHERE kode_buku = '".$kode_buku."'";
$query = mysqli_query ($conn, $sql);
if($query) {
    ?>
    <script type="text/javascript">
        alert("Anda Berhasil Menghapus data!");
        window.location.href="indexBuku.php";
    </script>
<?php
} else {
    echo" Anda Gagal Mendaftar!";
}
?>
