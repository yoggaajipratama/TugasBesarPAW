<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style2.css">
</head>
<body id="login">
	<!-- navbar -->
	<div class="navbar2">
		<nav>
			<ul class="nav2">
				<a href="<?php echo site_url('index') ?>" class="a1">Home</a> &nbsp;&nbsp;
				<a href=""class="a1">Contact</a> &nbsp;&nbsp;
				<a href=""class="a1">About</a>
			</ul>
			</nav>
	</div>
				
	<form action="<?php echo base_url('auth/login'); ?>" method="post">
		<center>
			<div class="portal">
				<h1>Login</h1>
				<input type="username" name="username" placeholder="Username" class="username" autocomplete="off"> <br><br>
				<input type="password" name="password" placeholder="Password" class="password" autocomplete="off"> <br><br>
				<a href="<?= base_url('newaccount'); ?>" class="create" class="a1">Create new account</a>
				<button type="submit" name="submit" class="submit">Login</button>
				<?php if ($this->session->flashdata('pesan')) {?>
					<div>
						<br>
						<?= $this->session->flashdata('pesan'); ?>
					</div>
				<?php }?>
			</div>
		</center>
	</form>
</body>
</html>
