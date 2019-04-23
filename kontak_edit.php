<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<?php include "header.php"; ?>
</head>
<body>
<div id="logo">
	<a href="/">
		<img src="logo vektor robotic baru.png", height="180px">
		<span>belajar Robotic</span>
	</a>
</div>	
<div id="container">
	<?php include "menu.php"; ?>
	<div class="main">
		<h1 class="content">KONTAK</h1>
	</div>
	<?php
		include 'koneksi.php';
		$sql = "SELECT * FROM kontak WHERE Id=".$_GET['id'];
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	?>
	<form method="post" action="kontak_proses_edit.php?id=<?php echo $_GET['id']; ?>">
	<div style="padding-left: 40%">
		<table>
			<tr>
				<td rowspan="1">Nama</td>
				<td>:</td>
				<td><input type="text"
				value="<?php echo $row['Nama']; ?>" 
				 name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" 
				value="<?php echo $row['Email']; ?>" 
				name="email" required></td>
			</tr>
			<tr>
				<td valign="top">Pertanyaan</td>
				<td valign="top">:</td>
				<td><textarea rows="10" cols="20" required name="pertanyaan"><?php echo $row['Pertanyaan'] ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input class="button" type="submit" name="kirim" value="kirim"></td></td>
			</tr>
		</table>
		
	</div>
	</form>
</div>
</body>
</html>
