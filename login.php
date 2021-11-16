<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		.bulu{
			width: 20px;
			height: 15px;
			
		}
		body{
			background-color: yellow;
		}
	</style>
</head>
<body>
	
	<div class="login">

		<div class="avatar">
		  <i class="fa fa-user"></i>
		</div>

		<h2>Login</h2>
    <form method="post">
		<div class="box-login">
		  <i class="fas fa-envelope"></i>
		<input type="text" placeholder="Masukan NPM" name="NPM" id="NPM" autocomplete="off" required>
		</div>

		<div class="box-login">
		  <i class="fas fa-lock"></i>
		  <input type="password" placeholder="Password" id="pswd" name="pswd" required>
		</div>

		<button type="submit" class="btn-login" name="blogin" id="blogin">Login</button>
<br>
		<div clas="bulu">
			<a href="inputanggota.php"><font color="white">Daftar</a>
			
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>
	<?php 
if (isset($_POST['blogin'])) {
	$NPM=filter_var($_POST['NPM'],FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
	$koneksi=new mysqli('localhost','root','','kelompok1');
	$sql="select * from anggota where NPM = '".$NPM."' and password='".$pswd."'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();
	if (empty($r)) {
		echo "<h2><center>Maaf anda tidak terdaftar !</font></h2><center> ";
		exit();
	} else {
		echo "<script>window.location.href='daftar.php';</script>";
	}
}

?>
</body>
</html>
