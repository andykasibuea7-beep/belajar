<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk & Layanan - Berry Printing</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <style>
        :root {
            --royal-blue: #001f3f;
            --deep-navy: #003366;
            --gold-metallic: #D4AF37;
            --gold-light: #FFD700;
        }

        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        
        /* HEADER KONSISTEN */
        header { 
            background: linear-gradient(135deg, var(--royal-blue) 0%, var(--deep-navy) 40%, var(--gold-metallic) 100%); 
            color: white; 
            padding: 60px 0; 
            text-align: center;
            border-bottom: 5px solid var(--gold-metallic);
        }
        
        .logo-img { 
            width: 90px; height: 90px; object-fit: contain; margin-bottom: 15px; 
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.5);
            border: 3px solid var(--gold-light);
        }

        /* NAVBAR */
        .navbar { background-color: rgba(0, 31, 63, 0.95) !important; }

        /* CARD STYLE */
        .card { 
            border: none; 
            transition: all 0.3s ease; 
            border-radius: 15px; 
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        
        .product-img-container {
            height: 220px;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            background: #eee;
        }
        .product-img-container img {
            width: 100%; height: 100%; object-fit: cover; transition: 0.6s;
        }
        .product-img-container:hover img { transform: scale(1.1); }
        
        .zoom-icon {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            color: white; font-size: 2.5rem;
            opacity: 0; transition: 0.3s;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        .product-img-container:hover .zoom-icon { opacity: 1; }

        /* AKSEN EMAS PADA JUDUL */
        .section-title {
            font-weight: 800;
            color: var(--royal-blue);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        .section-title::after {
            content: "";
            position: absolute;
            left: 0; bottom: 0;
            width: 60px; height: 4px;
            background: var(--gold-metallic);
            border-radius: 2px;
        }

        /* STICKY CONTACT CARD */
        .sticky-contact {
            background: var(--royal-blue);
            color: white;
            border-radius: 20px;
            border-left: 6px solid var(--gold-metallic);
            transition: 0.3s;
        }
        .sticky-contact:hover { border-left-width: 12px; }

        footer { background: white; border-top: 1px solid #ddd; }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="logoterbaruberry.png" alt="Logo" class="logo-img rounded-circle">
        <h1 class="display-5 fw-bold">Katalog Layanan</h1>
        <p class="lead opacity-75">Kualitas Premium untuk Kebutuhan Cetak Anda</p>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="color: var(--gold-light);">BERRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="pesanan.php">Pesan</a>
                <a class="nav-link" href="#kontak">Kontak</a>
                <a class="nav-link active" href="produk.php">Produk</a>
            </div>
            <a href="login.php" class="btn btn-warning btn-sm fw-bold px-3 rounded-pill" style="background: var(--gold-metallic); border:none; color:white;">Admin Login</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-9">
            <div id="layanan" class="mb-5">
                <h2 class="section-title mb-5">Produk & Layanan Unggulan</h2>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="print-dokumen.jpg">
                                <img src="print-dokumen.jpg" alt="Print Dokumen">
                                <span class="zoom-icon"><i class="bi bi-zoom-in"></i></span>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold" style="color: var(--deep-navy);">Jasa Print & Dokumen</h5>
                                <p class="small text-muted mb-3">Melayani print hitam putih/warna, ukuran A4 hingga A3 dengan kualitas tajam.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Skripsi</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Hardcover</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Spiral</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="kartu-nama.jpg">
                                <img src="kartu-nama.jpg" alt="Kartu Nama">
                                <span class="zoom-icon"><i class="bi bi-zoom-in"></i></span>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold" style="color: var(--deep-navy);">Kartu Nama & ID Card</h5>
                                <p class="small text-muted mb-3">Cetak kartu nama eksklusif dan ID Card bahan PVC berkualitas tinggi.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Art Carton</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> PVC</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Laminasi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="atk-produk.jpg">
                                <img src="atk-produk.jpg" alt="ATK">
                                <span class="zoom-icon"><i class="bi bi-zoom-in"></i></span>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold" style="color: var(--deep-navy);">Alat Tulis Kantor</h5>
                                <p class="small text-muted mb-3">Menyediakan berbagai kebutuhan ATK sekolah dan perkantoran lengkap.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Kertas</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Pulpen</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Sticker</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="prakarya.jpg">
                                <img src="prakarya.jpg" alt="Bahan Prakarya">
                                <span class="zoom-icon"><i class="bi bi-zoom-in"></i></span>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold" style="color: var(--deep-navy);">Bahan Prakarya</h5>
                                <p class="small text-muted mb-3">Bahan lengkap untuk tugas sekolah, seni, dan kerajinan tangan.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Styrofoam</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Karton</span>
                                    <span class="badge bg-light text-dark border"><i class="bi bi-check2 text-success"></i> Lem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card sticky-contact p-4 sticky-top shadow" style="top: 100px;" id="kontak">
                <h4 class="fw-bold text-warning mb-3">Butuh Bantuan?</h4>
                <div class="mb-3">
                    <small class="text-white-50 d-block">Email:</small>
                    <span class="small">sainaadongdo@gmail.com</span>
                </div>
                <div class="mb-4">
                    <small class="text-white-50 d-block">WhatsApp:</small>
                    <span class="fw-bold">0857-6873-3097</span>
                </div>
                <a href="https://wa.me/6285768733097" target="_blank" class="btn btn-success btn-sm w-100 rounded-pill py-2 shadow-sm">
                   <i class="bi bi-whatsapp me-2"></i> Chat Sekarang
                </a>
                <hr class="bg-light">
                <p class="small mb-0 text-white-50 italic"><i class="bi bi-clock me-1"></i> Buka 24 Jam</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center position-relative">
                <img src="" id="modalImage" class="img-fluid rounded shadow-lg border border-warning">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-5">
    <p class="mb-0 text-muted small">© 2026 <strong>Berry Printing</strong> - Premium Quality Printing</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const imgSrc = button.getAttribute('data-bs-img');
        const modalImg = document.getElementById('modalImage');
        modalImg.src = imgSrc;
    });
</script>

</body>
</html>