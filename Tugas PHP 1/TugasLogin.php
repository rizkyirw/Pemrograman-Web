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

    <!--Opsi Bootstrap 2 (dari direktori folder di file sistem kita)
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    -->
    
</head>
<body>
    <div class="header" align="center">
        <h1>My Profile</h1>
        <p>Silahkan Buat Akun & Login Pada Tempat Yang Telah Disediakan Pada Website</p>
    </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">My Bio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Help</a>
                </li>    
              </ul>
            </div>  
          </nav>
        </div>
        </div>
        <!--Table Container-->
        <div class="container-fluid" style="margin-top:15px">
        <div class="row align-items-center">
        <div class="col-md-3 text-center mb-2">
            <img class="img-thumbnail" src="image/IMG_20211121_110745.jpg" alt="My Photo">
        </div>
        <div class="col-md-6">
        <table class="table table-hover">
            <div class="table-responsive">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Data Diri</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>Isro' Rizky Wibowo</td>
                  </tr>
                  <tr>
                    <th scope="row">NIM</th>
                    <td>A12.2020.06443</td>
                  </tr>
                  <tr>
                    <th scope="row">Tempat Tgl Lahir</th>
                    <td>Blora, 06 November 1999</td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>Laki-Laki</td>
                  </tr>
                  <tr>
                    <th scope="row">Asal Sekolah</th>
                    <td>SMA N 1 Tunjungan</td>
                  </tr>
                  <tr>
                    <th scope="row">Perguruan Tinggi</th>
                    <td>Universitas Dian Nuswantoro</td>
                  </tr>
                  <tr>
                    <th scope="row">Prodi</th>
                    <td>Sistem Informasi</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>112202006443@mhs.dinus.ac.id</td>
                  </tr>
            </tbody>
            </table>
        </div>
        <div class="col-md-3 mt-3">
          <form method="post" class="card bg-dark text-light">
          <div class="card-body">
            <h4 class="card-title">Login Page</h4>

            <!-- Email input -->
            <div class="form-group">
              <input class="form-control" type="text" name="username"
                placeholder="Ketik Username Anda" />
              <label class="form-label" for="username">Username</label>
            </div>
  
            <!-- Password input -->
            <div class="form-group">
              <input class="form-control" type="password" name="passw" 
                placeholder="Ketik Password Anda" />
              <label class="form-label" for="passw">Password</label>
            </div>
            
            <!--Button Login-->
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-info" name="proses"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Tidak Memiliki Akun? <a href="#"
                  class="danger">Daftar</a></p>
            </div>
          </div>
          </form>
        </div>
        </div>
        <?php
          //include database connection file
          include "Koneksi.php";

          if(isset($_POST['proses'])){
            //insert data(kiri nama tabel pada database & kanan adalah nama dari objek inputan pada class)
            mysqli_query($koneksi,"insert into user set
            username = '$_POST[username]',
            password = md5('$_POST[passw]')");
            
            //show message when user added
            echo "- Data account baru telah tersimpan pada database";
            }
        ?>
  

        <footer class="bg-dark text-light text-center">
        <hr>
            <p>© 112202006443@mhs.dinus.ac.id | 2022</p>
        <hr>
        </footer>

    <!--Opsi 1 Bootstrap dan Popperjs bundle (pakai link)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    

    <!--Opsi2 Bootstrap query dan popperjs (dari direktori folder di file sistem kita)
    <script src="bootstrap/bootstrap-4.6.1-dist/js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    -->

</body>
</html>