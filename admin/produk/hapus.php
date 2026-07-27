<?php

include "../koneksi.php";


$id=$_GET['id'];


$data=mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id'")
);


unlink("../../uploads/".$data['foto']);



mysqli_query($conn,
"DELETE FROM produk WHERE id_produk='$id'"
);



header("Location:index.php");


?>