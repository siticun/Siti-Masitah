<!DOCTYPE html>
<?php
	if ($_POST) {

	$nilai = $_POST['bil1'];

	if (!is_numeric($nilai)) {
		echo "Bukan angka";
	}
		else{
	}
			if ($nilai > 50) {
				echo "Nilai lebih besar dari 50";
			}
			else if ($nilai < 50) {
				echo "Nilai lebih kecil dari 50";
			}
			else
			{
				echo "Nilai sama dengan 50";
			}
	}else{

?>
<html>
<head>
	<title>FORM - IF</title>
</head>
<body>
	<form method="POST" action="Form if.php">
		Bilangan <input type="text" name="bil1"><br />

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
}
?>
