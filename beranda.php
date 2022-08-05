<?php
session_start();

if ( !isset($_SESSION['user'])) {
	header("location:login.php");
}
?>

<?php
  		if($_SESSION['user']) {
  			$user_login = $_SESSION['user'];
  		}
  	include 'koneksi.php';
  	$sql = "select * from admin where username='$user_login'";
	$check = mysqli_query($connect, $sql);
	$array = mysqli_fetch_array($check);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="beranda.css">
    <title>beranda</title>
</head>
<body>


  <!-- navbar -->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="assets/img/avatar.png" alt="Logo" style="width:40px;" class="rounded-pill">
        </a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item p-2">
                <a class="nav-link" href="beranda.php">Beranda</a>
            </li>
            <li class="nav-item dropdown p-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Siswa</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="halamansiswa.php">Input</a></li>
                    <li><a class="dropdown-item" href="datasiswa.php">Data</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown p-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Guru</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="halamanguru.php">Input</a></li>
                    <li><a class="dropdown-item" href="dataguru.php">Data</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown p-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Nilai</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="halamannilai.php">Input</a></li>
                    <li><a class="dropdown-item" href="datanilai.php">Data</a></li>
                </ul>
            </li>
        </ul>

        </div>
        <div class="d-flex">
        <a href="logout.php"><button class="btn btn-outline-success">logout</button></a>
        </div>
    </div>
    </nav>


  <!-- isi halaman -->


    <div class="container-fluid mt-5 text-center">
    <h2 class="welcome">Selamat Datang!</h2>
    </div>


    <div class="container tombol-beranda">
        <h5 class="text-center mb-4">Silahkan Pilih Data Untuk Di Input</h5>
        <div class="row ms-auto">
            <div class="col-4 text-center">
                <a href="halamansiswa.php">
                    <button type="button" class="btn btn-danger shadow tombol1">
                        <img class="icon" src="assets/img/siswa.png" alt="">
                        <p class="judul-icon mt-3">SISWA</p>
                    </button>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="halamanguru.php">
                    <button type="button" class="btn btn-success shadow tombol2">
                        <img class="icon" src="assets/img/guru.png" alt="">
                        <p class="judul-icon mt-3">GURU</p>
                    </button>
                </a>
            </div>
            <div class="col-4 text-center ">
                <a href="halamannilai.php">
                    <button type="button" class="btn btn-primary shadow tombol3">
                        <img class="icon" src="assets/img/nilai.png" alt="">
                        <p class="judul-icon mt-3">NILAI</p>
                    </button>
                </a>
            </div>
        </div>
    </div>


    <div class="container data-nama mb-5">

        <div class="row ms-auto">
            <div class="col-6">

            <h5 class="text-center mb-3"> Daftar Nama Siswa</h5>

            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                <tr>
                    <th>Nama</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    $sql = mysqli_query ($connect, "select nama from siswa");
                    while ($result = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $result[0];?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>


            </div>
            <div class="col-6">

                <h5 class="text-center mb-3"> Daftar Nama Guru</h5>

                <table class="table table-hover table-bordered">
                    <thead class="table-dark text-center">
                    <tr>
                        <th>Nama</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "koneksi.php";
                        $sql = mysqli_query ($connect, "select nama from guru");
                        while ($result = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $result[0];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
</html>
