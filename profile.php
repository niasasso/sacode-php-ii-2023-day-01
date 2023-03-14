<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Page</title>
	<!-- style css -->
	<style>
		body {
			background-color: #27ae60;
			padding: 50px;
		}
	</style>
</head>
<body>

	<!-- Heading dengan Tag HTML -->
	<h1>Profile Page</h1>

	<!-- Paragraph dengan Syntax PHP -->
	<?php

		// menampilkan string ke layar
		echo "<p>Hello PHP</p>";

		/*
			Syntax PHP dijalankan hanya di dalam dokumen dengan extensi *.php
		*/

		# Membuat Variabel PHP

		$angka1 = 10;
		$angka2 = 5;

		# Penjumlahan
		$jumlah = $angka1 + $angka2;
		// echo $jumlah;

		# Pengurangan
		$pengurangan = $angka1 - $angka2;
		// echo $pengurangan


	?>

	 <h2>Hasil Penjumlahan</h2>
	 <p>
	 	<?php echo $jumlah; ?>
	 </p>

	 <h2>Hasil Pengurangan</h2>
	 <p>
	 	<?php echo $pengurangan; ?>
	 </p>

</body>
</html>