<h2 align="center">Deskripsi Droduk</h2>

<style type="text/css">
	table {width: 900px; height: 200px; margin: auto}
</style>
<table border="1" cellspacing="10">
	<thead>
		<tr>
			<th width="50">No</th>
			<th width="70">Nama</th>
			<th>Sejarah</th>
			<th>Perkembangan</th>			
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM deskripsi"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td align="justify">
				<?php $num_char = 100;
				$text = $pecah['sejarah_produk']; 
				echo substr($text, 0, $num_char) . '...';
				?>
				</td>
			<td align="justify">
				<?php $num_char = 100;
				$text = $pecah['deskripsi_produk']; 
				echo substr($text, 0, $num_char) . '...';
				?>					
				</td>
			<td>
				<img src="../img/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td>
			<td>					
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>"class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
