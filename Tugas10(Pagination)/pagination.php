<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagination [17]</title>
	<link rel="stylesheet" type="text/css" href="pagination.css">
</head>
<body>
	<h2>Macam-Macam Makanan Khas Indonesia</h2>

	<?php
	include "koneksi.php";

	$batas = 5;
	$halaman = @$_GET['halaman'];
	if (empty($halaman)) {
	 	$posisi = 0;
	 	$halaman = 1;
	 } 
	 else{
	 	$posisi = ($halaman-1) * $batas;
	 }

	 $query = "SELECT * FROM makanan_indonesia LIMIT $posisi,$batas";
	 $tampil = mysqli_query($conn, $query);

	 echo "<table>
	 			<tr>
	 				<th>No</th>
	 				<th>Nama Makanan</th>
	 				<th>Daerah Asal Makanan</th>
	 			</tr>";

	 $no = $posisi+1;
	 while ($data = mysqli_fetch_array($tampil)) {
	 	echo "<tr>
	 			<td>$no</td>
	 			<td>$data[nama_makanan]</td>
	 			<td>$data[asal_makanan]</td>
	 		</tr>";
	 	$no++;
	 }

	 echo "</table>";

	 $query2 = mysqli_query($conn, "SELECT * FROM makanan_indonesia");
	 $jmldata = mysqli_num_rows($query2);
	 $jmlhalaman = ceil($jmldata/$batas);

	 echo "<br> Halaman : ";

	 for ($i=1; $i <=$jmlhalaman ; $i++) { 
	 	if ($i != $halaman) {
	 		echo "<a href=\"pagination.php?halaman=$i\">$i</a> | ";
	 	}
	 	else{
	 		echo "<b>$i</b> | ";
	 	}
	 }

	 echo "<p>Total Daftar Makanan : <b>$jmldata</b></p>";
	?>
</body>
</html>