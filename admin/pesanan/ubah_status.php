<?php

include "../koneksi.php";


$id=$_GET['id'];



if(isset($_POST['update'])){


$status=$_POST['status'];



mysqli_query($conn,"
UPDATE pesanan 
SET status='$status'
WHERE id_pesanan='$id'
");



header("Location:index.php");


}



$data=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT * FROM pesanan
WHERE id_pesanan='$id'
")
);


?>


<!DOCTYPE html>
<html>

<head>

<title>Ubah Status Pesanan</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>


<div class="container mt-5">


<h2>Ubah Status Pesanan</h2>



<form method="POST">


<label>Status Pesanan</label>


<select name="status" class="form-control mb-3">


<option value="Menunggu Pembayaran">

Menunggu Pembayaran

</option>


<option value="Diproses">

Diproses

</option>


<option value="Dikirim">

Dikirim

</option>


<option value="Selesai">

Selesai

</option>


<option value="Batal">

Batal

</option>


</select>



<button name="update"
class="btn btn-success">

Update

</button>



<a href="index.php"
class="btn btn-secondary">

Kembali

</a>


</form>


</div>


</body>

</html>