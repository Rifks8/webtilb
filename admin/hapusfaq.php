<?php 
$ambil = $koneksi->query("SELECT * FROM faq WHERE id_faq='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM faq WHERE id_faq='$_GET[id]'");

echo "<script>alert('Data terhapus');</script>";
echo "<script>location='index.php?halaman=faq';</script>";

 ?>
