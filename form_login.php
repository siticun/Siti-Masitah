<!DOCTYPE html>
<html>
<head>
	<title>Form Login dan css</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	
  <div id="kotak">
	<div id="atas">LOGIN ADMINISTRATOR</div>
		<div id="bawah">
		<?php 
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal")
			{
				echo "Login gagal! username dan password salah!";
			}
			else if($_GET['pesan'] == "logout")
			{
				echo "<center>Anda telah berhasil logout</center>";
			}
			else if($_GET['pesan'] == "belum_login")
			{
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
	<br/>
	<form method="post" action="form_login_proses.php">
		<input class="masuk" type="text" name="username" placeholder="username .."><br><br>
		<input class="masuk" type="password" name="password" placeholder="password .."><br><br>
		<input id="tombol" class="" type="submit" name="submit" value="LOGIN">
	</form>

    </div>
  </div>
</body>
</html>