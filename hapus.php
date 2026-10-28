<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "wedding");

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM comments WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

/* Pastikan hanya pemilik yang bisa hapus */
if (
    !isset($_COOKIE['owner_id']) ||
    $_COOKIE['owner_id'] != $data['owner_id']
) {die("Akses ditolak!");}

mysqli_query(
    $conn,
    "DELETE FROM comments WHERE id='$id'");
$_SESSION['success'] = "🗑️ Komentar berhasil dihapus!";
header("Location: index.php#comment");
exit;