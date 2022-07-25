<!DOCTYPE html>
<html>
<head>
	<title>Sistem Inventaris Barang::Daftar Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Opsi Bootstrap 1 (pakai link)-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="TugasCRUD.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
		
</head>
<body>
<?php

//memanggil file berisi fungsi2 yang sering dipakai
require "koneksi.php";
require "head.html";

/*	---- cetak data per halaman ---------	*/

//--------- konfigurasi

//jumlah data per halaman
$jmlDataPerHal = 4;

//cari jumlah data
if (isset($_POST['cari'])){
	$cari=$_POST['cari'];
	$sql="select * from data_barang where 	kode like'%$cari%' or
						  					nama like '%$cari%' or
						  					harga like '%$cari%'";
}else{
	$sql="select * from data_barang";		
}
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$jmlData = mysqli_num_rows($qry);

$jmlHal = ceil($jmlData / $jmlDataPerHal);
if (isset($_GET['hal'])){
	$halAktif=$_GET['hal'];
}else{
	$halAktif=1;
}

$awalData=($jmlDataPerHal * $halAktif)-$jmlDataPerHal;

//Jika tabel data kosong
$kosong=false;
if (!$jmlData){
	$kosong=true;
}
//data berdasar pencarian atau tidak
if (isset($_POST['cari'])){
	$cari=$_POST['cari'];
	$sql="select * from data_barang where 	kode like'%$cari%' or
											nama like '%$cari%' or
											harga like '%$cari%'
											limit $awalData,$jmlDataPerHal";
}else{
	$sql="select * from data_barang limit $awalData,$jmlDataPerHal";		
}
//Ambil data untuk ditampilkan
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
?>
<section id="herolist">
	<div class="hero-container">
		<div class="section-title">
			<h1>Data Barang</h1>
		</div>
		<div class="container">
			<div class="text-center"><a href="06443printbarang.php"><img src="img/icons8-pdf.png"/>
			<br>
			<span>Cetak Data</span>
		</div>
			<!--<div class="text-center"><a href="prnListBarang.php"><span class="fas fa-print">&nbsp;Print Data</span></a></div>-->
			<span class="float-left">
				<a class="btn btn-success" href="06443addBarang.php">Tambah Barang</a>
			</span>
			<span class="float-right">
				<form action="" method="post" class="form-inline">
					<button class="btn btn-success" type="submit">Cari</button>
					<input class="form-control mr-2 ml-2" type="text" name="cari" placeholder="cari data barang..." autofocus autocomplete="off">
				</form>
			</span>
			<br><br>
			<ul class="pagination">
				<?php
				//navigasi pagination
				//cetak navigasi back
				if ($halAktif>1){
					$back=$halAktif-1;
					echo "<li class='page-item'><a class='page-link' href=?hal=$back>&laquo;</a></li>";
				}
				//cetak angka halaman
				for($i=1;$i<=$jmlHal;$i++){
					if ($i==$halAktif){
						echo "<li class='page-item'><a class='page-link' href=?hal=$i style='font-weight:bold;color:red;'>$i</a></li>";
					}else{
						echo "<li class='page-item'><a class='page-link' href=?hal=$i>$i</a></li>";
					}	
				}
				//cetak navigasi forward
				if ($halAktif<$jmlHal){
					$forward=$halAktif+1;
					echo "<li class='page-item'><a class='page-link' href=?hal=$forward>&raquo;</a></li>";
				}
				?>
			</ul>	
			<!-- Cetak data dengan tampilan tabel -->
			<table class="table table-hover">
			<thead class="thead-light">
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Harga Barang (Rp.)</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
			//jika data tidak ada
			if ($kosong){
				?>
				<tr><th colspan="6">
					<div class="alert alert-info alert-dismissible fade show text-center">
					Data tidak ada
					</div>
				</th></tr>
				<?php
			}else{	
				if($awalData==0){
					$no=$awalData+1;
				}else{
					$no=$awalData;
				}
				while($row=mysqli_fetch_assoc($hasil)){
					?>	
					<tr class="tr">
						<td><?php echo $no?></td>
						<td><?php echo $row["kode"]?></td>
						<td><?php echo $row["nama"]?></td>
						<td><?php echo $row["harga"]?></td>
						<td><img src="<?php echo "foto/".$row["foto"]?>" height="50"></td>
						<td>
						<a class="btn btn-primary btn-sm" href="06443editBrg.php?kode=<?php echo $row['id']?>">Edit</a>
						<a class="btn btn-danger btn-sm" href="06443hpsBrg.php?kode=<?php echo $row["id"]?>" id="linkHps" onclick="return confirm('Hapus Barang Ini ?')">Hapus</a>
						</td>
					</tr>
					<?php 
					$no++;
				}
			}
			?>
			</tbody>
			</table>
		</div>
	</div>
</section>
</body>
</html>	
