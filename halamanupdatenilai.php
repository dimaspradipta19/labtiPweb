<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .not-allowed {
            cursor: not-allowed;
            }
    </style>
    <title>Document</title>
</head>
<body>
    
    <a href="datanilai.php">
        <button type="button" class="btn btn-danger mt-3 ms-3">BACK</button>
    </a>

    <?php

    include ("koneksi.php");
    $sql = mysqli_query($connect, "select * from nilai where id = '$_GET[id]'");
    $result = mysqli_fetch_array($sql);	

    ?>

    <div class="container mt-3">
    <h2 class="text-center mt-5">Update Data Guru</h2>
    <form name="nilai" action="updatenilai.php" method="post">
    <div class="mb-3 mt-5">
        <label for="id" class="mb-2">ID Nilai</label>
        <input type="text" class="form-control not-allowed" id="id" name="id" value="<?php echo $result[0]; ?>" required>
        </div>
        <div class="mb-3">
        <label for="nama_siswa" class="mb-2">Nama Siswa</label>
        <select class="form-select" id="nama_siswa" id="nama_siswa" name="nama_siswa" required>
        <option selected disabled value="">Silahkan Dipilih..</option>
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
        <option selected disabled value="">Silahkan Dipilih..</option>
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
        <input type="text" class="form-control" id="nilai1" name="nilai1" value="<?php echo $result[3]; ?>" required>
        </div>
        <div class="mb-3">
        <label for="tl" class="mb-2">Nilai Fisika</label>
        <input type="text" class="form-control" id="nilai2" placeholder="Fisika" name="nilai2" value="<?php echo $result[4]; ?>" required>
        </div><div class="mb-3">
        <label for="tl" class="mb-2">Nilai Kimia</label>
        <input type="text" class="form-control" id="nilai3" placeholder="Kimia" name="nilai3" value="<?php echo $result[5]; ?>" required>
        </div>
        <div class="d-grid gap-2 mt-4 mb-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

</body>
</html>