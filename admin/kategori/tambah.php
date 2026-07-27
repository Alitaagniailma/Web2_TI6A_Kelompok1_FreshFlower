<?php

include "../koneksi.php";

if(isset($_POST['simpan'])){

$nama=$_POST['nama'];

mysqli_query($conn,"INSERT INTO kategori(nama_kategori)
VALUES('$nama')");

header("Location:index.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Tambah Kategori</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Tambah Kategori</h2>

<form method="POST">

<div class="mb-3">

<label>Nama Kategori</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>

<button
name="simpan"
class="btn btn-success">

Simpan

</button>

<a href="index.php" class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</body>

</html>