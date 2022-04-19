<h2 align="center">Ubah Data Toko</h2>
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
$ambil = $koneksi->query("SELECT * FROM toko WHERE id_toko='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Toko</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_toko']; ?>">
	</div>	
	<div class="form-group">
		<label>Deskripsi Toko</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_toko']; ?></textarea> 
	</div>	
	<div class="form-group">
		<img src="../img/<?php echo $pecah['foto_toko']; ?>" width="200">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php 
if (isset($_POST['ubah'])) 
{			
		$koneksi->query("UPDATE toko SET nama_toko='$_POST[nama]',
		deskripsi_toko='$_POST[deskripsi]' WHERE id_toko='$_GET[id]'");
	
	echo "<script>alert('data toko telah diubah');</script>";
	echo "<script>location= 'index.php?halaman=toko';</script>";
}

 ?>
</center>