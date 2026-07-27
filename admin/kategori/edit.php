<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];

    mysqli_query($conn,"UPDATE kategori
    SET nama_kategori='$nama'
    WHERE id_kategori='$id'");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Kategori</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Edit Kategori</h2>

<form method="POST">

<div class="mb-3">

<label>Nama Kategori</label>

<input
type="text"
name="nama"
class="form-control"
value="<?= $d['nama_kategori']; ?>"
required>

</div>

<button
name="update"
class="btn btn-warning">

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