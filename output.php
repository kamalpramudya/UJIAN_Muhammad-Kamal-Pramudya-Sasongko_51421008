<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Output</title>
</head>
<body>
<div style="height:100vh" class="d-flex justify-content-center flex-column align-items-center">
		<div class="border border-2 border-black p-4 w-25">
			<h6 class="text-center">STRUK PEMBAYARAN</h6>
			<h6 class="text-center">CINEMA DIGITALENT 21</h6>
			<p>============================</p>
			<div class="row">
				<div class="col-5">
					<h6> Kode Film : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$kode = $_POST["kode_tiket"];
							echo $kode;
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Nama Film : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$kode = $_POST['kode_tiket'];
							if($kode == "TRM") {
								echo "Transformers The Last Knight";
							} else if ($kode == "MTD") {
								echo "47 Meters Down";
							} else if ($kode == "TMM") {
								echo "The Mummy";
							} else if ($kode == "TWM") {
								echo "Wonder Woman";
							}
							
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Harga : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$hari = $_POST["hari"];
							if ($hari == "Sabtu" || $hari == "Minggu") {
								echo 60000;
							} else if ($hari == "Jumat") {
								echo 50000;
							} else {
								echo 40000;
							}
							
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Waktu : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$waktu = $_POST["waktu"];
							echo $waktu;
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Jumlah Beli : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$jml_beli = $_POST["jml_beli"];
							echo $jml_beli;
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Hari : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$hari = $_POST["hari"];
							echo $hari;
						}
					?>
				</div>
			<div>
			<div class="row">
				<div class="col-5">
					<h6> Tanggal : </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$tanggal = $_POST["tggl"];
							echo $tanggal;
						}
					?>
				</div>
			<div>

			<div class="row">
				<div class="col-5">
					<h6> Total Bayar: </h6>
				</div>
				<div class="col">
					<?php
						if(isset($_POST['submit'])) {
							$hari = $_POST["hari"];
							$jml_beli = $_POST["jml_beli"];
							$harga1 = 40000;
							$harga2 = 50000;
							$harga3 = 60000;
							
							if($hari == "Sabtu" || $hari == "Minggu"){
								echo 60000 * $jml_beli;
							} else if($hari == "Jumat"){
								echo 50000 * $jml_beli;
							} else {
								echo 40000 * $jml_beli;
							}

						}
					?>
				</div>
			<div>
			<p>============================</p>
			<h6>Terima Kasih</h6>

			<p>============================</p>
		</div>
        <a href="index.php">INGIN MEMBELI LAGI? >>></a>
	</div>
</body>
</html>
