<?php

session_start();

if ( isset($_SESSION['user'])) {
	header("location:beranda.php");
}

	include "koneksi.php";

	$username	= $_POST['username'];
	$password	= $_POST['password'];

	$sql = "select * from admin where username='$username' and password='$password'";
	$check = mysqli_query($connect, $sql);
	$array = mysqli_fetch_array($check);

	if($result = mysqli_num_rows($check)==1) {
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;

		header("location:beranda.php");
	}
	else {
		header("location:login.php");
	}

?>