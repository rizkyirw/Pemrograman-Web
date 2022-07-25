<!DOCTYPE html>
<html>
	<head>
        <title>Sistem Informasi Inventaris::List Daftar Barang</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/styleku.css">
        <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
        <script src="bootstrap4/js/bootstrap.js"></script>
        <script>
            window.print()
        </script>
        <!-- Use fontawesome 5-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	</head>
	<body>
        <?php
        require 'koneksi.php';
        $sql="select * from data_barang";		
        $qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
        ?>
            <div align="center">
                <h1>Laporan Data Barang<br>
                <sub>Isro' Rizky Wibowo - A12.2020.06443<sub><br>
            </div>
                <br><br>
            <!-- Cetak data dengan tampilan tabel -->
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga (Rp.)</th>
                    <th>Foto</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach($qry as $row)
                        {
                        ?>	
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $row["kode"]?></td>
                            <td><?php echo $row["nama"]?></td>
                            <td><?php echo $row["harga"]?></td>
                            <td><img src="<?php echo "foto/".$row["foto"]?>" height="100"></td>
                        </tr>
                        <?php 
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>