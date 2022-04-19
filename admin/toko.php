<h2 align="center">Data Toko Online</h2>

<style type="text/css">
	table {width: 900px; height: 200px; margin: auto}
</style>
<table border="1" cellspacing="10">
	<thead>
		<tr>
			<th width="50">No</th>
			<th width="75">Nama Toko</th>
			<th>Deskripsi Toko</th>
			<th>Foto Toko</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM toko"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_toko']; ?></td>
			<td><?php echo $pecah['deskripsi_toko']; ?></td>
			<td>
				<img src="../img/<?php echo $pecah['foto_toko']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=ubahtoko&id=<?php echo $pecah['id_toko']; ?>" class = "btn btn-info">Ubah</a>
			</td>
		</tr>
	<?php $nomor++ ?>
	<?php } ?>
	</tbody>
</table>