<?php

include "koneksi.php";

$id 			= $_POST['id'];
$nama_siswa 	= $_POST['nama_siswa'];
$nama_wali 		= $_POST['nama_wali'];
$nilai1 		= $_POST['nilai1'];
$nilai2 		= $_POST['nilai2'];
$nilai3 		= $_POST['nilai3'];

mysqli_query($connect,
	"insert into nilai
		values('$id','$nama_siswa','$nama_wali','$nilai1','$nilai2','$nilai3')");

header("location:datanilai.php");

?>