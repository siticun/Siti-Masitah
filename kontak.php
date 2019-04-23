		<h1 class="content teks-tengah">Kontak</h1>
	<form method="post" action="kontak_proses.php">
	<div>
		<center>
		<table class="table table-kontak">
			<tr>
				<td rowspan="1">Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td valign="top">Pertanyaan</td>
				<td valign="top">:</td>
				<td><textarea rows="10" cols="20" required name="pertanyaan"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input class="btn bgc-nav" type="submit" name="kirim" value="kirim" required></td></td>
			</tr>
		</table>
		</center>
	</div>
	</form>