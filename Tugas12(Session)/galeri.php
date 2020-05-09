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
	<title>Galeri Buku Perpustakaan Bersama [17]</title>
	<link rel="stylesheet" type="text/css" href="CSS/galeri.css">
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
		<h2 style="color: #79878b;">Galeri Buku</h2>
		<h3>Buku Memasak</h3>
		<img src="Gambar/buku1.jpg" width="150px" height="200px">
		<p style="font-size: 14px;">ISBN: 978-979-08-2264-1<br> Judul: 40 Resep Masakan Sehari-hari: Praktis & Lezat<br> Penerbit: Agromedia<br> Tahun Terbit: 2017</p>
		<h3>Buku Informatika</h3>
		<div id="buku1">
			<img src="Gambar/buku2.jpg" width="150px" height="200px">
			<p style="font-size: 14px;">ISBN: 978-602-04-xxxx-x<br> Judul: 7 In 1 Pemrograman Web Untuk Pemula<br> Penerbit: PT Elex Media Komputindo<br> Tahun Terbit: 2018</p>
		</div>
		<div id="buku2">
			<img src="Gambar/buku3.jpg" width="150px" height="200px">
			<p style="font-size: 14px;">ISBN: 978-602-02-5545-3<br> Judul: Java Untuk Pemula<br> Penerbit: PT Elex Media Komputindo<br> Tahun Terbit: 2014</p>
		</div>
		<div id="buku3">
			<h3>Buku Novel</h3>
			<img src="Gambar/buku4.jpg" width="150px" height="200px">
			<p style="font-size: 14px;">ISBN: 978-142-31-3189-2<br> Judul: Lightning Thief, The (Percy Jackson and the Olympians, Book 1)<br> Penerbit: Disney Book Group<br> Tahun Terbit: 2009</p>
		</div>
	</div>
	<div class="footer">
		<p>&copy Copyright 2020</p>	
		<p>Perpustakaan Bersama, Bali</p>	
	</div>
</body>
</html>