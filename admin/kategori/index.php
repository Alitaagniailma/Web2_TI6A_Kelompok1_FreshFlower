<?php
include "../koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Data Kategori</h2>

<a href="../dashboard.php" class="btn btn-secondary mb-3">
← Dashboard
</a>

<a href="tambah.php" class="btn btn-success mb-3">
+ Tambah Kategori
</a>

<table class="table table-bordered table-striped">

<thead class="table-success">

<tr>

<th>No</th>

<th>Nama Kategori</th>

<th width="200">Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no=1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++ ?></td>

<td><?= $d['nama_kategori'] ?></td>

<td>

<a href="edit.php?id=<?= $d['id_kategori'] ?>" class="btn btn-warning btn-sm">

Edit

</a>

<a href="hapus.php?id=<?= $d['id_kategori'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Hapus kategori?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>

</html>