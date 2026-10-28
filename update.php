<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "wedding");

$id = $_POST['id'];
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM comments WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

/* Pastikan hanya pemilik yang bisa update */
if (
    !isset($_COOKIE['owner_id']) ||
    $_COOKIE['owner_id'] != $data['owner_id']
) {die("Akses ditolak!");}

mysqli_query(
    $conn,
    "UPDATE comments
    SET nama='$nama',
        pesan='$pesan'
    WHERE id='$id'"
);
$_SESSION['success'] = "✏️ Komentar berhasil diperbarui!";
header("Location: index.php#comment");
exit;