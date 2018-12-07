<?php 
 	include "connection.php";
 	if (isset($_POST['submit'])) {
 		$name = $_POST['name'];
 		$email = $_POST['email'];
 		$telp = $_POST['telp'];
 		$password = $_POST['password'];

 		$query = mysqli_query($koneksi, "insert into user (name, email, telp, password) values ('$name', '$email', '$telp', '$password')");

 		if ($query) {
 			echo "Berhasil";
 			header("location: login.php");
 		}else{
 			echo"Gagal";
 		}
 	}
?>
 <!DOCTYPE html>
 <html>
 <meta name="viewport" content="width=device-witdh, initial-scale=1.0">
 <head>
 <title>Create new account</title>
 <link rel="stylesheet" type="text/css" href="../css/style2.css">
 </head>
 <body id="create">
	<!-- navbar -->
	<div class="navbar2">
		<nav>
			<ul class="nav2">
				<a href="index.php">Home</a> &nbsp;&nbsp;
				<a href="">Contact</a> &nbsp;&nbsp;
				<a href="">About</a>
			</ul>
		</nav>
	</div>

 	<center>
	 	<div class="portal">
	 		<form action="" method="post">
			 	<h1>New Account</h1>
			 	<input type="text" name="name" placeholder="Nama lengkap" class="nama" autocomplete="off">
			 	<br><br>
			 	<input type="text" name="email" placeholder="Email" class="username" autocomplete="off">
			 	<br><br>
			 	<input type="text" name="telp" placeholder="Number phone" class="username" autocomplete="off">
			 	<br><br>
			 	<input type="password" name="password" placeholder="Password" class="password">
			 	<br><br>
			 	<input type="submit" name="submit" value="Create" class="submit">
		 	</form>
	 	</div>
 	</center>
 </body>
 </html>