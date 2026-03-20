<?php include 'config.php'; ?>
<?php if(!isset($_SESSION['admin'])) header("Location: login.php"); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
<h2>Dashboard Admin</h2>
<a href="logout.php" class="btn btn-danger mb-3">Logout</a>

<input class="form-control mb-3" id="search" placeholder="Cari nama...">

<table class="table table-bordered">
<tr>
<th>Nama</th>
<th>Produk</th>
<th>Jumlah</th>
<th>Status</th>
<th>File</th>
<th>Aksi</th>
</tr>

<?php
$data = $conn->query("SELECT * FROM orders ORDER BY id DESC");
while($d = $data->fetch_assoc()){
    echo "<tr>
    <td>{$d['nama']}</td>
    <td>{$d['produk']}</td>
    <td>{$d['jumlah']}</td>
    <td>{$d['status']}</td>
    <td><a href='uploads/{$d['file']}'>Download</a></td>
    <td>
        <a href='update.php?id={$d['id']}&status=Selesai' class='btn btn-success btn-sm'>Selesai</a>
        <a href='hapus.php?id={$d['id']}' class='btn btn-danger btn-sm'>Hapus</a>
    </td>
    </tr>";
}
?>
</table>
</div>

<script>
document.getElementById('search').addEventListener('keyup', function(){
    let val = this.value.toLowerCase();
    document.querySelectorAll('table tr').forEach((row,i)=>{
        if(i===0) return;
        row.style.display = row.innerText.toLowerCase().includes(val) ? '' : 'none';
    });
});
</script>