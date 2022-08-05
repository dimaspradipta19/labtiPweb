<?php

include "koneksi.php";

$nig 			= $_POST['nig'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$tl 			= $_POST['tl'];
$alamat 		= $_POST['alamat'];

mysqli_query($connect,
    "update guru set nama='$nama', jk='$jk', tl='$tl', alamat='$alamat' where nig='$nig'");

header("location:dataguru.php");

?>