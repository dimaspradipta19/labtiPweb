<?php
session_start();

if ( !isset($_SESSION['user'])) {
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sekolah</title>
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


    <div class="container mt-3">
    <h2 class="text-center mt-5">Input Data Guru</h2>
    <form name="guru" action="inputguru.php" method="post">
        <div class="mb-3 mt-5">
        <label for="nig" class="mb-2">Nomer Induk Guru</label>
        <input type="text" class="form-control" id="nig" placeholder="NIG" name="nig" required>
        </div>
        <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
        </div>
        <div class="mb-3">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-select" id="jk" name="jk" required>
            <option selected disabled value="">Silahkan dipilih..</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="tl">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tl" placeholder="Tanggal Lahir" name="tl" required>
        </div>
        <div class="mb-3">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

</body>
</html>