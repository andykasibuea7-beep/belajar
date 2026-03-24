<?php 
include 'config.php'; 

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
    <title>Pesan Layanan - Berry Printing</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <style>
        :root {
            --royal-blue: #001f3f;
            --deep-navy: #003366;
            --gold-metallic: #D4AF37;
            --gold-light: #FFD700;
        }

        body { background-color: #f4f7f9; font-family: 'Segoe UI', sans-serif; }

        /* HEADER IDENTIK DENGAN INDEX */
        header { 
            background: linear-gradient(135deg, var(--royal-blue) 0%, var(--deep-navy) 40%, var(--gold-metallic) 100%); 
            color: white; 
            padding: 50px 0; 
            text-align: center;
            border-bottom: 5px solid var(--gold-metallic);
        }
        
        .logo-img { 
            width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px; 
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.5);
            border: 2px solid var(--gold-light);
        }

        /* FORM CARD */
        .card-order {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            background: white;
            margin-top: -30px; /* Efek melayang menabrak header */
        }

        .card-header-gold {
            background: var(--royal-blue);
            color: white;
            padding: 20px;
            border-bottom: 4px solid var(--gold-metallic);
            text-align: center;
        }

        .form-label { font-weight: 600; color: var(--deep-navy); font-size: 0.9rem; }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--gold-metallic);
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.15);
        }

        /* BUTTONS */
        .btn-gold {
            background: linear-gradient(45deg, var(--gold-metallic), #B8860B);
            color: white; border: none; font-weight: bold; padding: 12px;
            transition: 0.3s;
        }
        .btn-gold:hover {
            background: linear-gradient(45deg, #B8860B, var(--gold-metallic));
            color: white; transform: translateY(-2px);
        }

        .contact-mini-card {
            background: #111;
            color: #ccc;
            border-radius: 15px;
            padding: 20px;
            border-left: 5px solid var(--gold-metallic);
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="logoterbaruberry.png" alt="Logo Berry" class="logo-img rounded-circle">
        <h1 class="h2 fw-bold mb-0">Form Pemesanan Online</h1>
        <p class="small opacity-75">Isi data di bawah ini untuk memproses cetakan Anda</p>
    </div>
</header>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            
            <div class="card card-order mb-4">
                <div class="card-header-gold">
                    <h5 class="mb-0"><i class="bi bi-printer-fill me-2"></i> Detail Pesanan</h5>
                </div>
                <div class="card-body p-4 p-md-5">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                <input type="text" name="nama" class="form-control" placeholder="Contoh: Budi Santoso" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <label class="form-label">Jenis Produk</label>
                                <select name="produk" class="form-select" required>
                                    <option value="">-- Pilih Layanan --</option>
                                    <option value="Print Dokumen/A3">Print Dokumen & A3</option>
                                    <option value="Kartu Nama/ID Card">Kartu Nama & ID Card</option>
                                    <option value="Jilid Skripsi">Jilid Skripsi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" placeholder="0" min="1" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Upload File <span class="text-muted fw-normal">(PDF, Doc, Image - Max 10MB)</span></label>
                            <input type="file" name="file" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.png,.jpg,.jpeg" required>
                        </div>

                        <button type="submit" name="kirim" class="btn btn-gold w-100 rounded-pill shadow">
                            KIRIM PESANAN SEKARANG <i class="bi bi-send-fill ms-2"></i>
                        </button>
                        
                        <div class="text-center mt-3">
                            <a href="index.php" class="text-decoration-none small text-muted"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
                        </div>
                    </form>

                    <?php
                    if(isset($_POST['kirim'])){
                        $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
                        $produk = mysqli_real_escape_string($conn, $_POST['produk']);
                        $jumlah = (int)$_POST['jumlah'];
                        $status = "Pending";

                        $fileName = $_FILES['file']['name'];
                        $tmpName  = $_FILES['file']['tmp_name'];
                        $fileSize = $_FILES['file']['size'];

                        $allowedExt = ['pdf','doc','docx','xls','xlsx','png','jpg','jpeg'];
                        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                        if(in_array($ext, $allowedExt)){
                            if($fileSize < 10485760){ // 10MB
                                $newName = time() . '_' . preg_replace("/[^a-zA-Z0-9.]/", "_", $fileName);
                                $uploadPath = $uploadDir . $newName;

                                if(move_uploaded_file($tmpName, $uploadPath)){
                                    $query = "INSERT INTO orders (nama, produk, jumlah, status, file) 
                                              VALUES ('$nama', '$produk', '$jumlah', '$status', '$newName')";
                                    
                                    if($conn->query($query)){
                                        echo "<div class='alert alert-success mt-4 border-0 shadow-sm'>
                                                <i class='bi bi-check-circle-fill me-2'></i> 
                                                <strong>Berhasil!</strong> Pesanan Anda telah diterima. Admin akan segera memprosesnya.
                                              </div>";
                                    } else {
                                        echo "<div class='alert alert-danger mt-4'>Database Error: ".$conn->error."</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-danger mt-4'>Gagal mengunggah file.</div>";
                                }
                            } else {
                                echo "<div class='alert alert-warning mt-4'>Ukuran file terlalu besar!</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger mt-4'>Format file .$ext tidak diizinkan.</div>";
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="contact-mini-card shadow-sm">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="text-white fw-bold mb-1">Butuh Bantuan?</h6>
                        <p class="small mb-0 opacity-75">Hubungi CS kami jika ada kendala upload.</p>
                    </div>
                    <div class="col-4 text-end">
                        <a href="https://wa.me/6285768733097" class="btn btn-success btn-sm rounded-pill px-3">
                            <i class="bi bi-whatsapp"></i> Chat
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="text-center py-4 bg-white text-muted border-top">
    <div class="container">
        <p class="mb-0 small">© 2026 <strong>Berry Printing</strong> - Premium Printing Solution</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>