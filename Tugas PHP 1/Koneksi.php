<?php 
    // (Koneksi Php) isi nama host, username mysql, dan password mysql, dan nama database anda
    $host="localhost";
    $user="root";
    $pass="";
    $database="pweb06443";

    $koneksi=mysqli_connect($host, $user, $pass, $database);
    if($koneksi){
      $buka=mysqli_select_db($koneksi, $database);
      echo "Database dapat terhubung ";
      if (!$buka){
        echo "Database tidak dapat terhubung";
      }
    }else{
      echo "MySQL tidak terhubung";
    }
    ?>
