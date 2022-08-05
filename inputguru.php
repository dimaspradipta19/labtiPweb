<?php

include "koneksi.php";

$nig 			= $_POST['nig'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$tl 			= $_POST['tl'];
$alamat 		= $_POST['alamat'];

mysqli_query($connect,
	"insert into guru
		values('$nig','$nama','$jk','$tl','$alamat')");

header("location:dataguru.php");

?>