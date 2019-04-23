<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';

switch($page){
  case 'beranda': // $page == home (jika isi dari $page adalah home)
  include "beranda.php"; // load file home.php yang ada di folder views
  break;
  
  case 'profilku': // $page == berita (jika isi dari $page adalah berita)
  include "profilku.php"; // load file berita.php yang ada di folder views
  break;

  case 'Kontak': // $page == berita (jika isi dari $page adalah berita)
  include "kontak.php"; // load file berita.php yang ada di folder views
  break;
  
  case 'daftar_kontak': // $page == tentang (jika isi dari $page adalah tentang)
  include "kontak_daftar.php"; // load file tentang.php yang ada di folder views
  break;
  case 'multimedia': // $page == tentang (jika isi dari $page adalah tentang)
  include "multimedia.php"; // load file tentang.php yang ada di folder 
  break;
   case 'Testkoneksi': // $page == tentang (jika isi dari $page adalah tentang)
  include "Testkoneksi.php"; // load file tentang.php yang ada di folder 
  break;
  // case 'case_selanjutnya':
  // include "case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "beranda.php";
}
?>