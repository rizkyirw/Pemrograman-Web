<!DOCTYPE html>
<html>
<head>
	<title>Sistem Inventaris Barang::Edit Data Barang</title>
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
	require "koneksi.php";
	require "head.html";
	$id=$_GET['kode'];
	$sql="select * from data_barang where id='$id'";
	$qry=mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_assoc($qry);
	?>
<section id="herolist">
	<div class="hero-container">	
		<div class="section-title">
			<h1>Edit Data Barang</h1>
		</div>
		<div class="row">
		<div class="col-sm-4 text-center">
			<img class="rounded img-thumbnail"src="foto/<?php echo $row['foto']?>">
			<div>
				[ <a href="06443gantiFotoBrg.php?id=<?php echo $row['id']?>">Ganti Foto</a> ]
			</div>	
		</div>
		<div class="col-sm-8">
			<form enctype="multipart/form-data" method="post" action="06443sv_editBrg.php">
				<div class="form-group">
					<label class="label" for="kode">Kode Barang :</label>
					<input class="form-control" type="text" name="kode" id="kode" value="<?php echo $row['kode']?>" readonly>
				</div>
				<div class="form-group">
					<label class="label" for="nama">Nama Barang :</label>
					<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $row['nama']?>">
				</div>
				<div class="form-group">
					<label class="label" for="harga">Harga Barang :</label>
					<input class="form-control" type="text" name="harga" id="harga" value="<?php echo $row['harga']?>">
				</div>				
				<div>		
					<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
				</div>
				<input type="hidden" name="id" id="id" value="<?php echo $id?>">
			</form>
		</div>
		</div>
	</div>
	<script>
		$('#submit').on('click',function(){
			var id 			= $('#id').val();
			var nama		= $('#nama').val();
			var harga		= $('#harga').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editBrg.php",
				data	: {id:id, nama:nama, harga:harga}
			});
		});
	</script>
</section>
</body>
</html>