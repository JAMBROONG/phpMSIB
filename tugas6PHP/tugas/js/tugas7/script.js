$(document).ready(function () {
	const data = [
		{
			kategori: "Hewan Unggas",
			member: ["Ayam", "Bebek", "Burung", "Gagak"]
		},
		{
			kategori: "Hewan Ternak",
			member: ["Kambing", "Sapi", "Kuda", "Kerbau"]
		},
		{
			kategori: "Hewan Buas",
			member: ["Singa", "Serigala", "Ular", "Buaya"]
		}
	];

	for (let i = 0; i < data.length; i++) {
		$('#accordion').append(`
			<div class="accordion-item">
				<h2 class="accordion-header" id="accordionHeader${i}">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#collapse${i}" aria-expanded="false" aria-controls="collapse${i}">
						${data[i].kategori}
					</button>
				</h2>
				<div id="collapse${i}" class="accordion-collapse collapse" aria-labelledby="one"
				data-bs-parent="#accordion">
					<div class="accordion-body">
						<div class="row mt-2" id="member${i}">
						</div>
					</div>
				</div>
			</div>
    `);
		for (let j = 0; j < data[i].member.length; j++) {
			$(`#member${i}`).append(`
				<div class="col">
					<div class="card text-center" data-nama="${data[i].member[j].toLocaleLowerCase()}">
						<div class="card-body">
							<h3>${data[i].member[j]}</h3>
						</div>
					</div>
				</div>
			`);
		}
	}

	const modal = new bootstrap.Modal('#modalHewan');
	$(".card").each(function () {
		$(this).click(function () {
			const hewan = $(this).data('nama');
			$('#nameChar').html(hewan.toUpperCase());
			$('#audio').append(`<audio autoplay id="sound" src="assets/audio/${hewan}.mp3"></audio>`);
			$('#gambar').attr({ src: `assets/img/${hewan}.jpg` });
			modal.show()
		});
		$('#modalHewan').on('hidden.bs.modal', function () {
			$('#sound').remove();
		});
	});
});