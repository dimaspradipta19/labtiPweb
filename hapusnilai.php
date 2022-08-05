<?php

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($connect, "delete from nilai where id='$id'")or
	die(mysqli_error());

header("location:datanilai.php?pesan=hapus");

?>