<?php 
	if (!isset($_SESSION['username'])) 
		redirect('login');
?>
<!DOCTYPE html>
<html>
<head>
<title>Contribution</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('');?>assets/css/style2.css">
</head>
<body id="contrib">
	<!-- navbar -->
	<div class="navbar2">
		<nav>
			<ul class="nav2">
				<a href="<?= base_url('auth/logout'); ?>">Logout</a> &nbsp;&nbsp;
			</ul>
		</nav>
	</div>

	<form action="<?php echo base_url('auth/report'); ?>" method="post" enctype="multipart/form-data">
	<?php if ($this->session->flashdata('pesan2')) {?>
			<div>
				<br>
				<script type="text/javascript">
					alert('<?= $this->session->flashdata('pesan2'); ?>');
				</script>
			</div>
	<?php }?>
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
							<input type="text" name="harga" class="inputreport" autocomplete="off" min="0" max="1000000000" placeholder="Rp.">
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