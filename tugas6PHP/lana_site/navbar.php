<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="<?= baseUrl()?>">Lyl Site</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars ms-1"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav nav-pills text-uppercase ms-auto py-4 py-lg-0">
				<li class="nav-item"><a class="nav-link <?= (!$_REQUEST["page"]) ? "active" : "" ?>" href="<?= baseUrl() ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link <?= ($_REQUEST["page"] == "about") ? "active" : "" ?>" href="<?= baseUrl("?page=about")?>">About</a></li>
				<li class="nav-item"><a class="nav-link <?= ($_REQUEST["page"] == "study") ? "active" : "" ?>" href="<?= baseUrl("?page=study")?>">Study</a></li>
				<li class="nav-item"><a class="nav-link <?= ($_REQUEST["page"] == "task") ? "active" : "" ?>" href="<?= baseUrl("?page=task")?>">Task</a></li>
				<li class="nav-item"><a class="nav-link <?= ($_REQUEST["page"] == "portofolio") ? "active" : "" ?>" href="<?= baseUrl("?page=portofolio")?>">Portofolio</a></li>
			</ul>
		</div>
	</div>
</nav>