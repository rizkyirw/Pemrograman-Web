<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <!--Opsi Bootstrap 1 (pakai link)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="crud_barang06443/script.js"></script>
    <link href="TugasCRUD.css" rel="stylesheet">
    
</head>
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <h1>IRW Cargo - Inventory System</h1>
        <h2>Created By A12.2020.06443</h2>
        <div class="login-container">
            <div class="text-light">
              <form method="post" action="">

              <!-- Email input -->
              <div class="form-group">
                <input class="form-control" type="text" name="username" id="username" placeholder="Username"/>
              </div>
    
              <!-- Password input -->
              <div class="form-group">
                <input class="form-control" type="password" name="passw" id="passw" placeholder="Password"/>
              </div>
              
              <!--Button Login-->
              <div class="login-container">
                <button class="btn btn-primary-outline text-light" type="submit">Login</button>
              </div>
              <br><br>

              <div class="form-group">
                <h2 class="text-center">Tidak Memiliki Akun?</h2>
                <h2 class="text-center"><a href="createacc.php">Buat Akun</a></h2>
              </div>
              
            </div>
          </form>
        </div>
        <!-- ======= Login Akun ======= -->
        <?php
        if (isset($_POST['username'])){
          require "koneksi.php";
          $username=$_POST['username'];
          $passw=md5($_POST['passw']);
          $sql="select * from user where username='$username' and password='$passw'"; 
          $hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
          $row=mysqli_fetch_assoc($hasil);
          if (mysqli_affected_rows($koneksi)>0)
          {
            $_SESSION['username']=$username;
            echo "<meta http-equiv=refresh content=0;URL='06443homeadmin.php'>";
          }
          else
          {
            echo "<div class='alert alert-danger w-25 mx-auto text-center mt-1 alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            Maaf, login gagal. Ulangi login.
            </div>";
          }
        }
        ?>
    </div>

  </section><!-- End Hero -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>