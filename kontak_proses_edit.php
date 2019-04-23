<?php
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "UPDATE kontak set
		nama='$nama',
		email='$email',
		pertanyaan = '$pertanyaan',
		created = '$created'
		WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	header('Location: kontak_daftar.php');
	die;
	# code...
}
else{
	echo "Error dengan Pesan".$sql."<br>".$conn->error;
}

$conn->close();
?>