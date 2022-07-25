<?php
//memanggil file pustaka fungsi
require "koneksi.php";

//memindahkan data kiriman dari form ke var biasa
$id=$_GET["kode"];

//membuat query hapus data
$sql="delete from data_barang where id=$id";
mysqli_query($koneksi,$sql);
header("location:06443ListBarang.php");
?>