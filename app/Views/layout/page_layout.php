<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href= "<?= base_url("css/swiper-bundle.min.css");?>">
        <!--=============== CSS ===============-->
		<link rel="stylesheet" href="<?= base_url("css/islands.css");?>">
		<link rel="stylesheet" href="<?= base_url("css/styles.css");?>">

		<!--=============== WEBSITE NAME ===============-->
        <title>Open Trip</title>
    </head>

<body>
    
    <?= $this->include('layout/header') ?>

	<main class="main">
    <?= $this->include('layout/section_home') ?>

	</main>

    <?= $this->renderSection('content') ?>
    <?= $this->include('layout/footer') ?>

	<a href="#" class="scrollup" id="scroll-up">
		<i class="ri-arrow-up-line scrollup__icon"></i>
	</a>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('js/gsap.min.js') ?>"></script>
	<script src="<?= base_url('js/scrollreveal.min.js') ?>"></script>
	<script src="<?= base_url('js/swiper-bundle.min.js') ?>"></script>
	<script src="<?= base_url('js/main.js') ?>"></script>
	<script src="<?= base_url('js/islands.js') ?>"></script>
</body>

</html>