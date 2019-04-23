	<div class="main">
		<h1 class="content">DAFTAR KONTAK</h1>
	</div>
	<form method="post" action="kontak_proses.php">
	<div>
		<table class="table table-bordered table-striped">
			<thead class="teks-tengah">
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
					$sql = "SELECT * FROM kontak";
					$result = $conn->query($sql);

					if ($result->num_rows > 0)
					{
						$i = 1;
						while ($row = $result->fetch_assoc()) {
							echo '<tr>';
							echo '<td style="text-align:center;">'.$i.'</td>';
							echo '<td>'.$row['nama'].'</td>';
							echo '<td>'.$row['email'].'</td>';
							echo '<td>'.$row['pertanyaan'].'</td>';
							echo '<td><a href="kontak_edit.php?id='.
									$row['Id'].'">Edit</a>
									<a href="kontak_delete_proses.php?id='.
				 							$row['Id'].'">Delete</a>
									</td>';
							echo '</tr>';

							$i++;
						}

					}
						?>
			</tbody>
		</table>

	</div>
	</form>

