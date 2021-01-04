<!DOCTYPE html>
<html>
<head>
	<title>Nube Educativa - Ministerio de Educación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/popper.min.js'; ?>"  crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/valid/jquery.validate.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/funciones.js'; ?>"></script>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/all.min.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
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
			<div class="col-12 col-sm-12 col-md-8 col-ld-8 text-center">
				<h3>MINISTERIO DE EDUCACIÓN</h3>
            </div>
			<div class="col-12 col-sm-12 col-md-2 col-ld-2 text-center">
            	<!--a href="#" class="brand-logo-cc"></a-->
				Viceministerio de Ciencia y Tecnología
            </div>
		</div>
	</div>
	</div>
	</div>
	</header>
	<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg navbar-light bg-lila-1000">
		<a class="navbar-brand" href="<?php echo base_url();?>"><i class="fas fa-home"  style="font-size:24px"></i> Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?php echo base_url().'eduvit/regular';?>">Educación Regular</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url().'eduvit/alternativa';?>">Educación Alternativa y Especial</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url().'eduvit/superior';?>">Educación Superior</a>
				</li>
				<?php
				if($this->session->userdata('is_logued_in') != FALSE)
				{
					?>
				<li class="form-inline">
					<a class="nav-link btn btn-danger" href="<?php echo base_url().'login/logout';?>"><i class="fas fa-power-off"></i>&nbsp;&nbsp;Salir
					</a> 
				</li>
				<?php
				}
				?>
			</ul>
		</div>
</nav>

