<?php
	include "koneksi.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorting dan Filter di Perpustakaan [17]</title>
	<link rel="stylesheet" type="text/css" href="perpus.css">
</head>
<body>
	<h2>Sorting &amp; Filter Buku di Perpustakaan</h2>
	<?php 
		$s_penerbit="";
		$s_keyword="";
		$sort = 'ASC';
		$newsort = 'ASC';
		if (isset($_GET['search'])) {
			$s_penerbit = $_GET['s_penerbit'];
			$s_keyword = $_GET['s_keyword'];
		}
		if (isset($_GET['order'])) {
			$order = $_GET['order'];
			$sort = $_GET['sort'];
			
			if ($sort == 'DESC') {
				$newsort = 'ASC';
			}
			else{
				$newsort = 'DESC';
			}
		}else{
			$order = 'id_buku';
		}
	?>
	<form method="GET" action="" align="center">
		<h4>Cari</h4>
		<select name="s_penerbit" id="s_penerbit">
			<option value="">Filter Penerbit</option>
			<option value="Elex Media Computindo"
			<?php 
				if ($s_penerbit=="Elex Media Computindo") {
					echo "selected";
				}
			?>>Elex Media Computindo</option>
			<option value="Andi Offset" 
			<?php 
				if ($s_penerbit=="Andi Offset") {
					echo "selected";
				}
			?>>Andi Offset</option>
			<option value="Informatika Bandung" 
			<?php 
				if ($s_penerbit=="Informatika Bandung") {
					echo "selected";
				}
			?>>Informatika Bandung</option>
			<option value="Bsi Press" 
			<?php 
				if ($s_penerbit=="Bsi Press") {
					echo "selected";
				}
			?>>Bsi Press</option>
			<option value="Prestasi Pustaka" 
			<?php 
				if ($s_penerbit=="Prestasi Pustaka") {
					echo "selected";
				}
			?>>Prestasi Pustaka</option>
			<option value="Gava Media" 
			<?php 
				if ($s_penerbit=="Gava Media") {
					echo "selected";
				}
			?>>Gava Media</option>
		</select>

		<input type="text" name="s_keyword" placeholder="Keyword..." id="s_keyword" value="<?php echo $s_keyword; ?>">

		<button id="search" name="search">Cari</button>
	</form>
	
	<table border="1" align="center">
		<thead>
			<tr>
				<th>No</th>
				<th><a href="?order=judul_buku&&sort=<?php echo $newsort; ?>">Judul Buku</a></th>
				<th><a href="?order=pengarang_buku&&sort=<?php echo $newsort; ?>">Pengarang</a></th>
				<th><a href="?order=edisi_buku&&sort=<?php echo $newsort; ?>">Edisi</a></th>
				<th><a href="?order=penerbit&&sort=<?php echo $newsort; ?>">Penerbit</a></th>
				<th><a href="?order=tahun_terbit&&sort=<?php echo $newsort; ?>">Tahun</a></th>
			</tr>		
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$search_penerbit = '%'.$s_penerbit.'%';
				$search_keyword = '%'.$s_keyword.'%';
				$no = 1;

				$query = "SELECT * FROM buku WHERE penerbit LIKE ? AND (judul_buku LIKE ? OR pengarang_buku LIKE ? OR edisi_buku LIKE ? OR tahun_terbit LIKE ?) ORDER BY $order $sort";

				$buku1 = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
				mysqli_stmt_bind_param($buku1, "sssss", $search_penerbit, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
				mysqli_stmt_execute($buku1);
				$hasil = mysqli_stmt_get_result($buku1);

				if (mysqli_num_rows($hasil) > 0) {
					while ($rows = mysqli_fetch_assoc($hasil)) {
						$id_buku = $rows['id_buku'];
						$judul_buku = $rows['judul_buku'];
						$pengarang_buku = $rows['pengarang_buku'];
						$edisi_buku = $rows['edisi_buku'];
						$penerbit = $rows['penerbit'];
						$tahun_terbit = $rows['tahun_terbit'];
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $judul_buku; ?></td>
					<td><?php echo $pengarang_buku; ?></td>
					<td><?php echo $edisi_buku; ?></td>
					<td><?php echo $penerbit; ?></td>
					<td><?php echo $tahun_terbit; ?></td>
				</tr>
				<?php } } else { ?>
				<tr>
					<td colspan="6" align="center">Tidak Ada Data Ditemukan</td>
				</tr>
				<?php } ?>
		</tbody>
	</table>
</body>
</html>