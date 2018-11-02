<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:index.php");
}

include '../db_connect.php';

if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $row = mysqli_fetch_array($result);
            $_SESSION['admin_id'] = $row['admin_id'];
            $_SESSION['email'] = $email;
            header("location:index.php");
        } else {
            echo 'wrong';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Genius Admin Login</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">

                <div class="card-header">Login Administrator</div>
                <div class="card-body">
                    <form action="login.php"method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
                        </div>

                        <input type="submit" name="btn" class="btn btn-primary" value="login">
                    </form>
                    <div class="text-center">
                        <br>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
