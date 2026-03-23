<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berry Printing - Jasa Percetakan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        body { background-color: #f8f9fa; }
        /* Header dengan gradien agar lebih modern */
        header { 
            background: linear-gradient(135deg, #0d6efd 0%, #004dbb 100%); 
            color: white; 
            padding: 50px 0; 
            text-align: center; 
        }
        .card { border: none; transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .logo-img { width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px; }
    </style>
</head>
<body>

<header class="mb-4">
    <div class="container">
        <img src="logoterbaruberry.png" alt="Logo Berry" class="logo-img rounded-circle border border-white border-3">
        <h1 class="display-4 fw-bold">Berry Printing</h1>
        <p class="lead">Solusi Percetakan Profesional & Terpercaya</p>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-4 shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">BERRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#layanan">Layanan</a>
                <a class="nav-link" href="pesanan.php">Pesan</a>
                <a class="nav-link" href="#kontak">Kontak</a>
            </div>
            <a href="login.php" class="btn btn-outline-light btn-sm">Admin Login</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm p-4 mb-4">
                <h2 class="border-bottom pb-2">Tentang Kami</h2>
                <p class="text-muted">Kami menyediakan jasa percetakan dengan kualitas tinggi, menggunakan mesin terbaru untuk hasil warna yang tajam dan layanan pelanggan yang prima.</p>
            </div>

            <div class="card shadow-sm p-4 mb-4" id="layanan">
                <h2 class="border-bottom pb-2">Layanan & Produk</h2>
                <div class="row mt-3">
                    <div class="col-6">
                        <h5 class="text-primary">Jasa Print</h5>
                        <ul class="list-unstyled">
                            <li>✓ Print Dokumen & A3</li>
                            <li>✓ Kartu Nama & ID Card</li>
                            <li>✓ Jilid Skripsi & Hardcover</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5 class="text-primary">Alat & Bahan</h5>
                        <ul class="list-unstyled">
                            <li>✓ Alat Tulis Kantor (ATK)</li>
                            <li>✓ Bahan Prakarya Lengkap</li>
                            <li>✓ Kertas Foto & Sticker</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-4 bg-dark text-white" id="kontak">
                <h4 class="mb-3">Hubungi Kami</h4>
                <p class="small mb-2">
                    <strong>Email:</strong><br>
                    sainaadongdo@gmail.com
                </p>
                <p class="small mb-3">
                    <strong>WhatsApp:</strong><br>
                    085768733097
                </p>
                <hr>
                <p class="small text-secondary">Buka: 24 Jam, Kecuali Ada Kendala Teknis</p>
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-5 border-top bg-white">
    <p class="mb-0 text-muted">© 2026 **Berry Printing** - All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>