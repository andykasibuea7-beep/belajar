<?php 
include 'config.php'; 
// Pastikan session_start() ada di config.php, jika tidak, tambahkan di sini
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Berry Printing</title>
    
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

        /* SIDEBAR / TOPBAR STYLE */
        .admin-header { 
            background: linear-gradient(135deg, var(--royal-blue) 0%, var(--deep-navy) 100%); 
            color: white; 
            padding: 20px 0;
            border-bottom: 4px solid var(--gold-metallic);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* STATS CARDS */
        .stat-card {
            border: none;
            border-radius: 15px;
            background: white;
            transition: 0.3s;
            border-left: 5px solid var(--gold-metallic);
        }
        .stat-card:hover { transform: translateY(-5px); }

        /* TABLE STYLE */
        .table-container {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        
        thead {
            background-color: var(--royal-blue);
            color: white;
        }

        .search-box {
            border-radius: 50px;
            padding-left: 45px;
            border: 2px solid #eee;
        }
        .search-box:focus {
            border-color: var(--gold-metallic);
            box-shadow: none;
        }

        .btn-gold {
            background: linear-gradient(45deg, var(--gold-metallic), #B8860B);
            color: white; border: none; font-weight: bold;
        }
        
        .badge-pending { background-color: #f8f408; color: #000; }
        .badge-selesai { background-color: #198754; color: #fff; }

        .btn-logout {
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid rgba(255,255,255,0.2);
            color: white;
        }
        .btn-logout:hover { background: rgba(255,0,0,0.2); color: white; border-color: red; }
    </style>
</head>
<body>

<div class="admin-header mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h4 class="mb-0 fw-bold text-white"><i class="bi bi-speedometer2 me-2"></i> Dashboard Admin</h4>
            <small class="text-warning">Selamat Datang, <?php echo $_SESSION['admin']; ?>!</small>
        </div>
        <div class="d-flex gap-3">
            <a href="index.php" class="btn btn-sm btn-outline-light rounded-pill px-3">Lihat Web</a>
            <a href="logout.php" class="btn btn-sm btn-logout px-3"><i class="bi bi-box-arrow-right"></i> Keluar</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="stat-card p-3 shadow-sm d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                    <i class="bi bi-cart-check text-primary fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small">Total Pesanan</h6>
                    <?php $count = $conn->query("SELECT id FROM orders")->num_rows; ?>
                    <h3 class="fw-bold mb-0"><?php echo $count; ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card p-3 shadow-sm d-flex align-items-center" style="border-left-color: #ff0707;">
                <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                    <i class="bi bi-clock-history text-warning fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small">Menunggu (Pending)</h6>
                    <?php $pending = $conn->query("SELECT id FROM orders WHERE status='Pending'")->num_rows; ?>
                    <h3 class="fw-bold mb-0"><?php echo $pending; ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card p-3 shadow-sm d-flex align-items-center" style="border-left-color: #198754;">
                <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                    <i class="bi bi-check2-all text-success fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small">Selesai</h6>
                    <?php $done = $conn->query("SELECT id FROM orders WHERE status='Selesai'")->num_rows; ?>
                    <h3 class="fw-bold mb-0"><?php echo $done; ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <h5 class="fw-bold mb-0 text-navy"><i class="bi bi-list-stars me-2"></i> Daftar Pesanan Masuk</h5>
            <div class="position-relative">
                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                <input class="form-control search-box" id="search" placeholder="Cari nama atau produk...">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="text-center">
                        <th class="py-3">Nama Pelanggan</th>
                        <th class="py-3">Produk</th>
                        <th class="py-3">Jumlah</th>
                        <th class="py-3">Status</th>
                        <th class="py-3">File</th>
                        <th class="py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody id="orderTable">
                <?php
                $data = $conn->query("SELECT * FROM orders ORDER BY id DESC");
                while($d = $data->fetch_assoc()){
                    $badgeClass = ($d['status'] == 'Selesai') ? 'badge-selesai' : 'badge-pending';
                    echo "<tr>
                    <td class='fw-bold'>{$d['nama']}</td>
                    <td><span class='text-muted small'>{$d['produk']}</span></td>
                    <td class='text-center'>{$d['jumlah']}</td>
                    <td class='text-center'><span class='badge {$badgeClass} rounded-pill px-3'>{$d['status']}</span></td>
                    <td class='text-center'>
                        <a href='uploads/{$d['file']}' target='_blank' class='btn btn-light btn-sm border'>
                            <i class='bi bi-download me-1'></i> Unduh
                        </a>
                    </td>
                    <td class='text-center'>
                        <div class='btn-group shadow-sm rounded-pill overflow-hidden'>
                            <a href='update.php?id={$d['id']}&status=Selesai' class='btn btn-success btn-sm'>
                                <i class='bi bi-check-lg'></i>
                            </a>
                            <a href='hapus.php?id={$d['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus data ini?\")'>
                                <i class='bi bi-trash'></i>
                            </a>
                        </div>
                    </td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-5 text-muted small">
    © 2026 Berry Printing - Admin Dashboard v2.0
</footer>

<script>
// Search Functionality
document.getElementById('search').addEventListener('keyup', function(){
    let val = this.value.toLowerCase();
    let rows = document.querySelectorAll('#orderTable tr');
    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(val) ? '' : 'none';
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>