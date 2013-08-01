<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>aDomicilio.gt - Encuentra todo lo que necesitas a domicilio</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>
<body>
<header id="main-header">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="top-ad">
					<img src="<?php bloginfo('template_url'); ?>/images/728x90.png" alt="728x90 Ad">
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3">
				<a href="<?php bloginfo('url') ?>"><h1 id="logo">Adomicilio.gt</h1></a>
			</div>
			<div class="span5">
				<nav id="main-nav">
					<?php wp_nav_menu(array('theme_location' => 'main_menu')); ?> 
				</nav>
			</div>
			<div class="span2">
				<ul id="social">
					<li class="tw"><a href="#">Twitter</a><span class="tooltip">Twitter</span></li>
					<li class="fb"><a href="#">Facebook</a><span class="tooltip">Facebook</span></li>
				</ul>
			</div>
			<div class="span2">
				<div class="username">
					<p>Hola, Username!</p>
				</div>
			</div>
		</div>
	</div>
</header>