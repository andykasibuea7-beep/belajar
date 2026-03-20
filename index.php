<?php 
$uploadDir = 'uploads/'; 
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}
?>
<?php
// index.php - Website sederhana perusahaan printing
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berry Printing - Jasa Percetakan</title>
    <style>
        body {font-family: Arial; margin:0; background:#f4f4f4;}
        header {background:#1e3a8a; color:white; padding:20px; text-align:center;}
        nav {background:#111; padding:10px; text-align:center;}
        nav a {color:white; margin:0 15px; text-decoration:none;}
        nav a:hover {color:yellow;}
        .container {padding:20px;}
        .card {background:white; padding:15px; margin:10px 0; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);} 
        footer {background:#1e3a8a; color:white; text-align:center; padding:10px; margin-top:20px;}
        button {background:#1e3a8a; color:white; border:none; padding:10px; border-radius:5px; cursor:pointer;}
        button:hover {background:#2563eb;}
    </style>
</head>
<body>

<header>
    <h1>Berry Printing</h1>
    <p>Solusi Percetakan Profesional</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#layanan">Layanan</a>
    <a href="#pesan">Pesan</a>
    <a href="#kontak">Kontak</a>
</nav>

<div class="container">
    <div class="card">
        <h2>Tentang Kami</h2>
        <p>Kami menyediakan jasa printingan yang berkualitas tinggi dan layanan pelanggan yang terbaik.</p>
    </div>

    <div class="card" id="layanan">
        <h2>Layanan Kami</h2>
        <ul>
            <li>Print Dokumen</li>
            <li>Print Kertas A3</li>
            <li>Kartu Nama</li>
            <li>Jilid</li>
            <li>Desain Grafis</li>
            <li>Print Foto</li>
            <li>Dan masih banyak lagi...</li>
        </ul>
        <h2> Barang produk yang kami sediakan</h2>
        <ul>
            <li>Alat-alat tulis Mahasiswa</li>
            <li>Alat Praktikum</li>
            <li>Bahan-bahan untuk prakarya</li>
            <li>Dan masih banyak lagi...</li>
        </ul>

    </div>

    <div class="card" id="pesan">
        <h2>Form Pemesanan</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="nama" placeholder="Nama" required><br><br>
            <input type="text" name="produk" placeholder="Jenis Produk" required><br><br>
            <input type="number" name="jumlah" placeholder="Jumlah" required><br><br>
            <input type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx"><br><br>
            <button type="submit" name="kirim">Pesan Sekarang</button>
        </form>

 <?php
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            $fileName = $_FILES['file']['name'];
            $tmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];

            // Format yang diizinkan
            $allowedExt = ['pdf','doc','docx','xls','xlsx'];
            $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if(in_array($ext, $allowedExt)){
                if($fileSize < 1000000){ // Maks 10MB
                    $newName = time() . '_' . $fileName;
                    $uploadPath = $uploadDir . $newName;

                    if(move_uploaded_file($tmpName, $uploadPath)){
                        echo "<p>Terima kasih <b>$nama</b>, pesanan <b>$produk</b> sebanyak <b>$jumlah</b> berhasil dikirim.</p>";
                        echo "<p>File berhasil diupload: <a href='$uploadPath' target='_blank'>Download File</a></p>";
                    } else {
                        echo "<p style='color:red;'>Gagal upload file!</p>";
                    }
                } else {
                    echo "<p style='color:red;'>Ukuran file terlalu besar (max 1MB)</p>";
                }
            } else {
                echo "<p style='color:red;'>Format file tidak didukung! Gunakan PDF, Word, atau Excel.</p>";
            }
        }
        ?>
    </div>

    <div class="card" id="kontak">
        <h2>Kontak</h2>
        <p>Email: sainaadongdo@gmail.com</p>
        <p>Telp: 085768733097</p>
    </div>
</div>

<footer>
    <p>© 2026 Berry Printing</p>
</footer>

</body>
</html>
