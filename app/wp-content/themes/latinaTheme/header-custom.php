 <!DOCTYPE html>
<html lang="es_PE">
<head>
	<!--<title>Latina 2019</title>
	<meta charset="utf-8">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head();?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/main.css?v<?php echo rand(1, 1670000);?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/responsive.css?<?php echo rand(1, 10000);?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css">
	 
	<?php echo get_field("codigo_head","option");?>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8DP893"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="lyt-buscador">
	<div class="container">
		<div class="buscador">
		
		<form method="get"  action="<?php echo get_home_url()?>">
		
		<input type="text" class="inp-buscador" name="s" id="s" placeholder="Palabra a buscar">
		<button class="btn-bar-search"><img src="<?php echo get_template_directory_uri()?>/img/iconos/search.png"></button>
		</form>
	
	</div>		
	</div>
</div>
<div>	
<header class="header-site lyt-header">
	<div class="color-head"></div>
	<div class="container">
		<div class="title-site">
			<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png?V354"></a>
		</div>
		<nav class="nav-site"> 
			<ul>
				<li id="menu-site"><img data-estado="<?php echo get_template_directory_uri()?>/img/menu_activo.png" src="<?php echo get_template_directory_uri()?>/img/menu_pasivo.png"></li>
				<?php listado_menu();?>
			</ul>
		</nav>
			<div class="opciones-head">
			
				<div class="item-op-head op-tv">
					
					<a id="click-tv-en-vivo-web" href="<?php get_home_url()?>/tvenvivo">
				<img  src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png">
					<span>En vivo</span></a>
				</div>
				<div class="item-op-head op-search">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/search.png" id="btn-buscar">
					
				</div>

			</div>

			<div class="opciones-head-movil">
				<a id="click-tv-en-vivo-movil" href="<?php echo get_home_url()?>/tvenvivo"><div><img  src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png?V3"> <span>TV en vivo</span></div></a>
				<div><img id="js-movil-menu"  style="width: 22px;" src="<?php echo get_template_directory_uri()?>/img/menu_ico_movil.png?V3"></div>
			</div>
		
	</div>
	<div class="fill-head"></div>
</header>
	
	<div class="over-mega-menu ">
		<div class="menu-fixed-desktop">
			<div class="elements-left">
				<div class="box-logo-fixed">
					<a href="<?php echo get_home_url();?>">
						<img  class="logo-bar-fixed" src="<?php echo get_template_directory_uri()?>/img/latina_logo2.png?V3"></a>
				</div>
				<div>
				<ul>
					<li id="menu-site"><img data-estado="<?php echo get_template_directory_uri()?>/img/menu_activo.png" src="<?php echo get_template_directory_uri()?>/img/menu_pasivo.png"> Secciones</li>
				</ul>
				</div>
			</div>
			<div class="elements-right">
				<div>
				<a href="<?php get_home_url()?>/tvenvivo">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png">
					</a>
				</div>
				
			</div>
		</div>
		<div class="menu">
			
		</div>
	</div>
</div>
<div class="box-skin">
	<div class="espacios-bar">
		<div class="bar-left">
			<div class="banner_large banner_pc" id="Lateral_Left">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Left'); });
			    </script>
			</div>


		</div>
		<div class="bar-right">
			<div class="banner_large banner_pc" id="Lateral_Right">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Right'); });
			    </script>
			</div>
		</div>
	</div> 
</div>

<div id="menu-lateral-movil" class="menu-lateral">
	
</div>

<style type="text/css">
	
</style>