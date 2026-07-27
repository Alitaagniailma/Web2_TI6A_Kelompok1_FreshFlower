<?php

include "../koneksi.php";


$query=mysqli_query($conn,"
SELECT * FROM laporan_penjualan
ORDER BY id_pesanan DESC
");


?>


<!DOCTYPE html>
<html>

<head>

<title>Cetak Laporan</title>


<style>

body{
font-family:Arial;
}


table{

width:100%;
border-collapse:collapse;

}


table,th,td{

border:1px solid black;

}


th,td{

padding:10px;

text-align:center;

}


h2{

text-align:center;

}


</style>


</head>


<body>


<h2>
Laporan Penjualan Fresh Flower
</h2>



<table>


<tr>

<th>No</th>

<th>Pelanggan</th>

<th>Tanggal</th>

<th>Total</th>

<th>Status</th>

</tr>



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


<td><?= $d['status']; ?></td>


</tr>


<?php } ?>


</table>


<script>

window.print();

</script>


</body>

</html>