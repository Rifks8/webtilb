<h2 align="center">Ubah Produk</h2>
<style type="text/css">
	.form-control {
		margin: 5px;
        width: 900px;
        padding: 1px;
        border: 1px solid #ccc;
	}
	.form-group {

	}
</style>
<center>
<?php  
$ambil = $koneksi->query("SELECT * FROM deskripsi WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
	</div>
	<div class = "form-group">
		<label>Sejarah Produk</label>
		<textarea name="sejarah" class="form-control" rows="10"><?php echo $pecah['sejarah_produk']; ?></textarea> 
	</div>
	<div class="form-group">
		<label>Deskripsi Produk</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea> 
	</div>	
	<div class="form-group">
		<img src="../img/<?php echo $pecah['foto_produk']; ?>" width="200">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php 
if (isset($_POST['ubah'])) 
{
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../img/$namafoto");

		$koneksi->query("UPDATE deskripsi SET nama_produk='$_POST[nama]',
			sejarah_produk='$_POST[sejarah]',
			deskripsi_produk='$_POST[deskripsi]',
			foto_produk='$namafoto',
			WHERE id_produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE deskripsi SET nama_produk='$_POST[nama]',
			sejarah_produk='$_POST[sejarah]',
			deskripsi_produk='$_POST[deskripsi]' 
			WHERE id_produk='$_GET[id]'");
	}
	echo "<script>alert('data produk terlah diubah');</script>";
	echo "<script>location= 'index.php?halaman=produk';</script>";
}
 ?>
</center>