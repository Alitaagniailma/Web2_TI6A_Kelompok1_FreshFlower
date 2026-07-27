<?php

include "../koneksi.php";


$query = mysqli_query($conn,"
SELECT * FROM pelanggan
");

?>

<!DOCTYPE html>
<html lang="id">

<head>

<title>Data Pelanggan</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<div class="d-flex justify-content-between align-items-center mb-4">


<h2>👤 Data Pelanggan</h2>


<a href="../dashboard.php" 
class="btn btn-secondary">

← Dashboard

</a>


</div>



<table class="table table-bordered table-hover">


<thead class="table-success">


<tr>

<th>No</th>

<th>Nama</th>

<th>Email</th>

<th>No HP</th>

<th>Alamat</th>

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


<td><?= $d['email']; ?></td>


<td><?= $d['no_hp']; ?></td>


<td><?= $d['alamat']; ?></td>


</tr>


<?php } ?>


</tbody>


</table>


</div>


</body>

</html>