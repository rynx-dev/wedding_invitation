<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "wedding");

if (!$conn) {
    die("Koneksi gagal");}

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$status = $_POST['status'];

/*Kalau belum punya owner_id,
buat baru dan simpan ke cookie.*/
$parent_id = !empty($_POST['parent_id'])
? $_POST['parent_id']
: "NULL";

if (!isset($_COOKIE['owner_id'])) {
    $owner_id = uniqid();

    setcookie(
        "owner_id",
        $owner_id,
        time() + (86400 * 365),
        "/");

} else {
    $owner_id = $_COOKIE['owner_id'];
}

/* Simpan komentar */
$query = "INSERT INTO comments
(nama, pesan, owner_id, status, parent_id)
VALUES
('$nama', '$pesan', '$owner_id', '$status', $parent_id)";


mysqli_query($conn, $query);
$_SESSION['success'] = "✅ Ucapan berhasil dikirim!";
header("Location: index.php#comment");
exit;

?>