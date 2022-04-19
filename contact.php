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

<section id="contact" class="contact mb-5">
<div class="container">
  <div class="row pt-4 mb-4">
    <div class="col text-center">
      <h2> Contact us! <h2>
    </div>
  </div>

  <div class="row justify-content-center">
      <div class="col lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
          <div class="card-body">
            <h5 class="card-title">How to Find us</h5>
            <p class="card-text">This Is Local Brand!</p>
          </div>
        </div>
        <div class="contact_info">
            <div class="info_item">
              <i class="lnr lnr-home"></i>
              <h6>Pamulang, Tangerang Selatan</h6>
              <p>Komplek Pesona Serpong No 17</p>
            </div>
            <div class="info_item">
              <i class="lnr lnr-envelope"></i>
              <h6>ariefkusumo1@gmail.com</a></h6>
            </div>
            <div class="info_item">
              <i class="lnr lnr-phone-handset"></i>
              <h6>085883298511</h6>
              <a href=" https://api.whatsapp.com/send?phone=6285883298511" class="btn btn-primary">
              Chat Kami</a>
            </div>            
          </div>          
        </ul>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.315066791917!2d106.70328601431147!3d-6.353242963922127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e599f6a14c79%3A0xb75ad655c5088!2sPesona%20Serpong%20View%20Residence!5e0!3m2!1sen!2sid!4v1589868072634!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
</section>

  <section class="bg-light">
    <div class="col-md-8 mx-auto">
      <h4>Kirim Pertanyaan Anda!</h4>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Alamat Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Judul</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea class="form-control" name="pesan"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-danger" name="save">Kirim Pesan!</button> 
        </div>                 
      </form>
  </div>
</section>
 <?php 
  if (isset($_POST['save']))
{
  $koneksi->query("INSERT INTO pesan(nama_pengirim, email_pengirim, judul_pesan, isi_pesan) 
    VALUES('$_POST[nama]', '$_POST[email]', '$_POST[judul]', '$_POST[pesan]')");

echo "<script>alert('Pesan berhasil terkirim!');</script>";
echo "<script>location='contact.php';</script>";

}
  ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TILB 2020</p>

    </div>
    <!-- /.container -->
  </footer>

</body>
</html>