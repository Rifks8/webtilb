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
  
   <!-- logo sosmed -->
  <link rel="stylesheet" href="style-social-media-button.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

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


 <header class="bg-primary text-white">
    <div class="container text-center">
       <?php $ambil=$koneksi->query("SELECT * FROM deskripsi");?>
       <?php ($perproduk=$ambil->fetch_assoc()); ?>
      <h1>
        <marquee height="50"> This Is <?php echo $perproduk['nama_produk']; ?>!</marquee>
      </h1>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php $ambil=$koneksi->query("SELECT * FROM deskripsi");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <div class="caption">
            <div class="thumbnail">
              <img class="img-thumbnail" src="img/compass.jpg" alt="Card image cap">
            </div>
            <h3 align="center">Sejarah <?php echo $perproduk['nama_produk']; ?></h3>
            <p align="justify"><?php echo $perproduk['sejarah_produk']; ?></p>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card my-4">
          <h5 class="card-header">Other..</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Measure foot size</a>
                  </li>
                  <li>
                    <a href="local.php">Local Quality</a>
                  </li>
                  <li>
                    <a href="faq.php">FAQ</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="ventela.php">Ventela</a>
                  </li>
                  <li>
                    <a href="wakai.php">Wakai</a>
                  </li>
                  <li>
                    <a href="geoff.php">Geoff Maxx</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-8 offset-lg-4">         
          <div class="thumbnail">
            <img class="img-thumbnail" src="img/compass2.jpeg" alt="Card image cap">
          </div> 
          <h2 align="center">Perkembangan Compass</h2>
          <p align="justify"><?php echo $perproduk['deskripsi_produk']; ?></p>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">        
        <div class="col-lg-8">
          <h2>Find Us!</h2>
          <div>
             <a class="btn" href="Facebook" onclick="window.open('https://www.facebook.com/sepatucompass/','_blank');" target="_blank">
                <i class="fab fa-facebook-f"></i>
             </a>                          
             <a class="btn" href="Instagram" onclick="window.open('https://www.instagram.com/sepatucompass/','_blank');" target="_blank">
                <i class="fab fa-instagram"></i>
             </a>
             <a class="btn" href="Youtube" onclick="window.open('https://www.youtube.com/channel/UCjeDs7AZg1ZgFBbIvhdCoww','_blank');" target="_blank">
                <i class="fab fa-youtube"></i>
             </a>
             <a class="btn" href="Compass" onclick="window.open('https://sepatucompass.com/','_blank');" target="_blank">Sepatu Compass</a>
           </div>
        </div>
      </div>
    </div>    
  </section>

  <section id="contact">
    <div class="container">      
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="geoff.php">&lArr; Geoff Maxx</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="nah.php">Nah Project &rArr;</a>
          </li>
        </ul>
      </nav>      
    </div>
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