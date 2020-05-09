<?php  
	include "koneksi.php";

	session_start();

	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

	$konek = mysqli_query($conn, $query);
	$login = mysqli_num_rows($konek);

	if ($login > 0) {
		$data = mysqli_fetch_assoc($konek);
		if ($data['status']=="petugas") {
			$_SESSION['username'] = $data['nama'];
			$_SESSION['status'] = "Petugas";
			header("location:home.php");
		}else if($data['status']=="pengunjung"){
			$_SESSION['username'] = $data['nama'];
			$_SESSION['status'] = "Pengunjung";
			header("location:home.php");
		}else{
			header("location:halaman_login.php");
		}
	}else{
		header("location:halaman_login.php?pesan=gagal_login");
	}
?>