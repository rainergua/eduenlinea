<!DOCTYPE html>
<html>
<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162797262-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-162797262-1');
		</script>
	<title>Portal EduVirt - Ministerio de Educación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
	<?php 
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/bootstrap.min.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/estilos.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css">
</head>
<body>
<header>
	<div class="container-fluid bg-img">
	<div class="container-fluid bg-gray-1000"> <!--main-->
	<div class="container">
        <div class="row justify-content-center align-items-center"><!--header-->
            <div class="col-12 col-sm-12 col-md-2 col-ld-2">
            	<a href="<?php echo base_url();?>" class="brand-logo">Logo</a>
            </div>
			<div class="col-12 col-sm-12 col-md-10 col-ld-10 text-center">
				<h3>MINISTERIO DE EDUCACIÓN</h3>
            	<h3	class="subtitulo">VICEMINISTERIO DE CIENCIA Y TECNOLOGÍA</h3>
            </div>
		</div>
	</div>
	</div>
	</div>
	</header>
	<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg navbar-light bg-lila-1000">
		<a class="navbar-brand" href="<?php echo base_url();?>administrar"><i class="fas fa-home"  style="font-size:24px"></i> Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Educación Regular
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo base_url();?>inicial">Inicial</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url();?>primaria">Primaria</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url();?>secundaria">Secundaria</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>">Educación Alternativa y Especial</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>">Educación Superior</a>
				</li>
			</ul>
		</div>
</nav>

