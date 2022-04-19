<center><h2>Tambah FAQ</h2></center>
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
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Pertanyaan</label>
		<input type="text" class="form-control" name="pertanyaan">
	</div>
	<div class="form-group">
		<label>Jawaban</label>
		<textarea class="form-control" name="jawaban" rows="10"></textarea>
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	
	$koneksi->query("INSERT INTO faq(pertanyaan, jawaban) 
		VALUES('$_POST[pertanyaan]', '$_POST[jawaban]')");

	echo "<div class = 'alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=faq'>";

}
?>
</center>
