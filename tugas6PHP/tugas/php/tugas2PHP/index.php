<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 2 PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container px-5 my-5">
		<h2 class="text-center mb-5">Form Data Pegawai</h2>
		<div class="row justify-content-md-center">
			<div class="col col-lg-6">
				<div class="card">
					<div class="card-body">
						<form method="post" id="frm">
							<div class="form-floating mb-3">
								<input class="form-control" id="namaPegawai" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
								<label for="namaPegawai">Nama Pegawai</label>
								<div class="invalid-feedback" id="errnamaPegawai">Nama Pegawai wajib diisi!.</div>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" id="agama" name="agama" aria-label="Agama">
									<option value="">Pilih Agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Konghuchu">Konghuchu</option>
								</select>
								<label for="agama">Agama</label>
								<div class="invalid-feedback" id="erragama">Pilih salah satu!.</div>
							</div>
							<div class="mb-3">
								<label class="form-label d-block">Jabatan</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="required" />
									<label class="form-check-label" for="manager">Manager</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
									<label class="form-check-label" for="asisten">Asisten</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="required" />
									<label class="form-check-label" for="kabag">Kabag</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
									<label class="form-check-label" for="staff">Staff</label>
								</div>
								<div class="invalid-feedback" id="errjabatan">Pilih salah satu!.</div>
							</div>
							<div class="mb-3">
								<label class="form-label d-block">Status</label>
								<div class="form-check">
									<input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="required" />
									<label class="form-check-label" for="menikah">Menikah</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" id="belum" type="radio" name="status" value="Belum Menikah" data-sb-validations="required" />
									<label class="form-check-label" for="belum">Belum</label>
								</div>
								<div class="invalid-feedback" id="errstatus">Pilih salah satu!.</div>
							</div>
							<div class="form-floating mb-3" id="jmlAnak">
								<input class="form-control" id="jumlahAnak" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
								<label for="jumlahAnak">Jumlah Anak</label>
							</div>
							<div class="d-grid">
								<button class="btn btn-primary btn-lg" type="button" name="submit" id="btnSave">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	if (isset($_POST['namaPegawai'])) {
		$nama = $_POST['namaPegawai'];
		$agama = $_POST['agama'];
		$jabatan = $_POST['jabatan'];
		$status = $_POST['status'];
		$jumlahAnak = ($status == "Menikah") ? $_POST['jumlahAnak'] : 0;

		switch ($jabatan) {
			case 'Manager':
				$gapok = 20000000;
				break;
			case 'Asisten':
				$gapok = 15000000;
				break;
			case 'Kabag':
				$gapok = 10000000;
				break;
			case 'Staff':
				$gapok = 4000000;
				break;
			default:
				$gapok = 0;
				break;
		}

		$tunjab = 0.2 * $gapok;

		if ($status == "Menikah" && $jumlahAnak <= 2) $tunkel = (5 * $gapok) / 100;
		elseif ($status == "Menikah" && $jumlahAnak <= 5) $tunkel = (10 * $gapok) / 100;
		elseif ($status == "Menikah" && $jumlahAnak > 5) $tunkel = (15 * $gapok) / 100;
		else $tunkel = 0;

		$gator = $gapok + $tunjab + $tunkel;
		$zakat = ($agama == "Islam" && $gator >= 6000000) ? (2.5 * $gator) / 100 : 0;
		$takeHomePay = $gator - $zakat;
	?>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Data Pegawai</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row justify-content-md-center">
							<div class="col col-lg-10">
								<table>
									<tr>
										<td>Nama Pegawai</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= $nama ?></td>
									</tr>
									<tr>
										<td>Agama</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= $agama ?></td>
									</tr>
									<tr>
										<td>Jabatan</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= $jabatan ?></td>
									</tr>
									<tr>
										<td>Status</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= $status ?></td>
									</tr>
									<tr>
										<td>Jumlah Anak</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= $jumlahAnak ?></td>
									</tr>
									<tr>
										<td>Gaji Pokok</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($gapok, 2, ',', '.') ?></td>
									</tr>
									<tr>
										<td>Tunjangan Jabatan</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($tunjab, 2, ',', '.') ?></td>
									</tr>
									<tr>
										<td>Tunjangan Keluarga</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($tunkel, 2, ',', '.') ?></td>
									</tr>
									<tr>
										<td>Gaji Kotor</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($gator, 2, ',', '.') ?></td>
									</tr>
									<tr>
										<td>Zakat Profesi</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($zakat, 2, ',', '.') ?></td>
									</tr>
									<tr>
										<td>Take Home Pay</td>
										<td>&nbsp;:&nbsp;</td>
										<td><?= "Rp." . number_format($takeHomePay, 2, ',', '.') ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			const modal = new bootstrap.Modal("#exampleModal");
			modal.show();
		</script>
	<?php
	}
	?>
	<script>
		const jmlAnak = document.querySelector("#jmlAnak");
		const form = document.querySelector("#frm");
		const btnSave = document.querySelector("#btnSave");
		jmlAnak.style.display = "none";
		for (const input of form) {
			input.addEventListener("input", () => {
				if (input.name == 'status' && input.value == 'Menikah') {
					jmlAnak.style.display = "block"
				} else if (input.name == 'status' && input.value == 'Belum Menikah') {
					jmlAnak.style.display = "none"
				}
				if (input.name != "jumlahAnak") {
					const err = document.querySelector(`#err${input.name}`);
					err.style.display = "none";
				}
			});
		}
		btnSave.addEventListener("click", () => {
			let check = true;
			for (const input of form) {
				const err = document.querySelector(`#err${input.name}`);
				console.log(input.name);
				if (input.name == "jabatan") {
					let jabatan = false;
					for (const item of form.jabatan) {
						if (item.checked) jabatan = true;
					}
					if (!jabatan) {
						err.style.display = "block";
						check = false;
					}
				} else if (input.name == "status") {
					let status = false;
					for (const item of form.status) {
						if (item.checked) status = true;
					}
					if (!status) {
						err.style.display = "block";
						check = false;
					}
				} else {
					if (input.value == "" && input.name != "jumlahAnak" && input.name != "submit") {
						err.style.display = "block";
						check = false;
					}
				}
			}
			if (check) return document.createElement('form').submit.call(form);
		});
	</script>
</body>

</html>