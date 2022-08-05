<?php

include "koneksi.php";

$nis 			= $_POST['nis'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$tl 			= $_POST['tl'];
$alamat 		= $_POST['alamat'];

mysqli_query($connect,
	"insert into siswa
		values('$nis','$nama','$jk','$tl','$alamat')");

header("location:datasiswa.php");

?>