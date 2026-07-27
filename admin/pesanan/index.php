<?php

include "../koneksi.php";


$query = mysqli_query($conn,"
SELECT pesanan.*, pelanggan.nama
FROM pesanan
JOIN pelanggan
ON pesanan.id_pelanggan = pelanggan.id_pelanggan
ORDER BY id_pesanan DESC
");

?>


<!DOCTYPE html>
<html lang="id">

<head>

<title>Data Pesanan</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<div class="d-flex justify-content-between align-items-center mb-4">


<h2>🛒 Data Pesanan</h2>


<a href="../dashboard.php" class="btn btn-secondary">

← Dashboard

</a>


</div>




<table class="table table-bordered table-hover">


<thead class="table-success">


<tr>

<th>No</th>

<th>Pelanggan</th>

<th>Tanggal</th>

<th>Total</th>

<th>Status</th>

<th>Aksi</th>

</tr>


</thead>


<tbody>


<?php

$no=1;


while($d=mysqli_fetch_assoc($query)){


?>


<tr>


<td><?= $no++; ?></td>


<td><?= $d['nama']; ?></td>


<td><?= $d['tanggal']; ?></td>


<td>

Rp <?= number_format($d['total'],0,',','.'); ?>

</td>


<td>


<?php

if($d['status']=="Selesai"){

echo "<span class='badge bg-success'>Selesai</span>";

}

elseif($d['status']=="Batal"){

echo "<span class='badge bg-danger'>Batal</span>";

}

else{

echo "<span class='badge bg-warning text-dark'>
".$d['status']."
</span>";

}

?>


</td>



<td>


<a href="ubah_status.php?id=<?= $d['id_pesanan']; ?>"
class="btn btn-primary btn-sm">

Ubah Status

</a>


</td>


</tr>


<?php } ?>


</tbody>


</table>


</div>


</body>

</html>