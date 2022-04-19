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
  <link rel="stylesheet" type="text/css" href="css/faq.css">
  
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
<section class="bg-light">  
  <h2 align="center">F.A.Q</h2>
    <h3 align="center">(Frequently Asked Question)</h3>
      <div class="container">         
          <?php $ambil=$koneksi->query("SELECT * FROM faq");?>
          <?php while($perproduk=$ambil->fetch_assoc()){; ?>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <?php echo $perproduk['pertanyaan'] ; ?>
                    </button>
                  </h2>
                </div>
                  <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                  <?php echo $perproduk['jawaban'] ; ?>
              </div>
            </div>
          </div>
        <?php } ?>
        <br>
      </div>
    </div>
</section>




<section class="bg-light">  
  <div class="container">
    <p></p>
  <h5>Punya pertanyaan lain?</h5>
  <a href="contact.php" class="btn btn-primary">Tanyakan kami &rarr;</a>
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