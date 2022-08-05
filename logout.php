<?php
include 'koneksi.php';

session_start();
session_destroy();

unset($_SESSION["username"]);

header('refresh:2;url=index.php');



?>
