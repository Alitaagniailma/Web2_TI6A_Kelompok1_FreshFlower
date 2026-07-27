<?php

include "../koneksi.php";


$kategori=mysqli_query($conn,"SELECT * FROM kategori");


if(isset($_POST['simpan'])){


$id_kategori=$_POST['id_kategori'];

$nama=$_POST['nama_bunga'];

$harga=$_POST['harga'];

$stok=$_POST['stok'];

$deskripsi=$_POST['deskripsi'];



$foto=$_FILES['foto']['name'];

$tmp=$_FILES['foto']['tmp_name'];



move_uploaded_file(
$tmp,
"../../uploads/".$foto
);



mysqli_query($conn,"
INSERT INTO produk
(id_kategori,nama_bunga,harga,stok,deskripsi,foto)

VALUES

('$id_kategori','$nama','$harga','$stok','$deskripsi','$foto')
");



header("Location:index.php");


}

?>


<!DOCTYPE html>
<html>

<head>

<title>Tambah Produk</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<h2>🌸 Tambah Produk</h2>


<form method="POST" enctype="multipart/form-data">


<label>Nama Produk</label>

<input type="text"
name="nama_bunga"
class="form-control mb-3"
required>



<label>Kategori</label>

<select name="id_kategori"
class="form-control mb-3">


<option>Pilih Kategori</option>


<?php while($k=mysqli_fetch_assoc($kategori)){ ?>

<option value="<?= $k['id_kategori']; ?>">

<?= $k['nama_kategori']; ?>

</option>


<?php } ?>


</select>



<label>Harga</label>

<input type="number"
name="harga"
class="form-control mb-3"
required>



<label>Stok</label>

<input type="number"
name="stok"
class="form-control mb-3"
required>



<label>Deskripsi</label>

<textarea name="deskripsi"
class="form-control mb-3"></textarea>



<label>Foto Produk</label>

<input type="file"
name="foto"
class="form-control mb-3"
required>



<button name="simpan"
class="btn btn-success">

Simpan

</button>


<a href="index.php"
class="btn btn-secondary">

Kembali

</a>


</form>


</div>


</body>
</html>