<?php 
$koneksi = new mysqli("localhost","root","","pemweb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            background-color:yellow;
            padding:2px;
            color:blue;
            width:500px;
        }
        h1{
            font-family:georgia;
            color:red;
        }
    </style>
</head>
<body>
    <h1>INI HALAMAN COBA2</h1>
    <?php echo "hello kampang" ?>

    <p id="demo">PHP Dasar</p>
 
    <button type="button" onclick="myFunction()">Coba Klik</button>
 
    <script tipe="text/Javascript">
    function myFunction() {
    <?php
    $str= "Ini Hanya Contoh";
    echo "document.getElementById('demo').innerHTML = '$str';";
    ?>
    }
    </script>
    
    <?php $ambil=$koneksi->query("SELECT * FROM nama");?>
    <?php ($data=$ambil->fetch_assoc()); ?>
    <h2>Nama saya
        <?php echo $data['name']; ?>
    </h2>

    <?php
    $alamat = 3;

    if ($alamat < 2 ){
        echo "Selamat datang di bandung";
    } else {
        echo "Selamat datang di Jakarta";
    }
    ?>
    <br>
    <?php
    for($i=1; $i<=10 ; $i++)
        echo "Ini angka ke-$i<br>";
    ?>
    <br>
    <?php
        $x=1;
        while($x<=15){
            echo "Ini angka ke-$x<br>";
            $x+=2;
        }
    ?>
<br>
    <?php
        $z=3;
        switch
    ?>
</body>
</html>