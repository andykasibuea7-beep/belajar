<?php include 'config.php'; ?>
<?php
if(isset($_POST['login'])){
    $u = $conn->real_escape_string($_POST['username']);
    $p = md5($_POST['password']);

    $q = $conn->query("SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if($q->num_rows > 0){
        $_SESSION['admin'] = $u;
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Login gagal! Username atau Password salah.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Berry Printing</title>
    
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
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER & NAV SAME AS INDEX */
        header { 
            background: linear-gradient(135deg, var(--royal-blue) 0%, var(--deep-navy) 40%, var(--gold-metallic) 100%); 
            color: white; 
            padding: 40px 0; 
            text-align: center;
            border-bottom: 5px solid var(--gold-metallic);
        }

        .navbar { background-color: rgba(0, 31, 63, 0.95) !important; }

        /* LOGIN CARD */
        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .login-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            overflow: hidden;
        }

        .login-header {
            background: var(--royal-blue);
            color: white;
            padding: 30px;
            text-align: center;
            border-bottom: 4px solid var(--gold-metallic);
        }

        .form-control:focus {
            border-color: var(--gold-metallic);
            box-shadow: 0 0 0 0.25 row rgba(212, 175, 55, 0.25);
        }

        .btn-gold {
            background: linear-gradient(45deg, var(--gold-metallic), #B8860B);
            color: white; 
            border: none; 
            font-weight: bold;
            padding: 12px;
            transition: 0.3s;
        }

        .btn-gold:hover {
            background: linear-gradient(45deg, #B8860B, var(--gold-metallic));
            color: white;
            transform: translateY(-2px);
        }

        footer {
            background: #111;
            color: #888;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h2 class="fw-bold mb-0"><i class="bi bi-shield-lock-fill me-2"></i>Admin Panel</h2>
        <p class="small mb-0 opacity-75">Berry Printing Management System</p>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
    <div class="container justify-content-center">
        <div class="navbar-nav">
            <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Kembali ke Beranda</a>
        </div>
    </div>
</nav>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <h4 class="fw-bold mb-0">Silakan Login</h4>
        </div>
        <div class="p-4 p-md-5">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label small fw-bold">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control border-start-0" name="username" placeholder="Masukkan username" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label small fw-bold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control border-start-0" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>
                <button type="submit" name="login" class="btn btn-gold w-100 rounded-pill shadow-sm">
                    MASUK SEKARANG <i class="bi bi-arrow-right-short"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <p class="mb-0 small">© 2026 <span style="color: var(--gold-metallic);">Berry Printing</span> - Secured Admin Area</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
