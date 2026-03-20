<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$status = $_GET['status'];
$conn->query("UPDATE orders SET status='$status' WHERE id=$id");
header("Location: admin.php");
?>


// BAGAN HAPUS 
<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM orders WHERE id=$id");
header("Location: admin.php");
?>


// BAGAN LOOGOUT
<?php session_start(); session_destroy(); header("Location: login.php"); ?>