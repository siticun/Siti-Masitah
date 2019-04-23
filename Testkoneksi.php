
	<div class="main">
		<h1 class="content">Test Koneksi</h1>
		<p class="content">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "siti02";

			$conn = new mysqli($servername,$username,$password);

			if ($conn -> connect_error) {
				# code...
				die("Koneksi gagal dengan pesan".$conn->connect_error);
			}
			echo "Koneksi Ke database berhasil";
			?>
		</p>
	</div>
