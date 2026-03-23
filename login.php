<?php include 'config.php'; ?>
<?php
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $q = $conn->query("SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if($q->num_rows){
        $_SESSION['admin'] = $u;
        header("Location: admin.php");
    } else echo "<script>alert('Login gagal')</script>";
}
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
    <a class="nav-link" href="index.php">Home</a>
    <a class="nav-link" href="#layanan">Layanan</a>
    <a class="nav-link" href="pesanan.php">Pesan</a>
    <a class="nav-link" href="#kontak">Kontak</a>
    <a class="nav-link" href="login.php">Admin Login</a>
</nav>

<div class="container">
    <div class="card">
        <form method="POST" class="container mt-5">
<input class="form-control mb-2" name="username" placeholder="Username">
<input class="form-control mb-2" type="password" name="password" placeholder="Password">

<input type="submit" name="login" class="btn btn-dark" value="Login">
</form>
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
