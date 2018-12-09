<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
<head>
	<title>Create new account</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style2.css">
</head>
<body id="create">
<!-- navbar -->
<div class="navbar2">
	<nav>
		<ul class="nav2">
			<a href="<?php echo site_url('index') ?>">Home</a> &nbsp;&nbsp;
			<a href="">Contact</a> &nbsp;&nbsp;
			<a href="">About</a>
		</ul>
	</nav>
</div>

	<center>
 	<div class="portal">
 		<form action="<?php echo base_url('auth/tambah'); ?>" method="post">
		 	<h1>New Account</h1>
		 	<input type="text" name="username" placeholder="Nama lengkap" class="nama" autocomplete="off">
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