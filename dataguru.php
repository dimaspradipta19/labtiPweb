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
    <title>Document</title>
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
    <div class="container mt-5">
    <h2 class="text-center mb-3">Data Guru</h2>            
    <table class="table table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Update</th>
            <th>Hapus</th>
        </tr>
        </thead>
        <tbody>
        <?php
			include "koneksi.php";
			$sql = mysqli_query ($connect, "select * from guru");
			while ($result = mysqli_fetch_array($sql)){ 
        ?>
        <tr>
            <td><?php echo $result[0];?></td>
            <td><?php echo $result[1];?></td>
            <td><?php echo $result[2];?></td>
            <td><?php echo $result[3];?></td>
            <td><?php echo $result[4];?></td>
            <td><a href="halamanupdateguru.php?nig=<?php echo $result[0]; ?>">
                <button type="button" class="btn btn-outline-warning">Update</button>
                </a>
            </td>
            <td>
                <a href="hapusguru.php?nig=<?php echo $result[0]; ?>">
                <button type="button" class="btn btn-outline-danger">Hapus</button>
                </a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>