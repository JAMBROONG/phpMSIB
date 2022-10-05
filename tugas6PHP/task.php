<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
	<div class="container">
		<div class="text-center" data-aos="fade-down">
			<h2 class="section-heading text-uppercase">My Task</h2>
			<h3 class="section-subheading text-muted">All the tasks I have done</h3>
		</div>
		<div class="row">

			<?php
			$data = [
				[
					"materi" => "HTML",
					"img" => "assets/img/portfolio/html.jpg"
				],
				[
					"materi" => "CSS",
					"img" => "assets/img/portfolio/css.webp"
				],
				[
					"materi" => "Javascript",
					"img" => "assets/img/portfolio/js.jpg"
				],
				[
					"materi" => "UI/UX Design",
					"img" => "assets/img/portfolio/figma.jpg"
				],
				[
					"materi" => "PHP",
					"img" => "assets/img/portfolio/php.jpg"
				],
				[
					"materi" => "VCS GitHub",
					"img" => "assets/img/portfolio/github.webp"
				],
			];

			foreach ($data as $key) { ?>
				<div class="col-lg-4 col-sm-6 mb-4" data-aos="fade-up">
					<div class="portfolio-item">
						<a class="portfolio-link taskCard" data-name="<?= $key['materi'] ?>">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content"><i class="fas fa-search fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= $key['img'] ?>" />
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading"><?= $key['materi'] ?></div>
							</div>
						</a>
					</div>
				</div>
			<?php	} ?>
		</div>
	</div>

	<!-- ============== Modal ================ -->

	<div class="portfolio-modal modal fade" id="taskModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal" style="font-size: 30px;"><i class="fas fa-times"></i></div>
				<div class="modal-body">
					<div class="head"></div>
					<ul class="row justify-content-center tampil">

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>