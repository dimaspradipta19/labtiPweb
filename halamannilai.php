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


    <div class="container mt-3 mb-5">
    <h2 class="text-center mt-5">Input Data Nilai</h2>
    <form name="nilai" action="inputnilai.php" method="post">
        <div class="mb-3 mt-5">
        <label for="id" class="mb-2">ID Nilai</label>
        <input type="text" class="form-control" id="id" placeholder="ID" name="id" required>
        </div>
        <div class="mb-3">
        <label for="nama_siswa" class="mb-2">Nama Siswa</label>
        <select class="form-select" id="nama_siswa" id="nama_siswa" name="nama_siswa" required>
        <option selected disabled value="">Silahkan dipilih..</option>
    	<?php
          include "koneksi.php";

          $sql="select nama from siswa";
          $query= mysqli_query($connect, $sql);
          while($hasil=mysqli_fetch_array($query)){

          ?>
          <option value="<?php echo $hasil[0]; ?>"> <?php echo $hasil[0]; ?> </option>
        <?php } ?>
        </select>
        </div>
        <div class="mb-3">
        <label for="nama_wali" class="mb-2">Nama Wali Kelas</label>
        <select class="form-select" id="nama_wali" id="nama_wali" name="nama_wali" required>
        <option selected disabled value="">Silahkan dipilih..</option>
    	<?php
          include "koneksi.php";

          $sql="select nama from guru";
          $query= mysqli_query($connect, $sql);
          while($hasil=mysqli_fetch_array($query)){

          ?>
          <option value="<?php echo $hasil[0]; ?>"> <?php echo $hasil[0]; ?> </option>
        <?php } ?>
        </select>
        </div>
        <div class="mb-3">
        <label for="tl" class="mb-2">Nilai Matematika</label>
        <input type="text" class="form-control" id="nilai1" placeholder="Masukkan Nilai" name="nilai1" required>
        </div>
        <div class="mb-3">
        <label for="tl" class="mb-2">Nilai Fisika</label>
        <input type="text" class="form-control" id="nilai2" placeholder="Masukkan Nilai" name="nilai2" required>
        </div><div class="mb-3">
        <label for="tl" class="mb-2">Nilai Kimia</label>
        <input type="text" class="form-control" id="nilai3" placeholder="Masukkan Nilai" name="nilai3" required>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

</body>
</html>