<!DOCTYPE html>
<html>
<head>
	<title>Login Sederhana</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hello, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>

