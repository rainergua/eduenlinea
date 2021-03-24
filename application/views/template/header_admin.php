<!DOCTYPE html>
<html>
<head>
	<title>Educa Bolivia - Ministerio de Educación</title>
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
<div class="container-fluid"> <!--main-->
		<div class="container">
			<div class="row justify-content-center align-items-center"><!--header-->
				<div class="col-12 col-sm-12 col-md-6 col-ld-6">
					<a href="<?php echo base_url().'administrar';?>"><img src="<?php echo base_url().'/assets/img/logo.png';?>" class="img-fluid">
					</a>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-ld-4"></div>
				<div class="col-12 col-sm-12 col-md-2 col-ld-2">
					<img src="<?php echo base_url().'/assets/img/eblogo.png';?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	</header>
	

