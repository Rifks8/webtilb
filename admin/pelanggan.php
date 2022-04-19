<h2 class="text-center">Data Pengirim Pesan</h2>

<style type="text/css">
	table {width: 900px; height: 150px; margin: auto}
</style>
<table border="1" cellspacing="10">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pesan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pengirim']; ?></td>
			<td><?php echo $pecah['email_pengirim']; ?></td>
			<td><?php echo $pecah['judul_pesan']; ?></td>
			<td><?php echo $pecah['isi_pesan']; ?></td>
			<td>
				<a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pesan'];?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
	<?php $nomor++ ?>
	<?php } ?>
	</tbody>
</table>
