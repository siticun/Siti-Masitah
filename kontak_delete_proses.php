<?php
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "DELETE FROM kontak WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
	header('Location: index.php?pesan=hapus');
	die;
	# code...
}
else{
	echo "Error dengan Pesan".$sql."<br>".$conn->error;
}

$conn->close();
?>