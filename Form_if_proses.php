<?php

	$nilai = $_POST['bil1'];

	if (!is_numeric($nilai)) {
		echo "Bukan angka";
	}
	else{
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
	}
?>