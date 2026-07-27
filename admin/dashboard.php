<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$produk = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM produk"));
$kategori = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori"));
$pelanggan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pelanggan"));
$pesanan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pesanan"));
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">

    <div class="logo">
        🌸 Fresh Flower
        </div>

        <hr>

        <a href="dashboard.php" class="active">🏠 Dashboard</a>

        <a href="kategori/index.php">🌼 Kategori</a>

        <a href="produk/index.php">🌷 Produk</a>

        <a href="pelanggan/index.php">👤 Pelanggan</a>

        <a href="pesanan/index.php">🛒 Pesanan</a>

        <a href="pembayaran/index.php">💳 Pembayaran</a>

        <a href="laporan/index.php">📊 Laporan</a>

        <a href="logout.php">🚪 Logout</a>

        </div>
  <!-- Content -->
<div class="content">

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">Dashboard</h2>
                <p class="text-secondary mb-0">
                    Selamat datang kembali, Admin 🌸
                </p>
            </div>

        </div>

        <!-- Card Statistik -->
        <div class="row g-4">

            <!-- Produk -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card">
                    <div class="card-body text-center">
                        <h6 class="mb-2">🌷 Total Produk</h6>
                        <h2><?= $produk ?></h2>
                    </div>
                </div>
            </div>

            <!-- Kategori -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card">
                    <div class="card-body text-center">
                        <h6 class="mb-2">🌼 Total Kategori</h6>
                        <h2><?= $kategori ?></h2>
                    </div>
                </div>
            </div>

            <!-- Pelanggan -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card">
                    <div class="card-body text-center">
                        <h6 class="mb-2">👤 Total Pelanggan</h6>
                        <h2><?= $pelanggan ?></h2>
                    </div>
                </div>
            </div>

            <!-- Pesanan -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card">
                    <div class="card-body text-center">
                        <h6 class="mb-2">🛒 Total Pesanan</h6>
                        <h2><?= $pesanan ?></h2>
                    </div>
                </div>
            </div>

        </div>

        <!-- Selamat Datang -->
        <div class="card dashboard-card mt-4">
            <div class="card-body">
                <h4>🌸 Fresh Flower Admin</h4>
                <p class="mb-0">
                    Selamat datang di halaman administrator Fresh Flower.
                    Gunakan menu di sebelah kiri untuk mengelola kategori, produk,
                    pelanggan, pesanan, pembayaran, dan laporan.
                </p>
            </div>
        </div>

    </div>

</div>

</body>
</html>