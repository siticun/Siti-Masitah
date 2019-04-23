<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "INSERT INTO kontak (nama,email,pertanyaan,created) Values ('$nama','$email','$pertanyaan','$created');";

if ($conn->query($sql) === TRUE) {
	header('Location: index.php?pesan=berhasil');
	# code... 
}
else{
	echo "Error dengan pesan: ".$sql."<br>".$conn->error;
}
$conn->close();
?>