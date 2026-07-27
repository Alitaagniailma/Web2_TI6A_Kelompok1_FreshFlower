<?php

include "../koneksi.php";


$id=$_GET['id'];



if(isset($_POST['update'])){


$status=$_POST['status'];



mysqli_query($conn,"
UPDATE pembayaran
SET status_verifikasi='$status'
WHERE id_pembayaran='$id'
");



header("Location:index.php");


}


$data=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT * FROM pembayaran
WHERE id_pembayaran='$id'
")
);


?>


<!DOCTYPE html>
<html>

<head>

<title>Verifikasi Pembayaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container mt-5">


<h2>💳 Verifikasi Pembayaran</h2>


<form method="POST">


<label>Status Verifikasi</label>


<select name="status" class="form-control mb-3">


<option value="Menunggu">

Menunggu

</option>


<option value="Diterima">

Diterima

</option>


<option value="Ditolak">

Ditolak

</option>


</select>



<button name="update"
class="btn btn-success">

Simpan

</button>


<a href="index.php"
class="btn btn-secondary">

Kembali

</a>


</form>


</div>


</body>

</html>