<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Halaman utama user </title>
</head>
<body>
    <!-- navbar -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <h3>Halaman Tampilan User</h3>
          <div class="d-flex">
          <!-- <a href="logout.php"><button class="btn btn-outline-success">logout</button></a> -->
            <a href="halaman_selamat_datang.php">
                <button class="btn shadow tombol"> Login </button>
            </a>
          </div>
      </div>
      </nav>

      <!-- HALAMAN ISI -->
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
