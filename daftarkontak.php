	<h1 class="content teks-tengah">DAFTAR KONTAK</h1>
	<form method="post" action="kontak_proses.php">
	<div style="padding-left: 40%">
		<table>
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Pertanyaan</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM kontak"
					$result = $conn=>query($sql);?>
			</tbody>
		</table>
		
	</div>
	</form>