<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beranda</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script type="text/javascript" src="js/query"></script>
  <script type="text/javascript" src="js/boostrap.js"></script>
</head>
<body>
    <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:form_login.php?pesan=belum_login");
  }
  ?>
  <div class=" container-fluid bgc-white teks-tengah " >
        <img class="margin-atas img-circle" src="media/marzuq.jpg", height="180px">
        <h1 class="teks-tengah" >Tentangku</h1>
        
        <p  style="text-align: center;">Website ini berisikan tentang biografi hidupku dan beberapa pengalamanku </p>
        

  </div> 
<nav class="navbar navbar-default navbar-fixed-top bgc-nav">
  <div class="container-fluid navbar-margin"  data-example-id="nav-pills-with-dropdown">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right ">
          <li ><a href="index.php?page=beranda" title="Beranda">Beranda</a></li>
          <li ><a href="index.php?page=profilku" title="Profilku">Profilku</a></li>
          <li ><a href="index.php?page=Kontak" title="Kontak">Kontak</a></li>
          <li ><a href="index.php?page=daftar_kontak" title="Daftar Kontak">Daftar Kontak</a></li>
          <li ><a href="index.php?page=multimedia" title="Multimedia">Multimedia</a></li>
          <li ><a href="index.php?page=Testkoneksi" title="Testkoneksi">Tes Koneksi</a></li>
          <li class="btn-danger" ><a href="logout.php" title="Logout">Log Out</a></li>
        </ul>
    </div>
    <div id="sidebar">
      
    </div>
  </div>
</nav> 
  <div class="container">
  <div class="row">
   <div class="content-buatan col-lg-8 col-xs-12 col-sm-12 bgc-white">
    <?php 
    if ( $_GET['page'] == 'beranda') {

        include "config.php"; // Load file config.php 
        include "profilku.php"; // Load file config.php 
        include "multimedia.php"; // Load file config.php  
        include "kontak.php"; // Load file config.php 
    }
    else
    {
        include "config.php"; // Load file config.php    
    }
    ?>
  </div>
  <center>
  
  </div>
  </center>
</div>
</body>
</html>