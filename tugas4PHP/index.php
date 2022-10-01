<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 4 PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	require "Pegawai.php";

	$data = [
		[
			"nip" => "001",
			"nama" => "Udin",
			"jabatan" => "Manager",
			"agama" => "Islam",
			"status" => "Menikah",
		],
		[
			"nip" => "002",
			"nama" => "Budi",
			"jabatan" => "Asmen",
			"agama" => "Kristen",
			"status" => "Menikah",
		],
		[
			"nip" => "003",
			"nama" => "Asep",
			"jabatan" => "Kabag",
			"agama" => "Islam",
			"status" => "Belum Menikah",
		],
		[
			"nip" => "004",
			"nama" => "Anto",
			"jabatan" => "Staff",
			"agama" => "Budha",
			"status" => "Belum Menikah",
		],
		[
			"nip" => "005",
			"nama" => "Supri",
			"jabatan" => "Manager",
			"agama" => "Islam",
			"status" => "Menikah",
		],
	]
	?>
	<div class="container">
		<div class="row">
		<?php
				foreach ($data as $pg) {
					$nip = $pg['nip'];
					$nama = $pg['nama'];
					$jabatan = $pg['jabatan'];
					$agama = $pg['agama'];
					$status = $pg['status'];

					$pegawai = new Pegawai($nip, $nama, $jabatan, $agama, $status);
					$pegawai->mencetak();
				}
				?>
		</div>
	</div>
</body>

</html>