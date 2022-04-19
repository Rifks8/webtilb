<?php
session_start();
//koneksi database
$koneksi = new mysqli("localhost","root","","tilb");


if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda harus login!!');</script>";
  echo "<script>location='login1.php';</script>";

  exit();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>This Is Local Brand!</title>

  <!-- Favicons -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="black-bg">
      
      <!--logo start-->
      <a href="index.php" class="logo"><b>Store_</b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php?halaman=logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php"><img src="img/logo2.png" class="img-circle" width="90"></a></p>
          <h5 class="centered">TILB!</h5>
          <li class="mt">
            <a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
            <a href="index.php?halaman=produk"><i class="fa fa-briefcase"></i><span>Produk</span></a>
            <a href="index.php?halaman=toko"><i class="fa fa-archive"></i><span>Toko</span></a>
            <a href="index.php?halaman=pelanggan"><i class="fa fa-envelope"></i><span>Pesan</span></a>
            <a href="index.php?halaman=faq"><i class="fa fa-question"></i><span>F.A.Q</span></a>
            <a href="index.php?halaman=logout"><i class="fa fa-key"></i><span>Logout</span></a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--nav side-->
    <div id="page-wrapper">
      <div id="page-inner">        
        <?php
        if (isset($_GET['halaman']))
        {
          if ($_GET['halaman']=="produk") 
          {
            include 'produk.php';
          }
          elseif ($_GET['halaman']=="toko")
          {
            include 'toko.php';
          }
          elseif ($_GET['halaman']=="pelanggan")
          {
            include 'pelanggan.php';
          }
          elseif ($_GET['halaman']=="ubahtoko")
          {
            include 'ubahtoko.php';
          }
          elseif ($_GET['halaman']=="tambahproduk") 
          {
            include 'tambahproduk.php';
          }          
          elseif ($_GET['halaman']=="hapuspelanggan") 
          {
            include 'hapuspelanggan.php';
          }
          elseif ($_GET['halaman']=="hapusfaq") 
          {
            include 'hapusfaq.php';
          }          
          elseif ($_GET['halaman']=="ubahproduk") 
          {
            include 'ubahproduk.php';
          }
          elseif ($_GET['halaman']=="faq") 
          {
            include 'faq.php';
          }
          elseif ($_GET['halaman']=="ubahfaq") 
          {
            include 'ubahfaq.php';
          }
          elseif ($_GET['halaman']=="logout") 
          {
            include 'logout.php';
          }
          elseif ($_GET['halaman']=="tambahfaq") 
          {
            include 'tambahfaq.php';
          }            
        }    
        else
        {
          include 'home.php';
        }
        ?>
      </div>
    </div>
    </section>  
    <!--main content start-->
    <section>
      <section class="wrapper">
        <h1>kosong</h1>        
      </section>
    </section>
    <!--main content end-->
    
</body>

</html>
