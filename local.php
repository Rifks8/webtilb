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

  <style>
    #BtnTop {
        position: fixed;
        float: right;
        bottom: 10px;
        right: 5%;
        background-color: #3cb163;
        border: 1px solid #a9e0bc;
        border-radius: 4px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    }
    #BtnTop > a {
        color: white;
        text-decoration: none;
        display: inline-block;
        padding: 2px 10px 2px 10px;
    }
    #BtnTop:hover {
        background-color: #04571f;
        border: 1px solid #3cb163;
    }
    </style>

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

<a name="top"></a>

 <header class="bg-primary text-white">
    <div class="container text-center">
       <?php $ambil=$koneksi->query("SELECT * FROM deskripsi");?>
       <?php ($perproduk=$ambil->fetch_assoc()); ?>
      <h1>
        <marquee height="50">This Is Local Pride!</marquee>
      </h1>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h3 id="list-item-1"></h3>
          <div class="caption">
            <div class="thumbnail">
              <img class="card-img-top" src="img/nah4.jpg" alt="Card image cap">
            </div>
            <h3 align="left"><?php echo $perproduk['nama_sepatu']; ?></h3>
            <p align="left"><?php echo $perproduk['kualitas_sepatu']; ?></p>
            <a href="nah.php" class="btn btn-primary">NAH Project &rarr;</a>
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
           <div class="card my-4">
              <h5 class="card-header">Note</h5>
                <div class="card-body">                                        
                  <p>Berikut merupakan beberapa brand lokal yang memiliki kualitas daya saing yang tidak kalah dengan brand luar negeri (impor).</p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Navigation &darr;</a>      
                    <div class="collapse" id="collapseExample">
                      <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">NAH Project</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">Compass</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">Brodo</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-4">Geoff Max</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-5">League</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-6">Yongki Komaladi</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-7">Lokal vs Impor</a>
                      </div>
                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">  
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
        <div class="col-lg-4"></div>
        <div class="col-lg-8 mx-auto">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal WHERE id_lokal='2'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h4 id="list-item-2"></h4>
          <div class="thumbnail">
            <img class="card-img-top" src="img/compass3.jpg" alt="Card image cap" width="300px" height="450px">
          </div> 
          <h2 align="right"><?php echo $perproduk['nama_sepatu']; ?> Shoes</h2>          
          <p align="right"><?php echo $perproduk['kualitas_sepatu']; ?></p>
          <p align="right">
          <a href="compass.php" class="btn btn-primary">Compass &rarr;</a>
          </p>
        </div>
        </div>
      </div>
    </div>    
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal WHERE id_lokal='3'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h4 id="list-item-3"></h4>
          <div class="caption">
            <div class="thumbnail">
              <img class="card-img-top" src="img/brodo5.png" alt="Card image cap">              
            </div>
            <h3 align="left"><?php echo $perproduk['nama_sepatu']; ?></h3>
            <p align="left"><?php echo $perproduk['kualitas_sepatu']; ?></p>
            <a href="brodo.php" class="btn btn-primary">Brodo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

   <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8 mx-auto">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal WHERE id_lokal='4'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h4 id="list-item-4"></h4>
          <div class="thumbnail">
            <img class="card-img-top" src="img/geoff3.jpg" alt="Card image cap" width="300px" height="450px">
          </div> 
          <h2 align="right"><?php echo $perproduk['nama_sepatu']; ?></h2>          
          <p align="right"><?php echo $perproduk['kualitas_sepatu']; ?></p>
          <p align="right">
            <a href="geoff.php" class="btn btn-primary">Geoff Max &rarr;</a>  
          </p>          
        </div>
        </div>
      </div>
    </div>    
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal WHERE id_lokal='5'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h3 id="list-item-5"></h3>
          <div class="caption">
            <div class="thumbnail">
              <img class="card-img-top" src="img/league.jpg" alt="Card image cap">              
            </div>
            <h3 align="left"><?php echo $perproduk['nama_sepatu']; ?></h3>
            <p align="left"><?php echo $perproduk['kualitas_sepatu']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8 mx-auto">
          <?php $ambil=$koneksi->query("SELECT * FROM lokal WHERE id_lokal='6'");?>
          <?php ($perproduk=$ambil->fetch_assoc()); ?>
          <h3 id="list-item-6"></h3>
          <div class="thumbnail">
            <img class="card-img-top" src="img/yongki.jpg" alt="Card image cap" width="300px" height="450px">
          </div> 
          <h2 align="right"><?php echo $perproduk['nama_sepatu']; ?></h2>          
          <p align="right"><?php echo $perproduk['kualitas_sepatu']; ?></p>
        </div>
        </div>
      </div>
    </div>    
  </section>

<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3 id="list-item-7">Lalu bagaimana kualitas produk lokal jika dibandingkan dengan produk impor?</h3>
          <img src="img/lokal2.jpg">
          <h4 align="center">Sebagai contoh saya ambil brand lokal Ventela dengan brand impor Vans</h4>
          <p align="justify">Beberapa bulan kebelakang masyarakat Indonesia dihebohkan dengan kehadiran sepatu Ventela yang (katanya) sekilas mirip dengan sepatu Vans. Lalu apakah Ventela dapat bersaing dengan Vans? mari kita lihat berdasarkan materialnya dibawah ini.</p>
        </div>
        <div class="col-6">
          <h5 align="center">Ventela</h5>
          <p align="justify">Pada bagian upper sole, Ventela menggunakan material Canvas 12oz berkualitas baik, cukup lembut, dan memiliki daya tahan yang kuat sehingga cocok untuk digunakan sehari-hari.</p>
          <p align="justify">Pada bagian insole, Ventela menggunakan material Ultralite Foam Insole membuat insole menjadi terasa empuk dan nyaman  sehingga kaki menjadi tidak mudah pegal.</p>
          <p align="justify">Dan pada bagian penjahitan, Ventela melakukan Stitching (Jahitan) yang rapih menjadikan sepatu memiliki bentuk yang bagus, kokoh, nyaman, dan tahan lama.</p>
        </div>
        <div class="col-6">
          <h5 align="center">Vans</h5>
          <p align="justify">Vans menggunakan material Canvas atau Suede pada bagian upper sole sepatu mereka. Memiliki kualitas terbaik dan cukup tebal.</p>
          <p align="justify">Menggunakan teknik menjahit yang kurang lebih sama dengan Ventela, serta membuat motif khas Vans dengan sangat baik dan rapi.</p>
          <p align="justify">Keunikan pada Vans tidak hanya pada logo pada upper sole nya saja, namun juga di bagian bawah sepatu atau outsole. Menggunakan material karet yang dikompress sehingga membentuk motif (waffle). Setiap model Vans memiliki motif atau kode waffle yang berbeda.</p>
        </div>
      </div>
    </div>
</section>


<div id="BtnTop">
  <a href="#top" class="btn btn-primary">Top &uArr;</a>
</div>

 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TILB 2020</p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>