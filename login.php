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

<form method="POST" class="container mt-5">
<input class="form-control mb-2" name="username" placeholder="Username">
<input class="form-control mb-2" type="password" name="password" placeholder="Password">
<button class="btn btn-dark">Login</button>
</form>
