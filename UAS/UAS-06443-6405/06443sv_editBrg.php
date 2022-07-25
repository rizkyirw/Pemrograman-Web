<?php
//memanggil file library
require "koneksi.php";

//memindahkan data kiriman dari form ke var biasa
$id=$_POST["id"];
$nama=$_POST["nama"];
$harga=$_POST["harga"];
$uploadOk=1;

//membuat query
$sql="update data_barang set 	nama='$nama',
					 			harga='$harga'
					 			where id='$id'";
mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
header("location:06443ListBarang.php");
?>