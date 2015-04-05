<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= App\Helpers\Vista::loadTitle($this->titulo) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
	<link href="<?= $roots['css'] ?>vendor/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $roots['css'] ?>vendor/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?= $roots['css'] ?>vendor/font-awesome/font-awesome.css" rel="stylesheet">
	<link href="<?= $roots['css'] ?>front/estilos_comercio.css" rel="stylesheet">
	<!-- <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Chau+Philomene+One' rel='stylesheet'> -->
	<?= App\Helpers\Vista::loadCss( $styles ) ?>


	<script src="<?= $roots['js'] ?>vendor/jquery-1.8.2.min.js"></script>
	<script src="<?= $roots['js'] ?>vendor/bootstrap.min.js"></script>
	<script src="<?= $roots['js'] ?>front/saltashop.js"></script>
	<?= App\Helpers\Vista::loadJs( $scripts ) ?>
</head>
<body>
	
	<div class="header color-principal">
		<div class="container">
			<div class="row-fluid">

				<div class="logo">
					<a href="<?= BASE_URL; ?>"><h1>SaltaShop</h1></a>
					<a href="<?= BASE_URL; ?>"><span>Comercio electronico</span></a>
				</div> <!-- /logo -->

				<div class="top-menu">
				
					<ul class="menu-top">
						<?php if ( isset($_SESSION['usuario']) && $_SESSION['usuario']['autenticado'] ): ?>
							<?php if ( $_SESSION['usuario']['rol'] === 'usuario'): ?>
								<li><a href="<?= BASE_URL.'entrar/salir'; ?>">Salir</a></li>							
							<?php else: ?>
								<li><a href="<?= BASE_URL.'entrar'; ?>">Entrar</a></li>								
							<?php endif ?>							
						<?php else: ?>
							<li><a href="<?= BASE_URL.'entrar'; ?>">Entrar</a></li>	
						<?php endif ?>					
				
						<li><a href="<?= BASE_URL.'registro'; ?>">Registrate</a></li>
					</ul> 
					<!-- /menu-top -->
				
					<div class="searchbar">
						<form action="<?= BASE_URL; ?>" name="formBuscar" class="formBuscar">
							<div class="bus">
								<input type="text" name="inputSearch" id="inputSearch">
								<button value="">
									<i class="icon-search"></i>	
								</button>								
							</div>
						</form>
					</div> 
					<!-- /serchbar -->				
				</div> 
				<!-- /top menu -->

				<div class="contacto">
					<div class="num-tel">
						<span class="llame">Llame:</span>
						<span class="tel">0387-154-589687</span>
					</div>
					<div class="red-social-header">
						<span class="siga">Seguinos:</span>
						<i class="icon-facebook"></i>
						<a href="https://twitter.com/intent/user?screen_name=salta_shop"><i class="icon-twitter"></i></a>
						<i class="icon-google-plus"></i>
					</div>
				</div>
				<!-- /contacto -->
				
				<div class="menu-env color-secundario navbar">
					<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<div class="carrito-env pull-left">
						<ul class="carrito-boton ">
							<li class="dropdown">
								<a href="<?= BASE_URL.'carrito'; ?>">
									<i class="icon-shopping-cart"></i>
									<span id="menu-cantidad">
										<?= App\Helpers\Vista::get_cantidad() ?>
									</span> - 
									<span id="menu-total">
										<?= App\Helpers\Utils::to_pesos( App\Helpers\Vista::get_total() ) ?>
									</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- /carrito nav -->

					<ul class="menu nav-collapse collapse">
						<li><a href="<?= BASE_URL; ?>">Inicio</a></li>
						<li><a href="<?= BASE_URL.'carrito'; ?>">Mi carrito</a></li>
						<li><a href="<?= BASE_URL.'micuenta'; ?>">Mi cuenta</a></li>
						<li><a href="<?= BASE_URL.'contacto'; ?>">Informacion</a></li>
						<li><a href="<?= BASE_URL.'contacto'; ?>">Contactanos</a></li>
					</ul>					
				</div>
				<!-- /Menu -->
			</div>
		</div>
	</div>
	<!-- /header -->
