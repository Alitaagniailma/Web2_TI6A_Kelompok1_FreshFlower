<?php

include "../koneksi.php";


$query = mysqli_query($conn,"
SELECT * FROM laporan_penjualan
ORDER BY id_pesanan DESC
");


?>


<!DOCTYPE html>
<html lang="id">

<head>

<title>Laporan Penjualan</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<div class="d-flex justify-content-between align-items-center mb-4">


<h2>📊 Laporan Penjualan</h2>


<div>

<a href="../dashboard.php"
class="btn btn-secondary">

← Dashboard

</a>


<a href="cetak.php"
target="_blank"
class="btn btn-success">

🖨 Cetak

</a>

</div>


</div>



<table class="table table-bordered table-hover">


<thead class="table-success">


<tr>

<th>No</th>

<th>ID Pesanan</th>

<th>Nama Pelanggan</th>

<th>Tanggal</th>

<th>Total</th>

<th>Status</th>

</tr>


</thead>


<tbody>


<?php

$no=1;


while($d=mysqli_fetch_assoc($query)){


?>


<tr>


<td><?= $no++; ?></td>


<td>
<?= $d['id_pesanan']; ?>
</td>


<td>
<?= $d['nama']; ?>
</td>


<td>
<?= $d['tanggal']; ?>
</td>


<td>

Rp <?= number_format($d['total'],0,',','.'); ?>

</td>


<td>

<?= $d['status']; ?>


</td>


</tr>


<?php } ?>


</tbody>


</table>


</div>


</body>

</html>