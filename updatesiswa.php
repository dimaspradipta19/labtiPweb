<?php

include "koneksi.php";

$nis 			= $_POST['nis'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$tl 			= $_POST['tl'];
$alamat 		= $_POST['alamat'];

mysqli_query($connect,
    "update siswa set nama='$nama', jk='$jk', tl='$tl', alamat='$alamat' where nis='$nis'");

header("location:datasiswa.php");

?>