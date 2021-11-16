<?php 	
$koneksi= new mysqli("localhost", "root", "");
$sql= "CREATE DATABASE kelompok1";
$q=$koneksi-> query($sql);
if($q){
	echo"Database Sudah Dibuat";
}
else{ echo "Database Gagal Dibuat";
}

$sql2="CREATE TABLE kelompok1.`anggota`(
 `NPM` varchar(30) not null primary key,
 `Nama`varchar(50) not null,
 `password` varchar(30) not null)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$q2=$koneksi->query($sql2);
 if ($q2) {
     echo "Tabel anggota  sudah dibuat !";
 } else {
     echo "Tabel  anggota gagal dibuat !"; 
 }
?>