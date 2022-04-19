<?php 
  session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TILB!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
     
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">This Is Local Brand!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="inter.php">Go International</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="why.php">Why Local Brand?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="olshop.php">OL-Shop Recomendation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--Page Content-->
<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
          <h2 align="center">Why Local Brand?</h2>
          <hr width="270px">
          <?php $ambil=$koneksi->query("SELECT * FROM alasan"); ?> 
          <?php while($peralasan=$ambil->fetch_assoc()){; ?>
          <p align="justify"> <?php echo $peralasan['inggris']; ?></p>          
            <?php } ?>
        </div>

        <div class="col-sm-6">
          <h2 align="center">Mengapa Brand Lokal?</h2>
          <hr width="350px">
          <?php $ambil=$koneksi->query("SELECT * FROM alasan"); ?> 
          <?php while($peralasan=$ambil->fetch_assoc()){; ?>
            <p align="justify"> <?php echo $peralasan['indo']; ?></p>
            <?php } ?>
        </div>
    </div>
    </div>
</section>

<section id="about">   
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?php $ambil=$koneksi->query("SELECT * FROM alasan WHERE id_alasan='7'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <div class="caption">
            <div class="thumbnail">
              <img class="img-thumbnail" src="img/tren.png" alt="Card image cap">
              <figcaption align="center">Sumber : Kompas.id</figcaption>
            </div>            
            <p align="justify"><?php echo $perproduk['grafik']; ?></p>
          </div>
        </div>
</section>
      
 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TILB 2020</p>
    </div>
  </footer>
  
</body>

</html>