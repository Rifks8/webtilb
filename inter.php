<?php 
  session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
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
	<title></title>
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
            <a class="nav-link" href="inter.php">Go International              
            </a>
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

<!-- Konten -->
<h1 align="center">Go International Brands</h1>


<section id="about">
  <div class="container">    
    <h2 class="my-4" align="center">Top 3 Local Brands</h2>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <?php $ambil=$koneksi->query("SELECT * FROM internasional WHERE id_sepatu='1'");?>
        <?php ($perproduk=$ambil->fetch_assoc()); ?>
        <div class="card h-100">
          <h4 class="card-header"><?php echo $perproduk['nama_brand']; ?></h4>
          <div class="card-body">
            <img class="card-img-top" src="img/<?php echo $perproduk['foto_brand']; ?>" height="250" alt="Card image cap">
            <p class="card-text" align="justify"><?php echo $perproduk['isi_brand']; ?></p>
          </div>
          <div class="card-footer">
            <a href="https://pieroindonesia.com/" class="btn btn-primary">Go to Piero &rarr;</a>
            <a class="btn" href="Piero" onclick="window.open('https://pieroindonesia.com/','_blank');" target="_blank">Go to Piero &rarr;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <?php $ambil=$koneksi->query("SELECT * FROM internasional WHERE id_sepatu='2'");?>
        <?php ($perproduk=$ambil->fetch_assoc()); ?>
        <div class="card h-100">
          <h4 class="card-header"><?php echo $perproduk['nama_brand']; ?></h4>
          <div class="card-body">
            <img class="card-img-top" src="img/<?php echo $perproduk['foto_brand']; ?>" height="250" alt="Card image cap">
            <p class="card-text" align="justify"><?php echo $perproduk['isi_brand']; ?></p>
          </div>
          <div class="card-footer">
            <a href="https://www.carvil.co.id/" class="btn btn-primary">Go to Carvil &rarr;</a>
            <a class="btn btn-primary" href="Carvil" onclick="window.open('https://www.carvil.co.id//','_blank');" target="_blank">Go to Carvil &rarr;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <?php $ambil=$koneksi->query("SELECT * FROM internasional WHERE id_sepatu='3'");?>
        <?php ($perproduk=$ambil->fetch_assoc()); ?>
        <div class="card h-100">
          <h4 class="card-header"><?php echo $perproduk['nama_brand']; ?></h4>
          <div class="card-body">
            <img class="card-img-top" src="img/<?php echo $perproduk['foto_brand']; ?>" height="250" alt="Card image cap">
            <p class="card-text" align="justify"><?php echo $perproduk['isi_brand']; ?></p>
          </div>
          <div class="card-footer">
            <a href="https://league-world.com/" class="btn btn-primary">Go to League &rarr;</a>
            <a class="btn btn-primary" href="League" onclick="window.open('https://league-world.com/','_blank');" target="_blank">Go to League &rarr;</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Portfolio Section -->
    <h2>Other Brands</h2>
    <div class="row">
      <?php $ambil=$koneksi->query("SELECT * FROM internasional WHERE id_sepatu BETWEEN '4' AND '9'"); ?>
      <?php while($perproduk=$ambil->fetch_assoc()){; ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <img class="card-img-top" src="img/<?php echo $perproduk['foto_brand']; ?>" height="250" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <h5><?php echo $perproduk['nama_brand']; ?></h5>
            </h4>
            <p class="card-text"><?php echo $perproduk['isi_brand']; ?></p>
          </div>
           <div class="card-footer">
            <a href="<?php echo $perproduk['nama_brand']; ?>" class="btn btn-primary" onclick="window.open('<?php echo $perproduk['web_brand']; ?>','_blank');" target="_blank">Go to <?php echo $perproduk['nama_brand']; ?> &rarr;</a>
          </div>
        </div>
      </div>
    <?php } ?>        
      </div>
    </div>
    <!-- /.row -->
</section>
<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TILB 2020</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>
