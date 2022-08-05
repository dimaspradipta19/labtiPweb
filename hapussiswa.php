<?php

include 'koneksi.php';

$nis = $_GET['nis'];
mysqli_query($connect, "delete from siswa where nis='$nis'")or
	die(mysqli_error());

header("location:datasiswa.php?pesan=hapus");

?>