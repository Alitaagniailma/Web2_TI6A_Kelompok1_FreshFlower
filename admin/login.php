<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM admin
    WHERE username='$username'
    AND password='$password'");

    if(mysqli_num_rows($query)>0){

        $_SESSION['login']=true;

        header("Location: dashboard.php");
        exit;

    }else{

        echo "<script>
        alert('Username atau Password Salah');
        </script>";

    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Admin Fresh Flower</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card mt-5 shadow">

<div class="card-header text-center">

<h3>Login Admin</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
name="login"
class="btn btn-success w-100">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>