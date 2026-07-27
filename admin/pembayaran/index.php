<?php

include "../koneksi.php";


$query = mysqli_query($conn,"
SELECT pembayaran.*, pesanan.id_pelanggan
FROM pembayaran
JOIN pesanan
ON pembayaran.id_pesanan = pesanan.id_pesanan
ORDER BY id_pembayaran DESC
");

?>


<!DOCTYPE html>
<html>

<head>

<title>Data Pembayaran</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<div class="d-flex justify-content-between align-items-center mb-4">


<h2>💳 Data Pembayaran</h2>


<a href="../dashboard.php" class="btn btn-secondary">

← Dashboard

</a>


</div>



<table class="table table-bordered table-hover">


<thead class="table-success">

<tr>

<th>No</th>

<th>ID Pesanan</th>

<th>Tanggal Bayar</th>

<th>Bank</th>

<th>Nama Rekening</th>

<th>Jumlah</th>

<th>Bukti Transfer</th>

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


<td>
<?= $d['id_pesanan']; ?>
</td>


<td>
<?= $d['tanggal_bayar']; ?>
</td>


<td>
<?= $d['nama_bank']; ?>
</td>


<td>
<?= $d['nama_rekening']; ?>
</td>


<td>

Rp <?= number_format($d['jumlah'],0,',','.'); ?>

</td>



<td>


<?php if($d['bukti_transfer']){ ?>

<a href="../../uploads/<?= $d['bukti_transfer']; ?>"
target="_blank">

Lihat Bukti

</a>

<?php }else{ ?>

Tidak ada

<?php } ?>


</td>



<td>


<?php

if($d['status_verifikasi']=="Diterima"){

echo "<span class='badge bg-success'>Diterima</span>";

}

elseif($d['status_verifikasi']=="Ditolak"){

echo "<span class='badge bg-danger'>Ditolak</span>";

}

else{

echo "<span class='badge bg-warning text-dark'>Menunggu</span>";

}

?>


</td>



<td>

<a href="verifikasi.php?id=<?= $d['id_pembayaran']; ?>"
class="btn btn-primary btn-sm">

Verifikasi

</a>

</td>


</tr>


<?php } ?>


</tbody>


</table>


</div>


</body>

</html>