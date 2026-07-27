<?php
include "../koneksi.php";

$query = mysqli_query($conn,"
SELECT produk.*, kategori.nama_kategori
FROM produk
JOIN kategori 
ON produk.id_kategori = kategori.id_kategori
");

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>

<div class="container mt-5">

<h2>🌸 Data Produk</h2>

<a href="../dashboard.php" class="btn btn-secondary mb-3">
← Dashboard
</a>

<a href="tambah.php" class="btn btn-success mb-3">
+ Tambah Produk
</a>


<table class="table table-bordered">

<thead class="table-success">

<tr>
<th>No</th>
<th>Foto</th>
<th>Nama Produk</th>
<th>Kategori</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

</thead>


<tbody>

<?php
$no=1;

while($d=mysqli_fetch_assoc($query)){
?>

<tr>

<td><?= $no++ ?></td>


<td>

<img src="../../uploads/<?= $d['foto']; ?>"
width="80"
height="80"
style="object-fit:cover;border-radius:10px;">

</td>


<td><?= $d['nama_bunga']; ?></td>


<td><?= $d['nama_kategori']; ?></td>


<td>
Rp <?= number_format($d['harga'],0,',','.'); ?>
</td>


<td><?= $d['stok']; ?></td>


<td>

<a href="edit.php?id=<?= $d['id_produk']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>


<a href="hapus.php?id=<?= $d['id_produk']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus produk?')">
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