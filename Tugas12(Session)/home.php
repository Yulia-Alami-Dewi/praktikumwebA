<?php 
	include 'koneksi.php';
	session_start();

	if ($_SESSION['status']==""){
		header("location:halaman_login.php?pesan=gagal_login");
	}
	$user = $_SESSION['status'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Bersama [17]</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<body id="<?= $user?>">
	<div class="menu">
		<img src="Gambar/logo.png">
		<h3 style="text-align: center;">Buku Populer</h3>
		<a href="galeri.php" style="text-decoration: none;">Memasak</a><hr>
		<a href="galeri.php" style="text-decoration: none;">Web Pemula</a><hr>
		<a href="galeri.php" style="text-decoration: none;">Java</a><hr>
		<a href="galeri.php" style="text-decoration: none;">Novel</a><hr>
	</div>
	<div class="isi">
		<img src="Gambar/gedung_perpustakaan.jpg">
		<h2>Selamat Datang di Perpustakaan Bersama</h2>
		<div class="head_user">
			<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda Login Sebagai <b><?php echo $_SESSION['status']; ?></b></p>
			<a href="logout.php">LOG OUT</a>
		</div>
		<nav>
			<ul>
				<li><a href="home.php" style="text-decoration: none; color: white;">Home</a></li>
				<li><a href="tentang.php" style="text-decoration: none; color: white;">Tentang</a></li>
				<li><a href="galeri.php" style="text-decoration: none; color: white;">Galeri Buku</a></li>
				<li><a href="kontak.php" style="text-decoration: none; color: white;">Kontak</a></li>
			</ul>
		</nav>
	</div>
	<div class="content">
		<h2  style="color: #79878b;">SELAMAT DATANG</h2>
		<p>Selamat datang di Perpustakaan Bersama. Di Perpustakaan Bersama kita dapat mencari dan menemukan berbagai macam jenis buku yang menarik dan lengkap.</p>
		<h2 style="color: #79878b;">Buku Populer</h2>
		<img src="Gambar/buku1.jpg" width="150px" height="200px">
		<img src="Gambar/buku2.jpg" width="150px" height="200px">
		<img src="Gambar/buku3.jpg" width="150px" height="200px">
		<img src="Gambar/buku4.jpg" width="150px" height="200px">
	</div>
	<div class="footer">
		<p>&copy Copyright 2020</p>	
		<p>Perpustakaan Bersama, Bali</p>	
	</div>
</body>
</html>