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

<!-- konten -->  
<section id="about">  
  <div class="container">
    <h2 align="center">Rekomendasi Toko Online</h2>
    <hr width="400px">
      <div class="row row-col-md-2">      
      <?php $ambil=$koneksi->query("SELECT * FROM toko"); ?>
      <?php while($perproduk=$ambil->fetch_assoc()){; ?>
        <div class="col mb-4">
          <div class="card">
            <img src="img/<?php echo $perproduk['foto_toko']; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $perproduk['nama_toko']; ?></h5>
                <p class="card-text" align="justify"><?php echo $perproduk['deskripsi_toko']; ?></p>
              </div>
            <div class="card-footer">
              <small class="text-muted">
                <a href="<?php echo $perproduk['nama_toko']; ?>" class="btn btn-primary" onclick="window.open('<?php echo $perproduk['link_toko']; ?>','_blank');" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </small>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="bg-light">
  <div class="container">
    <div class="row">
      <p align="justify">Toko online di atas merupakan supplier sepatu impor maupun lokal, namun untuk geoff max official store merupakan toko online resmi dari geoff max dan hanya menjual produknya sendiri. Jika kalian mencari keamanan yang terjamin, maka saya sarankan untuk membeli sepatu di Marketplace, seperti Tokopedia, Shopee, dll. Karena keamanan pembayaran sudah terjamin, begitupun dengan kualitas produk.</p>
      <p align="justify">Berikut beberapa toko online dari beberapa brand yang membuka lapak di marketplace :</p>
    </div>
    <b>Brodo : </b>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="https://www.tokopedia.com/brodo"><button type="button" class="btn btn-success">Tokopedia</button></a>

      <a class="btn btn-success" href="Tokopedia" onclick="window.open('https://www.tokopedia.com/brodo','_blank');" target="_blank">Tokopedia</a>

      <a href="https://shopee.co.id/brodoofficialstore"><button type="button" class="btn btn-warning">Shopee</button></a>
      <a href="https://www.blibli.com/merchant/brodo/BRO-35372"><button type="button" class="btn btn-primary">Blibli</button></a>      
      </div>
    <br>
    <br>
    <b>Sepatu Compass : </b>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="https://www.tokopedia.com/sepatucompass"><button type="button" class="btn btn-success">Tokopedia</button></a>
      </div>
    <br>
    <br>
    <b>Geoff Max : </b>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="https://www.tokopedia.com/gmxofficial"><button type="button" class="btn btn-success">Tokopedia</button></a>
      <a href="https://shopee.co.id/geoffmax"><button type="button" class="btn btn-warning">Shopee</button></a>
      <a href="https://www.blibli.com/merchant/umkm-geoff-max-official/GEM-60033"><button type="button" class="btn btn-primary">Blibli</button></a>
      </div>
    <br>
    <br>
    <b>Wakai : </b>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="https://www.tokopedia.com/wakai"><button type="button" class="btn btn-success">Tokopedia</button></a>
      <a href="https://shopee.co.id/wakai.official"><button type="button" class="btn btn-warning">Shopee</button></a>
      <a href="https://www.blibli.com/brand/wakai"><button type="button" class="btn btn-primary">Blibli</button></a>
      </div>
    <br>
    <br>
    <b>Nah Project : </b>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="https://shopee.co.id/nahproject"><button type="button" class="btn btn-warning">Shopee</button></a>
      <a href="https://www.blibli.com/merchant/nah-project/NAP-60053"><button type="button" class="btn btn-primary">Blibli</button></a>      
      </div>
    <br>
    <br>
    <small>nb : Untuk Ventela tidak memiliki toko online resmi, namun dapat membeli produk tersebut melalui reseller resmi dari Ventela, seperti toko online Store_jt dan 06 Original di atas.</small>
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