<?php

session_start();

if ( isset($_SESSION['user'])) {
	header("location:beranda.php");
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
    <div class="container mt-3">
    <h2 class="text-center mt-5">LOGIN</h2>
    <form class="col-md-6 mx-auto" name="login" action="inputlogin.php" method="post">
        <div class="mb-3 mt-5">
            <label for="email">Username :</label>
            <input type="text" class="form-control mt-2" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="mb-3">
            <label for="pwd">Password :</label>
            <input type="password" class="form-control mt-2" id="password" placeholder="Enter password" name="password">
        <div class="form-check mb-3">
            <label class="form-check-label mt-3">
                <input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password
            </label>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

    <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>

</body>
</html>

