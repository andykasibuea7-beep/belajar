<?php
// index.php - Website sederhana perusahaan printing
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PrintPro - Jasa Percetakan</title>
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
    <h1>PrintPro</h1>
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
        <p>Kami menyediakan jasa percetakan seperti banner, brosur, kartu nama, dan lainnya dengan kualitas terbaik.</p>
    </div>

    <div class="card" id="layanan">
        <h2>Layanan Kami</h2>
        <ul>
            <li>Cetak Banner</li>
            <li>Brosur & Flyer</li>
            <li>Kartu Nama</li>
            <li>Undangan</li>
        </ul>
    </div>

    <div class="card" id="pesan">
        <h2>Form Pemesanan</h2>
        <form method="POST">
            <input type="text" name="nama" placeholder="Nama" required><br><br>
            <input type="text" name="produk" placeholder="Jenis Produk" required><br><br>
            <input type="number" name="jumlah" placeholder="Jumlah" required><br><br>
            <button type="submit" name="kirim">Pesan Sekarang</button>
        </form>

        <?php
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            echo "<p>Terima kasih <b>$nama</b>, pesanan <b>$produk</b> sebanyak <b>$jumlah</b> sedang diproses.</p>";
        }
        ?>
    </div>

    <div class="card" id="kontak">
        <h2>Kontak</h2>
        <p>Email: printpro@email.com</p>
        <p>Telp: 08123456789</p>
    </div>
</div>

<footer>
    <p>© 2026 PrintPro</p>
</footer>

</body>
</html>
