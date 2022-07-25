<!DOCTYPE html>
<html>
<head>
	<title>Sistem Inventaris Barang::Tambah Data Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="TugasCRUD.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
	<style>
		label{
			color: white;
		}
	</style>
</head>
<body>
	<?php
	require "head.html";
	?>
<section id="herolist">
	<div class="hero-container">	
		<div class="section-title">
			<h1>Tambah Data Barang</h1>
		</div>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="06443sv_addBrg1.php" enctype="multipart/form-data">
			<div class="form-group">
				<label class="label" for="kode">Kode Barang :</label>
				<input class="form-control" type="text" name="kode" id="kode" required>
			</div>
			<div class="form-group">
				<label class="label" for="nama">Nama Barang :</label>
				<input class="form-control" type="text" name="nama" id="nama">
			</div>
			<div class="form-group">
				<label class="label" for="harga">Harga Barang :</label>
				<input class="form-control" type="text" name="harga" id="harga">
			</div>
			<div class="form-group">
				<label class="label" for="foto">Foto</label> 
				<input class="form-control" type="file" name="foto" id="foto">
			</div>
			<div>		
				<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
			</div>
		</form>
	</div>
</section>	
</body>
</html>