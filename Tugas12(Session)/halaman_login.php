<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Login [17]</title>
	<link rel="stylesheet" type="text/css" href="CSS/halaman_login.css">
</head>
<body>
	<?php 
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal_login") {
				echo "<script type='text/javascript'>alert('Username dan Password Salah!');</script>";
			}
		}
	?>
	<h1>Selamat Datang Di Perpustakaan Bersama</h1>
	<div class="login_box">
		<h2>LOG IN</h2>
		<form method="POST" action="login.php">
			<label>Username</label><br>
			<input type="text" name="username" placeholder="Username"><br>
			<label>Password</label><br>
			<input type="password" name="pass" placeholder="Password"><br>
			<input type="submit" name="masuk" value="Login">
		</form>
	</div>
</body>
</html>