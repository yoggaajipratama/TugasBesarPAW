<?php 
	ob_start();
	session_start();
	if (!isset($_SESSION['user_name'])) 
		header("location: login.php");
	include "connection.php";

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$ktp = $_POST['ktp'];
		$nampro = $_POST['nampro'];
		$alamat = $_POST['alamat'];
		$tgl = $_POST['tgl'];
		$ket = $_POST['ket'];

		$query = mysqli_query($koneksi, "insert into report (nama, ktp, nampro, alamat, tgl, ket) values ('$nama', '$ktp', '$nampro', '$alamat', '$tgl', '$ket')");

		if ($query) {
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Contribution</title>
<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body id="contrib">
	<!-- navbar -->
	<div class="navbar2">
		<nav>
			<ul class="nav2">
				<a href="logout.php">Logout</a> &nbsp;&nbsp;
			</ul>
		</nav>
	</div>

	<form action="" method="post" enctype="multipart/form-data">
		<center>
			<div class="form">
				<h2>FORM PENGADUAN</h2>
				<table>

					<tr class="baris1">
						<th>Nama lengkap</th>
						<td>
							<input type="text" name="nama" autocomplete="off" class="inputreport">
						</td>
					</tr>

					<tr class="baris2">
						<th>Nomor KTP</th>
						<td><input type="text" name="ktp" autocomplete="off" class="inputreport"></td>
					</tr>

					<tr class="baris3">
						<th>Nama produk</th>
						<td>
							<input type="text" name="nampro" autocomplete="off" class="inputreport">
						</td>
					</tr>

					<tr class="baris4">
						<th>Foto produk</th>
						<td>
							<input type="file" name="image">
						</td>
					</tr>

					<tr class="baris5">
						<th>Alamat kejadian</th>
						<td>
							<textarea name="alamat" autocomplete="off" class="inputreport"></textarea>
						</td>
					</tr>
					
					<tr class="baris6">
						<th>Tanggal kejadian</th>
						<td><input type="date" name="tgl" class="inputreport" min="2018-01-01"></td>
					</tr>
					
					<tr class="baris7">
						<th>Harga</th>
						<td>
							<input type="range" name="harga" autocomplete="off" min="0" max="1000000000" >
						</td>
					</tr>

					<tr class="baris8">
						<th>Keterangan</th>
						<td>
							<textarea name="ket" class="inputreport"></textarea>
						</td>
					</tr>
				</table>
				<div>
					<center>
						<input type="submit" name="submit" value="Upload" class="send">
					</center>
				</div>
			</div>
		</center>
	</form>
</body>
</html>

<?php 
	ob_flush();
	mysqli_close($koneksi);
 ?>