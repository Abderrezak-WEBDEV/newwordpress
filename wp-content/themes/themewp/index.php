<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<!-- Required meta tags -->
<meta charset="<?php bloginfo("charset"); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSS -->
<link rel="stylesheet" href="<?= esc_url(get_template_directory_uri()) ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= esc_url(get_template_directory_uri()) ?>/style.css">
<title>Mon Blog</title>
<?php wp_head(); ?>
</head>
<body>
<header class="container">
<div class="row">
<div class="col-12 border">LOGO</div>
</div>
</header>
<main>
<div class="container">
<div class="row">
<nav class="col-3 border">NAV</nav>
<div class="col-6 border">CONTENU</div>
<div class="col-3 border">SIDEBAR</div>
</div>
</div>
</main>
<footer class="container">
<div class="row">
<div class="col-4 border">FOOTER 1</div>
<div class="col-4 border">FOOTER 2</div>
<div class="col-4 border">FOOTER 3</div>
</div>
</footer>
<!-- Javascript-->
<script src="<?= esc_url(get_template_directory_uri()) ?>/assets/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>

