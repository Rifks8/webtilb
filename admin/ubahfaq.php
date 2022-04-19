<h2 align="center">Ubah F.A.Q</h2>
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
$ambil = $koneksi->query("SELECT * FROM faq WHERE id_faq='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post">
	<div class="form-group">
		<label>Pertanyaan</label>
		<input type="text" name="pertanyaan" class="form-control" value="<?php echo $pecah['pertanyaan']; ?>">
	</div>
	<div class = "form-group">
		<label>Jawaban</label>
		<textarea name="jawaban" class="form-control" rows="10"><?php echo $pecah['jawaban']; ?></textarea> 
	</div>		
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php 
if (isset($_POST['ubah'])) 
{			
		$koneksi->query("UPDATE faq SET pertanyaan='$_POST[pertanyaan]',
		jawaban='$_POST[jawaban]' WHERE id_faq='$_GET[id]'");
	
	echo "<script>alert('data telah diubah');</script>";
	echo "<script>location= 'index.php?halaman=faq';</script>";
}

 ?>
</center>