<!DOCTYPE html>
<html>
<head>
	<title>Sistem Inventaris Barang::Mengganti Foto Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="TugasCRUD.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
	<?php
	//panggil file pustaka fungsi
	require "koneksi.php";
	
	//buat query
	$id=$_GET['id'];
	$sql="select * from data_barang where id='$id'";
	$hasil=mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	$row=mysqli_fetch_assoc($hasil);
	
	//panggil file layout header
	require "head.html";
	?>
<section id="herolist">
	<div class="hero-container">
		<div class="section-title">
			<h1>Ganti Foto Barang</h1>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="text-center">
					<img class="img-fluid" src="foto/<?php echo $row['foto']?>">
					<p><?php echo $row['kode']." - ".$row['nama']?></p>
				</div>	
			</div>	
			<div class="col-sm-6">
				<form class="form-inline" method="post" action="06443simpanGantifotoBrg1.php" enctype="multipart/form-data">				 
				<input class="form-control mr-2" type="file" name="foto" id="foto">
				<input type="hidden" name="id" value="<?php echo $id?>">
				<button class="btn btn-primary" type="submit" name="simpan" id="simpan">Simpan</button>
				</form>
			</div>
		</div>	
	</div>
</section>	
</body>
</html>