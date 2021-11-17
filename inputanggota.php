<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>input data pustakawan</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="gaya.css">

	</head>
<body>

<br>
<br>
<br>
<div class="container">

	<h2><center>Form Pendaftaran Anggota</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="NPM">NPM</label>
      <input type="text" class="form-control" id="NPM" placeholder=" Ketik NPM" name="NPM">
    </div>
		<label for="Nama">Nama</label>
			<input type="text" name="Nama" id="Nama" placeholder="Ketik Nama" class="form-control"><br>
		<label for="password">Password</label>
			<input type="password" name="password" placeholder="Password" class="form-control" id="password"><br>
	
	
		<br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
<br>
<br>
<br>

<?php 
if (isset($_POST['bSimpan'])) {
	$NPM=filter_var($_POST['NPM'],FILTER_SANITIZE_STRING);
	$Nama=filter_var($_POST['Nama'],FILTER_SANITIZE_STRING);
	$password=$_POST['password'];
	$koneksi=new mysqli("localhost","root","","kelompok1");

	$sql="INSERT INTO `anggota`(`NPM`, `Nama`, `password`) VALUES ('".$NPM."','".$Nama."', '".$password."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Anggota Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Anggota Gagal Mendaftar !</center></h2>";
		}	
	}
	?>
	<br>
	<br>
<footer >
	<h2><center><font color="white">@2021 | Desain By Kelompok ?</font></center></h2>
	
</footer>

	</body>
</html>
