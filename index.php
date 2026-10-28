<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wedding Invitation</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>

<style>
body{
  font-family:'Poppins',sans-serif;
  color:#555;
  margin:0;
  overflow-x:hidden;
}

html{
  scroll-behavior:smooth;
}

h1,h2,h3,h4,h5{
  font-family:'Playfair Display',serif;
}

/* HERO */
.hero{
  height:100vh;
  background:url('hero bg.jpg') center/cover no-repeat;
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  text-align:center;
  color:white;
}

.hero::after{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,0.45);
}

.hero-content{
  position:relative;
  z-index:2;
}

.logo{
  font-size:70px;
  color:#d4af37;
  font-family:'Playfair Display',serif;
  font-weight:700;
}

.names{
  font-size:48px;
  font-weight:600;
}

.date{
  letter-spacing:4px;
  margin:20px 0;
}

.btn-invite{
  display:inline-block;
  margin-top:10px;
  background:#6b4b2a;
  color:white;
  text-decoration:none;
  padding:12px 30px;
  border-radius:10px;
  transition:.3s;
}

.btn-invite:hover{
  background:#8b6743;
}

/* NAVBAR */
.custom-navbar{
  background:#fff;
  border-bottom:1px solid #eee;
  padding:10px 0;
}

.logo-navbar{
  font-family:'Playfair Display',serif;
  font-size:30px;
  font-weight:700;
  color:#c59b5f;
  text-decoration:none;
}

.logo-navbar span{
  color:#777;
}

.custom-navbar .nav-link{
  color:#555;
  margin-left:20px;
  text-transform:uppercase;
  font-size:13px;
  letter-spacing:1px;
}

.custom-navbar .nav-link:hover{
  color:#000;
}

/* COUPLE */
.couple{
  background:url('bg couple.png') center/cover no-repeat;
  position:relative;
  padding:100px 0;
}

.couple::before{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(255,255,255,0.82);
}

.couple .container{
  position:relative;
  z-index:2;
}

