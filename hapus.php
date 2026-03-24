<?php
include 'config.php';
$id = $_GET['id'];
// Opsional: Hapus file fisik dari folder uploads
$res = $conn->query("SELECT file FROM orders WHERE id=$id");
$fileData = $res->fetch_assoc();
unlink("uploads/".$fileData['file']);

$conn->query("DELETE FROM orders WHERE id=$id");
header("Location: admin.php");
?>
