<?php

include "../koneksi.php";


$id = $_GET['id'];


// ambil data produk
$data = mysqli_query($conn,"
SELECT * FROM produk 
WHERE id_produk='$id'
");

$d = mysqli_fetch_assoc($data);


// ambil kategori
$kategori = mysqli_query($conn,"
SELECT * FROM kategori
");



if(isset($_POST['update'])){


$id_kategori = $_POST['id_kategori'];

$nama = $_POST['nama_bunga'];

$harga = $_POST['harga'];

$stok = $_POST['stok'];

$deskripsi = $_POST['deskripsi'];



// cek apakah upload foto baru

if($_FILES['foto']['name'] != ""){


    $foto = $_FILES['foto']['name'];

    $tmp = $_FILES['foto']['tmp_name'];


    // hapus foto lama
    if(file_exists("../../uploads/".$d['foto'])){

        unlink("../../uploads/".$d['foto']);

    }


    move_uploaded_file(
        $tmp,
        "../../uploads/".$foto
    );


}else{


    $foto = $d['foto'];

}



mysqli_query($conn,"
UPDATE produk SET

id_kategori='$id_kategori',

nama_bunga='$nama',

harga='$harga',

stok='$stok',

deskripsi='$deskripsi',

foto='$foto'


WHERE id_produk='$id'

");



header("Location:index.php");


}

?>


<!DOCTYPE html>
<html>

<head>

<title>Edit Produk</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/style.css">


</head>


<body>


<div class="container mt-5">


<h2>🌸 Edit Produk</h2>



<form method="POST" enctype="multipart/form-data">



<label>Nama Produk</label>

<input type="text"
name="nama_bunga"
class="form-control mb-3"
value="<?= $d['nama_bunga']; ?>"
required>




<label>Kategori</label>

<select name="id_kategori"
class="form-control mb-3">


<?php while($k=mysqli_fetch_assoc($kategori)){ ?>


<option value="<?= $k['id_kategori']; ?>"
<?php if($k['id_kategori']==$d['id_kategori']) echo "selected"; ?>
>

<?= $k['nama_kategori']; ?>

</option>


<?php } ?>


</select>




<label>Harga</label>

<input type="number"
name="harga"
class="form-control mb-3"
value="<?= $d['harga']; ?>"
required>




<label>Stok</label>

<input type="number"
name="stok"
class="form-control mb-3"
value="<?= $d['stok']; ?>"
required>




<label>Deskripsi</label>

<textarea name="deskripsi"
class="form-control mb-3"><?= $d['deskripsi']; ?></textarea>




<label>Foto Lama</label>
<br>

<img src="../../uploads/<?= $d['foto']; ?>"
width="100"
class="mb-3">


<br>


<label>Ganti Foto (opsional)</label>

<input type="file"
name="foto"
class="form-control mb-3">




<button name="update"
class="btn btn-success">

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