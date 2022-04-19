<?php 
$koneksi = new mysqli("localhost","root","","tespdp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tes PDP</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-10 mx-auto">
            <h1 class="text-center">Tes Koding PDP BCA Finance</h1>
            <h4 class="text-center">Raden Mas Arief Kusumo | 085883298511 | ariefks103@gmail.com</h4>
            <?php $ambil=$koneksi->query("SELECT * FROM transaksi");?>
            <?php ($data=$ambil->fetch_assoc()); ?>
            <table class="table table-bordered table-primary">
                <h5>Tabel Transaksi</h5>
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM transaksi"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                        <th scope="row">ID-<?php echo $nomor; ?></th>
                        <td><?php echo $pecah['Nominal']; ?></td>
                        <td><?php echo $pecah['Jenis']; ?></td>                                            
                        <td><?php echo $pecah['Tanggal']; ?></td>
                        <td>
                            <button class="btn btn-info">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>    
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>

            <table class="table table-bordered table-secondary">
                <h5>Tabel Saldo</h5>
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Saldo</th>                    
                    <th scope="col">Aksi</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM saldo"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                        <th scope="row">ID-<?php echo $nomor; ?></th>
                        <td><?php echo $pecah['Nama']; ?></td>
                        <td><?php echo $pecah['Saldo']; ?></td>     
                        <td>
                            <button class="btn btn-info">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>                                       
                    </tr>    
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>