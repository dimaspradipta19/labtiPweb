<?php

include 'koneksi.php';

$nig = $_GET['nig'];
mysqli_query($connect, "delete from guru where nig='$nig'")or
	die(mysqli_error());

header("location:dataguru.php?pesan=hapus");

?>