.couple img{
  width:180px;
  height:180px;
  object-fit:cover;
  border-radius:50%;
  border:6px solid white;
  box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.and-symbol{
  font-size:80px;
  color:#b08968;
}

.flower{
  position:absolute;
  width:220px;
  z-index: 1;;
}

.flower-left{
  top:0;
  left:0;
}

.flower-right{
  bottom:0;
  right:0;
}

/* EVENT SECTION */
.event{
  background:
  linear-gradient(
    rgba(255,255,255,0.80),
    rgba(255,255,255,0.80)
  ),
  url('bg couple.png') center/cover no-repeat;
  min-height:100vh;
  display:flex;
  align-items:center;
  padding:60px 20px;
}

/* CARD UTAMA */
.event-card{
  width:100%;
  max-width:950px;
  margin:auto;

  background:
  rgba(255,255,255,0.70);
  backdrop-filter:blur(8px);
  border-radius:40px;
  border:1px solid #ecd8b8;

  padding:45px 55px;
  box-shadow:
  0 10px 40px rgba(0,0,0,0.08);
  text-align:center;
  position:relative;
}

/* ORNAMEN ATAS */
.top-ornament{
  font-size:40px;
  color:#d4af37;
  margin-bottom:10px;
}

/* JUDUL */
.event-title{
  font-size:64px;
  color:#123c69;
  margin-bottom:10px;
}

/* GARIS */
.line{
  width:180px;
  height:2px;
  background:#d4af37;
  margin:15px auto;
}

/* HARI */
.day{
  color:#9b7b52;
  font-size:22px;
}

/* TANGGAL */
.big-date{
  font-size:92px;
  line-height:1;
  color:#123c69;
  font-family:'Playfair Display',serif;
}

/* BULAN */
.month{
  display:inline-block;
  background:#edf2fa;
  padding:10px 30px;
  border-radius:30px;
  margin-top:10px;
  color:#123c69;
  font-size:22px;
  font-family:'Playfair Display',serif;
}

/* BOX */
.event-box{
  background:white;
  border-radius:25px;
  padding:35px 20px;
  margin-top:35px;
  box-shadow:
  0 5px 20px rgba(0,0,0,0.05);
  border:1px solid #eee;
  position:relative;
}

/* ICON BULAT */
.icon-circle{
  width:80px;
  height:80px;
  background:#f7f9fc;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:
  -70px auto 20px;
  font-size:32px;
  border:4px solid white;
  box-shadow:
  0 5px 15px rgba(0,0,0,0.08);
}

/* JUDUL BOX */
.event-box h5{
  font-size:42px;
  color:#123c69;
}

/* JAM */
.time{
  display:inline-block;
  background:#edf2fa;
  padding:10px 22px;
  border-radius:20px;
  margin-top:15px;
  font-size:20px;
}

/* LOKASI */
.location-box{
  background:#f8fbff;
  margin-top:35px;
  border-radius:25px;
  padding:35px 20px;
  border:1px solid #e8edf5;
}

.location-box h4{
  color:#123c69;
  font-size:42px;
}

/* BUTTON */
.btn-map{
  display:inline-block;
  margin-top:20px;
  background:#123c69;
  color:white;
  text-decoration:none;
  padding:14px 35px;
  border-radius:14px;
  font-size:20px;
  transition:.3s;
}

.btn-map:hover{
  background:#1b4d85;
  color:white;
}

/* RESPONSIVE */
@media(max-width:768px){
  .event-card{
    padding:35px 20px;
  }

  .event-title{
    font-size:42px;
  }

  .big-date{
    font-size:65px;
  }

  .event-box h5{
    font-size:30px;
  }

  .location-box h4{
    font-size:28px;
  }

  .couple img{
    width:130px;
    height:130px;
  }

  .and-symbol{
    margin:20px 0;
    font-size:50px;
  }

  .flower{
    width:120px;
  }

}

/* COMMENT */
.comment-section{
  background:#f8f8f8;
  padding:100px 20px;
}

.comment-box{
  max-width:800px;
  margin:auto;
  background:white;
  padding:50px 40px;
  border-radius:25px;
  box-shadow:
  0 10px 30px rgba(0,0,0,0.05);
}

.comment-section h3{
  font-size:42px;
  color:#6b4b2a;
  margin-bottom:10px;
  text-align:center;
}

.comment-section p{
  text-align:center;
}

.comment-section form{
  margin-top:40px;
}

.comment-section input,
.comment-section textarea{
  width:100%;
  padding:15px 20px;
  border:none;
  background:#f3f3f3;
  border-radius:15px;
  margin-bottom:20px;
  font-family:'Poppins';
}

.comment-section button{
  background:#6b4b2a;
  color:white;
  border:none;
  padding:14px 30px;
  border-radius:12px;
  width:100%;
  font-weight:600;
  transition:0.3s;
}

.comment-section button:hover{
  background:#8b6743;
}

.comment-list{
  margin-top:50px;
}

.comment-item{
  background:#fafafa;
  padding:20px;
  border-radius:15px;
  margin-bottom:20px;
  border-left:4px solid #6b4b2a;
}

.comment-item h5{
  margin-bottom:8px;
  color:#6b4b2a;
}

.comment-time{
  display:block;
  color:#999;
  font-size:13px;
  margin-top:-5px;
  margin-bottom:10px;
}

.comment-header{
display:flex;
justify-content:space-between;
align-items:flex-start;
gap:10px;
}

.comment-actions{
display:flex;
gap:8px;
}

.edit-btn,
.delete-btn{
text-decoration:none;
font-size:18px;
transition:.2s;
}

.edit-btn:hover,
.delete-btn:hover{
transform:scale(1.1);
}

.kehadiran{
    display:flex;
    align-items:center;
    gap:25px;
    margin-bottom:20px;
}

.kehadiran label{
    display:flex;
    align-items:center;
    gap:6px;
    cursor:pointer;
    margin:0;
}

.kehadiran input[type="radio"]{
    width:auto !important;
    height:auto !important;
    padding:0 !important;
    margin:0;
    background:none !important;
    border:none !important;
    accent-color:#6b4b2a;
}

.notif-success{
    position:fixed;
    top:20px;
    left:50%;
    transform:translateX(-50%);
    background:#ffffff;
    color:#6b4b2a;
    padding:14px 28px;
    border-radius:15px;
    border:1px solid #ecd8b8;
    box-shadow:0 10px 25px rgba(0,0,0,.12);
    font-weight:600;
    z-index:9999;

    animation:
    slideDown .4s ease,
    fadeOut .5s ease 3s forwards;
}

@keyframes slideDown{
    from{
        opacity:0;
        transform:translate(-50%,-20px);
    }to{
        opacity:1;
        transform:translate(-50%,0);
    }
}

@keyframes fadeOut{
    to{
        opacity:0;
        visibility:hidden;
    }
}

.status-hadir{
background:#e8f8ec;
color:#1f8b4c;
padding:6px 12px;
border-radius:20px;
font-size:12px;
font-weight:600;
}

.status-tidak{
background:#fdeaea;
color:#c0392b;
padding:6px 12px;
border-radius:20px;
font-size:12px;
font-weight:600;
}

.nama-status{
    display:flex;
    align-items:center;
    gap:10px;
    flex-wrap:wrap;
}

.nama-status h5{
    margin:0;
}

@media(max-width:576px){

.comment-header{
gap:5px;
}

.edit-btn,
.delete-btn{
font-size:16px;}
}

.reply-btn{
display:inline-block;
margin-top:8px;
font-size:13px;
font-weight:600;
text-decoration:none;
color:#6b4b2a;
}

.reply-btn:hover{
text-decoration:underline;
}

.reply-item{
margin-left:40px;
margin-top:10px;
padding:12px;
background:#f4f4f4;
border-left:3px solid #6b4b2a;
border-radius:10px;
}
</style>
</head>

<script>
setTimeout(() => {
    const notif =
    document.querySelector('.notif-success');

    if(notif){
        notif.remove();}

}, 3500);
</script>

<body>
<!-- NAVBAR -->
<nav class="custom-navbar navbar navbar-expand-md sticky-top">

  <div class="container">
    <a href="#" class="logo-navbar">
      D<span>A</span>
    </a>

    <button class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="menu">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i data-feather="home"></i> Home
          </a>
        </li>

        <li class="nav-item">
          <a href="#couple" class="nav-link">
            <i data-feather="users"></i> Couple
          </a>
        </li>

        <li class="nav-item">
          <a href="#event" class="nav-link">
            <i data-feather="calendar"></i> Events
          </a>
        </li>

      <li class="nav-item">
          <a href="#comment" class="nav-link">
            <i data-feather="message-circle"></i> comments
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">

  <div class="hero-content">
    <div class="logo">DA</div>
    
    <div class="names">
      Diyanto & Annisa
    </div>
    
    <div class="date">
      17 • 12 • 2024
    </div>

    <a href="#event" class="btn-invite">
      Buka Undangan
    </a>

  </div>

</section>

<!-- COUPLE -->
<section id="couple" class="couple text-center">

  <img src="kiri.png" class="flower flower-left">
  <img src="kanan2.png" class="flower flower-right">

  <div class="container">
    <h2 class="mb-4">The Wedding Of</h2>
    <p class="mb-5" style="max-width:700px; margin:auto;">
      Dengan memohon rahmat dan ridho Allah SWT,
      kami bermaksud menyelenggarakan acara
      pernikahan kami.
    </p>

    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-4 mb-4">
        <img src="pria.png" class="mb-3">
        <h5>Diyanto, A.Md.Kom</h5>
        <p>Putra Bungsu dari</p>
        <p>
          <b>Bapak Sukarso</b> & <b>Ibu Sarih</b>
        </p>
      </div>

      <div class="col-12 col-md-2">
        <div class="and-symbol">&</div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <img src="wanita.jpg" class="mb-3">
        <h5>Annisa Apriliani, S.Pd</h5>
        <p>Putri Kedua dari</p>
        <p>
          <b>Bapak Sujana</b> &
          <b>Ibu Ratinah</b>
        </p>
      </div>

    </div>
  </div>
</section>

<!-- EVENT -->
<section id="event" class="event">

  <div class="container">
    <div class="event-card">
      <div class="top-ornament">❦</div>
      <h2 class="event-title">
        The Happy Day!
      </h2>

      <div class="line"></div>
      <div class="day">Selasa</div>
      <div class="big-date">17</div>
      <div class="month">Desember 2024</div>

      <div class="row g-4 mt-4"> 
      <!-- AKAD -->
        <div class="col-12 col-md-6">
          <div class="event-box">
            <div class="icon-circle">🕌</div>
            <h5>Akad Nikah</h5>
            <div class="line"></div>
            <div class="time">⏰ 09.00 WIB</div>
          </div>
        </div>

        <!-- RESEPSI -->
        <div class="col-12 col-md-6">
          <div class="event-box">
            <div class="icon-circle">💍</div>
            <h5>Resepsi</h5>

            <div class="line"></div>
            <div class="time">⏰ 11.00 WIB</div>
          </div>
        </div>

      </div>

      <div class="location-box">
        <h4>📍 Gedung JHK Kudus</h4>
        <div class="line"></div>

        <a href="https://maps.app.goo.gl/N6sySu45jGiRhNzE6"
           target="_blank"
           class="btn-map">Lihat Peta →</a>

      </div>
    </div>

  </div>

</section>

<!-- COMMENT -->
<section id="comment" class="comment-section">
  <div class="container">
    <div class="comment-box">

      <h3>Ucapan & Doa</h3>
      <p class="mb-4">Berikan ucapan dan doa terbaik untuk kami 🤍</p>

  <?php if(isset($_SESSION['success'])): ?>
<div class="notif-success">
    <?= $_SESSION['success']; ?>
</div>

<?php unset($_SESSION['success']); ?>
<?php endif; ?>

      <!-- FORMULIR KOMENTAR -->
<?php if(isset($_GET['reply'])) { ?>

<div style="
background:#fff3cd;
padding:10px;
border-radius:10px;
margin-bottom:15px;
">
💬 Sedang membalas komentar #<?= $_GET['reply']; ?>
<a href="index.php#comment"
style="margin-left:10px;">
Batal
</a>

</div>

<?php } ?>
      <form action="comment.php" method="POST">
        <input 
          type="text" 
          name="nama" 
          placeholder="Nama"
          required
        >

      <!-- kehadiran -->
 <div class="kehadiran-title">
    Konfirmasi Kehadiran
</div>

<div class="kehadiran">
    <label>
        <input type="radio" name="status" value="Hadir" required>
        <span>Hadir</span>
    </label>

    <label>
        <input type="radio" name="status" value="Tidak Hadir">
        <span>Berhalangan Hadir</span>
    </label>

</div>
      <textarea 
          name="pesan" 
          rows="4"
          placeholder="Tulis ucapan..."
          required>
      </textarea>

      <input
        type="hidden"
        name="parent_id"
        value="<?= isset($_GET['reply']) ? $_GET['reply'] : ''; ?>"
      >

      <button type="submit">Kirim Ucapan</button>
      </form>

      <!-- LIST KOMENTAR -->
      <div class="comment-list">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $conn = mysqli_connect("localhost", "root", "", "wedding");

$query = mysqli_query(
    $conn,
    "SELECT * FROM comments
     WHERE parent_id IS NULL
          ORDER BY id DESC"
);

while($data = mysqli_fetch_array($query)) {
?>

<div class="comment-item">
  <div class="comment-header">
  
  <div>
      <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
        <h5 style="margin:0;">
          <?= htmlspecialchars($data['nama']); ?>
        </h5>

        <?php if(!empty($data['status'])): ?>
          <span class="<?= $data['status'] == 'Hadir'
          ? 'status-hadir'
          : 'status-tidak'; ?>">

            <?= htmlspecialchars($data['status']); ?>
          </span>
        <?php endif; ?>
      </div>

      <small class="comment-time">
      <?php
      $created = strtotime($data['created_at']);
      $selisih = time() - $created;
      if($selisih < 60){
          echo $selisih . " detik lalu";
      }
      elseif($selisih < 3600){
          echo floor($selisih/60) . " menit lalu";
      }
      elseif($selisih < 86400){
          echo floor($selisih/3600) . " jam lalu";
      }
      elseif($selisih < 604800){
          echo floor($selisih/86400) . " hari lalu";
      }
      else{
          echo date("d M Y H:i", $created);
      }
      ?>
      </small>
    </div>

    <?php if(
      isset($_COOKIE['owner_id']) &&
      $_COOKIE['owner_id'] == $data['owner_id']
    ){ ?>

      <div class="comment-actions">
        <a href="edit.php?id=<?= $data['id']; ?>"
           class="edit-btn">✏️</a>

        <a href="hapus.php?id=<?= $data['id']; ?>"
           class="delete-btn"
           onclick="return confirm('Hapus komentar ini?')">🗑️</a>
      </div>
    <?php } ?>
  </div>
 <p><?= htmlspecialchars($data['pesan']); ?></p>

<?php
$jumlahBalasan = mysqli_num_rows(
mysqli_query(
$conn,
"SELECT id FROM comments
WHERE parent_id='".$data['id']."'"));
?>

<div style="display:flex;gap:15px;align-items:center;">
<a href="?reply=<?= $data['id']; ?>#comment"
class="reply-btn">💬 Balas</a>

<?php if($jumlahBalasan > 0){ ?>
<a href="#"
class="reply-btn"
onclick="toggleReplies(<?= $data['id']; ?>);return false;">
<?= $jumlahBalasan ?> Balasan </a>
<?php } ?>

</div>
<?php
$reply = mysqli_query(
$conn,
"SELECT * FROM comments
WHERE parent_id='".$data['id']."'
ORDER BY created_at ASC"
);
?>

<div
id="replies-<?= $data['id']; ?>"
style="display:none;">

<?php while($r = mysqli_fetch_assoc($reply)) { ?>
<div class="reply-item">
<b><?= htmlspecialchars($r['nama']); ?></b>

<p style="margin:5px 0 0;">
<?= htmlspecialchars($r['pesan']); ?>
</p>
</div>

<?php } ?>
</div>
</div>

<?php
}
?>
      </div>
    </div>
  </div>
</section>

<!-- js nya -->
<script>

function toggleReplies(id){

let box =
document.getElementById(
"replies-"+id
);

if(box.style.display=="none"){
box.style.display="block";
}else{
box.style.display="none";
}

}

</script>

<script>
feather.replace();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
