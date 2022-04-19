<?php 
session_start();
$koneksi = new mysqli("localhost","root","","tilb");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>This Is Local Brand!</title>

  <!-- Favicons -->
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
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h2>This Is Local Brand</h2>

        <h5>( Login yourself to get access )</h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>   Enter Details To Login </strong>  
          </div>
          <div class="panel-body">
            <form role="form" method="post">
             <br />
            <label>Username</label>
             <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"></i></span>
              <input type="text" class="form-control" name="user" />
            </div>
            <label>Password</label>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control"  name="pass" />
            </div>            

           <button class="btn btn-primary" name='login'>Login</button>
           <hr /> 
         </form>
         <?php
         if (isset($_POST['login'])) 
         {
          $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' 
            AND password ='$_POST[pass]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1)
          {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
          }
          else
          {
            echo "<div class='alert alert-danger'>Login gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>"; 
          }
         }
         ?>
       </div>

     </div>
   </div>


 </div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>
