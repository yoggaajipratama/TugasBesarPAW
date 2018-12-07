<?php 
	ob_start();
	session_start();
	if (isset($_SESSION['user_name'])) header("location: ../index.php");
	include "connection.php";

	/*Proses login*/
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$password = $_POST['password'];
		$query = mysqli_query($koneksi, "select * from user where name = '$name' and password = '$password'");

		if (mysqli_num_rows($query)>0) {
			$row_user = mysqli_fetch_array($query);
			$_SESSION['user_id'] = $row_user['id'];
			$_SESSION['user_name'] = $row_user['name'];

			header("location: report.php");
		}else{
			header("location: login.php?gagal-login");
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body id="login">
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

	<form method="post">
		<center>
			<div class="portal">
				<h1>Login</h1>
				<input type="username" name="name" placeholder="Username" class="username" autocomplete="off"> <br><br>
				<input type="password" name="password" placeholder="Password" class="password" autocomplete="off"> <br><br>
				<a href="newaccount.php" class="create">Create new account</a>
				<button type="submit" name="submit" class="submit">Login</button>
				<?php if (isset($_GET['gagal-login'])):?>
					<p>Login gagal</p>
				<?php endif; ?>
			</div>
		</center>
	</form>
</body>
</html>
<?php 
	ob_end_flush();
	mysqli_close($koneksi);
 ?>