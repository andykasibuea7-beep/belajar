<?php 
$uploadDir = 'uploads/'; 
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berry Printing - Jasa Percetakan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        body { background-color: #f8f9fa; }
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
                <a class="nav-link active" href="index.php">Home</a>
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
        <div class="col-md-20">
            <div class="card shadow-sm p-4" id="pesan">
                <h2 class="h4">Form Pemesanan</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="produk" class="form-control" placeholder="Jenis Produk" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">Upload File (PDF/Word/Excel)</label>
                        <input type="file" name="file" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx">
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary w-100">Pesan Sekarang</button>
                </form>

                <?php
                if(isset($_POST['kirim'])){
                    $nama = htmlspecialchars($_POST['nama']);
                    $produk = htmlspecialchars($_POST['produk']);
                    $jumlah = $_POST['jumlah'];

                    $fileName = $_FILES['file']['name'];
                    $tmpName = $_FILES['file']['tmp_name'];
                    $fileSize = $_FILES['file']['size'];

                    $allowedExt = ['pdf','doc','docx','xls','xlsx'];
                    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                    if(in_array($ext, $allowedExt)){
                        if($fileSize < 10000000){ // 10MB
                            $newName = time() . '_' . $fileName;
                            $uploadPath = $uploadDir . $newName;

                            if(move_uploaded_file($tmpName, $uploadPath)){
                                echo "<div class='alert alert-success mt-3'>Pesanan Berhasil! <br> <small>File: $fileName</small></div>";
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Gagal upload!</div>";
                            }
                        } else {
                            echo "<div class='alert alert-warning mt-3'>File terlalu besar (Max 10MB)</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Format tidak didukung!</div>";
                    }
                }
                ?>
            </div>
            
            <div class="card shadow-sm p-4 bg-dark text-white" id="kontak">
                <h4>Kontak</h4>
                <p class="small mb-1">📧 sainaadongdo@gmail.com</p>
                <p class="small">📞 085768733097</p>
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-5 border-top">
    <p>© 2026 Berry Printing</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>