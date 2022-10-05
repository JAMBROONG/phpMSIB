<!DOCTYPE html>
<html lang="en">
<?php
require_once "config.php";
?>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Agency - Start Bootstrap Theme</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->

	<link href="<?= baseUrl("assets/vendor/aos/aos.css") ?>" rel="stylesheet">
	<link href="<?= baseUrl("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="<?= baseUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
	<link href="<?= baseUrl("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
	<link href="<?= baseUrl("assets/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
	<link href="<?= baseUrl("assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

	<link href="<?= baseUrl("css/styles.css") ?>" rel="stylesheet" />
</head>

<body id="page-top">

	<?php
	require_once "navbar.php";

	$page = $_REQUEST["page"];
	if (!empty($page)) {
		require_once $page . ".php";
	} else {
		require_once "home.php";
	}

	require_once "footer.php";
	?>
	
	<!-- Bootstrap core JS-->
	<script src="<?= baseUrl("assets/vendor/purecounter/purecounter_vanilla.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/aos/aos.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/typed.js/typed.min.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/waypoints/noframework.waypoints.js") ?>"></script>
	<script src="<?= baseUrl("assets/vendor/php-email-form/validate.js") ?>"></script>
	<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
	<!-- Core theme JS-->
	<script src="<?= baseUrl("js/scripts.js") ?>"></script>
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	<!-- * *                               SB Forms JS                               * *-->
	<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>

</html>