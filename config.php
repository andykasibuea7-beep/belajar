<?php
$conn = new mysqli("localhost", "root", "", "printing");
if ($conn->connect_error) die("Koneksi gagal");
session_start();
?>