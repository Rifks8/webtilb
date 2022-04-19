<h2 align="center">F.A.Q</h2>
<h3 align="center">(Frequently Asked Question)</h3>

<style type="text/css">
	table {width: 920px; height: 150px; margin: 30px auto;}
</style>
<table border="1" cellspacing="10">
	<thead>
		<tr>
			<th width="50">No</th>
			<th width="200">Pertanyaan</th>
			<th width="700">Jawaban</th>			
			<th width="150">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM faq"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['pertanyaan']; ?></td>
			<td><?php echo $pecah['jawaban']; ?></td>
			<td>
				<a href="index.php?halaman=ubahfaq&id=<?php echo $pecah['id_faq'];?>" class="btn btn-warning">Ubah</a>
				<a href="index.php?halaman=hapusfaq&id=<?php echo $pecah['id_faq'];?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
	<?php $nomor++ ?>
	<?php } ?>
	</tbody>
</table>
<center><a href="index.php?halaman=tambahfaq" class="btn btn-primary">Tambah Data</a></center>