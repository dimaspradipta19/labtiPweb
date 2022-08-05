<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .nis {
            cursor: not-allowed;
            }
    </style>
    <title>Document</title>
</head>
<body>

    <a href="dataguru.php">
        <button type="button" class="btn btn-danger mt-3 ms-3">BACK</button>
    </a>

    <?php

    include ("koneksi.php");
    $sql = mysqli_query($connect, "select * from guru where nig = '$_GET[nig]'");
    $result = mysqli_fetch_array($sql);

    ?>

    <div class="container mt-3">
    <h2 class="text-center mt-5">Update Data Guru</h2>
    <form name="guru" action="updateguru.php" method="post">
        <div class="mb-3 mt-5">
        <label for="nig" class="mb-2">Nomer Induk Guru</label>
        <input type="text" class="form-control nis" id="nig" name="nig" value="<?php echo $result[0]; ?>" >
        </div>
        <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $result[1]; ?>" required>
        </div>
        <div class="mb-3">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-select" id="jk" name="jk" required>
            <option selected disabled value="">Silahkan Dipilih..</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="tl">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tl" name="tl" value="<?php echo $result[3]; ?>" required>
        </div>
        <div class="mb-3">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $result[4]; ?>" required>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

</body>
</html>
