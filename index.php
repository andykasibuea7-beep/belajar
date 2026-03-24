<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berry Printing - Jasa Percetakan Profesional</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <style>
        :root {
            --royal-blue: #001f3f;
            --deep-navy: #003366;
            --gold-metallic: #D4AF37;
            --gold-light: #FFD700;
        }

        body { 
            background-color: #f8f9fa; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        
        /* HEADER MEWAH */
        header { 
            background: linear-gradient(135deg, var(--royal-blue) 0%, var(--deep-navy) 40%, var(--gold-metallic) 100%); 
            color: white; 
            padding: 80px 0; 
            text-align: center;
            border-bottom: 5px solid var(--gold-metallic);
        }
        
        .logo-img { 
            width: 110px; 
            height: 110px; 
            object-fit: contain; 
            margin-bottom: 20px; 
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.6);
            border: 3px solid var(--gold-light);
        }

        header h1 {
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .gold-divider {
            width: 80px;
            height: 4px;
            background: var(--gold-light);
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        /* NAVBAR */
        .navbar { background-color: rgba(0, 31, 63, 0.95) !important; }
        .nav-link:hover { color: var(--gold-light) !important; }

        /* CARDS & HOVER */
        .card { border: none; transition: all 0.3s ease; border-radius: 15px; overflow: hidden; }
        .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
        
        .product-img-container {
            height: 220px;
            overflow: hidden;
            cursor: pointer;
            position: relative;
        }
        .product-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.6s;
        }
        .product-img-container:hover img { transform: scale(1.1); }
        
        .zoom-icon {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            color: white; font-size: 2rem;
            opacity: 0; transition: 0.3s;
        }
        .product-img-container:hover .zoom-icon { opacity: 1; }

        /* CONTACT SECTION */
        .contact-section {
            background: linear-gradient(180deg, #1a1a1a 0%, #000 100%);
            color: white;
            padding: 80px 0;
            margin-top: 80px;
            border-top: 4px solid var(--gold-metallic);
        }
        .contact-card {
            background: rgba(255,255,255,0.03);
            padding: 30px;
            border-radius: 20px;
            height: 100%;
            border: 1px solid rgba(212, 175, 55, 0.2);
            transition: 0.3s;
        }
        .contact-card:hover { border-color: var(--gold-metallic); background: rgba(255,255,255,0.07); }
        .contact-icon { font-size: 2.5rem; color: var(--gold-metallic); margin-bottom: 20px; }

        /* BUTTONS */
        .btn-gold {
            background: linear-gradient(45deg, var(--gold-metallic), #B8860B);
            color: white; border: none; font-weight: bold;
        }
        .btn-gold:hover { background: linear-gradient(45deg, #B8860B, var(--gold-metallic)); color: white; }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="logoterbaruberry.png" alt="Logo Berry" class="logo-img rounded-circle shadow">
        <h1 class="display-4">BERRY PRINTING</h1>
        <div class="gold-divider"></div>
        <p class="lead opacity-90">Solusi Percetakan Profesional, Cepat & Terpercaya</p>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="color: var(--gold-light); letter-spacing: 2px;">BERRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="pesanan.php">Pesan</a>
                <a class="nav-link" href="#kontak">Kontak</a>
                <a class="nav-link" href="produk.php">Produk</a>
            </div>
            <a href="login.php" class="btn btn-gold btn-sm px-4 rounded-pill shadow-sm">Admin Login</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card shadow-lg p-5 mb-5 bg-white border-0" style="border-radius: 25px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, var(--royal-blue), var(--gold-metallic));"></div>
                
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <h2 class="fw-bold mb-3" style="color: var(--royal-blue); letter-spacing: 2px;">TENTANG KAMI</h2>
                        <div class="gold-divider mb-4"></div>
                    </div>
                    
                    <div class="col-lg-10 mx-auto text-center">
                        <p class="lead text-dark mb-4" style="line-height: 1.8; font-weight: 400;">
                            Di <span class="fw-bold" style="color: var(--gold-metallic);">BERRY PRINTING</span>, kami melampaui sekadar mencetak di atas kertas. Kami adalah kurator ide yang berdedikasi untuk mengubah visi kreatif Anda menjadi mahakarya visual dengan presisi tanpa kompromi.
                        </p>
                        <p class="text-muted mb-5" style="font-size: 1.1rem;">
                            Menggabungkan teknologi cetak mutakhir dengan sentuhan artistik, kami memastikan setiap detail warna dan ketajaman gambar merefleksikan standar profesionalisme tertinggi. Bagi kami, kepuasan pelanggan bukanlah tujuan akhir, melainkan awal dari sebuah kemitraan jangka panjang.
                        </p>
                    </div>
                </div>

                <div class="row g-4 mt-2 justify-content-center text-center">
                    <div class="col-6 col-md-4">
                        <div class="p-2">
                            <i class="bi bi-gem mb-2 d-block" style="font-size: 1.8rem; color: var(--gold-metallic);"></i>
                            <h6 class="fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px; color: var(--deep-navy);">Kualitas Premium</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="p-2">
                            <i class="bi bi-cpu mb-2 d-block" style="font-size: 1.8rem; color: var(--gold-metallic);"></i>
                            <h6 class="fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px; color: var(--deep-navy);">Teknologi Modern</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="p-2">
                            <i class="bi bi-clock-history mb-2 d-block" style="font-size: 1.8rem; color: var(--gold-metallic);"></i>
                            <h6 class="fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px; color: var(--deep-navy);">Layanan 24 Jam</h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="layanan" class="mb-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bold" style="color: var(--royal-blue);">Produk & Layanan Unggulan</h2>
                    <p class="text-muted">Pilih layanan yang Anda butuhkan</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="print.jpg">
                                <img src="print.jpg" alt="Print Dokumen">
                                <span class="zoom-icon"><i class="bi bi-search"></i></span>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Print Dokumen</h6>
                                <p class="small text-muted mb-0">HVS, Art Paper, A3+</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm h-100">
                            <div class="product-img-container" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img="berry printing.jpg">
                                <img src="berry printing.jpg" alt="berry printing">
                                <span class="zoom-icon"><i class="bi bi-search"></i></span>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Kartu Nama</h6>
                                <p class="small text-muted mb-0">PVC & Art Carton</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="kontak" class="contact-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--gold-light);">HUBUNGI KAMI</h2>
            <div class="gold-divider"></div>
            <p class="text-secondary">Kami siap melayani Anda kapanpun dibutuhkan.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="contact-card">
                    <i class="bi bi-envelope-at contact-icon"></i>
                    <h4>Email</h4>
                    <p class="text-secondary small mb-4">sainaadongdo@gmail.com</p>
                    <a href="mailto:sainaadongdo@gmail.com" class="btn btn-outline-warning btn-sm px-4">Kirim Pesan</a>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="contact-card">
                    <i class="bi bi-whatsapp contact-icon text-success"></i>
                    <h4>WhatsApp</h4>
                    <p class="text-secondary small mb-4">0857-6873-3097</p>
                    <a href="https://wa.me/6285768733097" target="_blank" class="btn btn-success btn-sm px-4 rounded-pill">Chat Sekarang</a>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="contact-card">
                    <i class="bi bi-geo-alt contact-icon"></i>
                    <h4>Operasional</h4>
                    <p class="text-secondary small mb-0">Senin - Minggu</p>
                    <p class="fw-bold text-white">Buka 24 Jam</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="text-center py-4 bg-black text-secondary">
    <div class="container">
        <p class="mb-0 small">© 2026 <span style="color: var(--gold-metallic);">Berry Printing</span> - All Rights Reserved</p>
    </div>
</footer>

<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center">
                <img src="" id="modalImage" class="img-fluid rounded shadow-lg border border-warning">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>
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