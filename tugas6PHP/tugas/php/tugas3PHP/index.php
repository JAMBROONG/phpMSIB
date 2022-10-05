<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 3 PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
	<h1 class="text-center mt-4 mb-4"><b>Daftar Nilai Mahasiswa</b></h1>
	<?php
	$data = [
		["nim" => "0001", "nama" => "Purno Sukonto Legowo", "nilai" => 75],
		["nim" => "0002", "nama" => "Sugiono", "nilai" => 90],
		["nim" => "0003", "nama" => "Suparman", "nilai" => 82],
		["nim" => "0004", "nama" => "Budiman", "nilai" => 55],
		["nim" => "0005", "nama" => "Tukiyem", "nilai" => 67],
		["nim" => "0006", "nama" => "Udin", "nilai" => 94],
		["nim" => "0007", "nama" => "Suratmi", "nilai" => 60],
		["nim" => "0008", "nama" => "Juminten", "nilai" => 73],
		["nim" => "0009", "nama" => "Wijanarko", "nilai" => 30],
		["nim" => "0010", "nama" => "Danang", "nilai" => 45],
	];
	$thead = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];
	?>
	<div class="container">
		<table class="table table-bordered table-striped table-dark">
			<thead class="text-center">
				<tr>
					<?php
					foreach ($thead as $th) { ?>
						<th><?= $th ?></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data as $mhs) {
					$nim = $mhs["nim"];
					$nama = $mhs["nama"];
					$nilai = $mhs["nilai"];
					$ket = ($nilai >= 60) ? "<b class='text-success'>Lulus</b>" : "<b class='text-danger'>Tidak Lulus</b>";

					if ($nilai >= 90 && $nilai < 100) {
						$grade = "A";
					} elseif ($nilai >= 80 && $nilai < 90) {
						$grade = "B";
					} elseif ($nilai >= 70 && $nilai < 80) {
						$grade = "C";
					} elseif ($nilai >= 60 && $nilai < 70) {
						$grade = "D";
					} else {
						$grade = "E";
					}

					switch ($grade) {
						case 'A':
							$predikat = "Memuaskan";
							break;
						case 'B':
							$predikat = "Baik";
							break;
						case 'C':
							$predikat = "Cukup";
							break;
						case 'D':
							$predikat = "Kurang";
							break;
						default:
							$predikat = "Buruk";
							break;
					}
				?>
					<tr>
						<td class="text-center"><?= $no++ ?></td>
						<td class="text-center"><?= $nim ?></td>
						<td><?= $nama ?></td>
						<td class="text-center"><?= $nilai ?></td>
						<td><?= $ket ?></td>
						<td class="text-center"><?= $grade ?></td>
						<td><?= $predikat ?></td>
					</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<?php
				$jmlMhs = count($data);
				$arrNilai = array_column($data, 'nilai');
				$totalNilai = array_sum($arrNilai);
				$maxNilai = max($arrNilai);
				$minNilai = min($arrNilai);
				$rata2 = $totalNilai / $jmlMhs;

				$aggrt = [
					"Nilai Tertinggi" => $maxNilai,
					"Nilai Terendah" => $minNilai,
					"Rata-rata Nilai" => $rata2,
					"Jumlah Mahasiswa" => $jmlMhs,
				];

				foreach ($aggrt as $key => $value) { ?>
					<tr>
						<th colspan="4"><?= $key ?></th>
						<th colspan="3"><?= $value ?></th>
					</tr>
				<?php } ?>
			</tfoot>
		</table>
	</div>
</body>

</html>