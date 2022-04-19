<?php 
$ambil = $koneksi->query("SELECT * FROM pesan WHERE id_pesan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pesan WHERE id_pesan='$_GET[id]'");

echo "<script>alert('Data terhapus');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";

 ?>
