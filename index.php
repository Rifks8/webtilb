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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">I &hearts; <i class="bi bi-heart-fill"></i> Indonesia</h1>

        <!-- Blog Post 1 -->
        <div class="card mb-4">
          <img class="card-img-top" src="img/compass.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Compass</h2>
            <p class="card-text">Sepatu Compass merupakan merek sepatu yang berasal dari Bandung dengan sistem vulkanisir dan desain yang sangat berkualitas.</p>
            <a href="compass.php" class="btn btn-primary">Read More &rarr;</a>
          </div>          
        </div>

        <!-- Blog Post 2 -->
        <div class="card mb-4">
          <img class="card-img-top" src="img/nah.jpg" alt="Card image cap" width="300px" height="450px">
          <div class="card-body">
            <h2 class="card-title">Nah Project</h2>
            <p class="card-text">NAH Project adalah pelopor dan masih menjadi satu-satunya Brand Indonesia yang melakukan metode transparency pricing. Tapi apa sih itu transparency pricing?</p>
            <a href="nah.php" class="btn btn-primary">Read More &rarr;</a>
          </div>        
        </div>

        <!-- Blog Post 3 -->
        <div class="card mb-4">
          <img class="card-img-top" src="img/brodo.png" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Brodo</h2>
            <p class="card-text">Brodo adalah produk asli indonesia. memiliki kualitas yang tidak kalah dengan produk asing</p>
            <a href="brodo.php" class="btn btn-primary">Read More &rarr;</a>
          </div>        
        </div>      

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <div class="card my-4">          
          <div class="card-body">
            <img src="img/indo.png" class="card-img-top" alt="Card image cap">
          </div>
        </div>        

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Other..</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="foot.php">Measure foot size</a>
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

        <!-- /Side Widget -->
        

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TILB 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
