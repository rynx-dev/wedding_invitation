<?php
$conn = mysqli_connect("localhost", "root", "", "wedding");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM comments WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

/* Cek pemilik komentar */
if (
    !isset($_COOKIE['owner_id']) ||
    $_COOKIE['owner_id'] != $data['owner_id']
    ) {die("Akses ditolak!");}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Komentar</title>

<style>
body{
font-family:Poppins,sans-serif;
background:#f8f8f8;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:30px;
border-radius:20px;
width:500px;
box-shadow:0 10px 30px rgba(0,0,0,.08);
}

input, textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border:none;
background:#f3f3f3;
border-radius:10px;
box-sizing:border-box;
}

button{
width:100%;
padding:12px;
background:#6b4b2a;
color:white;
border:none;
border-radius:10px;
cursor:pointer;
}
</style>
</head>
<body>
<div class="box">
<h2>Edit Komentar</h2>
<form action="update.php" method="POST">
<input
type="hidden"
name="id"
value="<?= $data['id']; ?>">

<input
type="text"
name="nama"
value="<?= htmlspecialchars($data['nama']); ?>"
required>

<textarea
name="pesan"
rows="5"
required
><?= htmlspecialchars($data['pesan']); ?>
</textarea>

<button type="submit">Simpan Perubahan</button>
</form>
</div>
</body>
</html>