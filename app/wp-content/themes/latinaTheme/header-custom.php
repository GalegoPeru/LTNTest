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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css">
	 
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/main.js?v<?php echo rand(1, 105500);?>"></script>
<?php 
if(is_single()){ ?>
<style>
	/*@media (min-width:720px){
		aside.sidebar-item-news{
			min-height:2900px;
		}
	}*/
</style>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/single_functions.js?v<?php echo rand(1, 105500);?>"></script>-->
<?php }
?>
	<?php echo get_field("codigo_head","option");?>
	<?php 
    $tipo="portada";
    $seccion="home";
?>
	<?php 
if(is_single()){
  $tipo="interior";

$categories = get_the_category();
                         $seccion = $categories[0]->slug;
}
?>

<?php if(is_category()){
    $categories = get_the_category();
                         $seccion = $categories[0]->slug;
     
    };?>





<link rel="canonical" href="<?php echo get_the_permalink();?>"/>

<?php if(is_single()):?>
	<meta name="Googlebot-News" content="noindex, nofollow">
<?php endif;?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8DP893"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</head>
<body>
<?php
if (!wp_is_mobile()) {
    // get_template_part( 'template-parts/content', "takeover" );

}
?>




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
			<div class="marco-title-site">	
			<a href="<?php echo get_home_url();?>">
			
			<img src="<?php echo get_template_directory_uri()?>/img/logo_latina_pe.png?V354" alt="Latina Televisión" title="Latina Televisión">
			</a>
			<?php if(is_front_page()){  ?>
				<h1>Latina.pe</h1>
			<?php }
			 else{ ?>
				<span>Latina.pe</span>
			 <?php }
			 ?>
		
			</div>
		</div>
		<nav class="nav-site"> 
			<ul>
				<li id="menu-site"><img data-estado="<?php echo get_template_directory_uri()?>/img/menu_activo.png" src="<?php echo get_template_directory_uri()?>/img/menu_pasivo.png"></li>
				<?php listado_menu();?>
			</ul>
		</nav>
			<div class="opciones-head">
			
				<div class="item-op-head op-tv">
					
					<a id="click-tv-en-vivo-web" href="<?php echo get_home_url()?>/tvenvivo/">
				<img  src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png" alt="Ver Latina tv en vivo" title="Ver Latina tv en vivo">
					<span>Tv en vivo</span></a>
				</div>
				<div class="item-op-head op-search">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/search.png" id="btn-buscar">
					
				</div>

			</div>

			<div class="opciones-head-movil">
				<a id="click-tv-en-vivo-movil" href="<?php echo get_home_url()?>/tvenvivo/"><div><img  src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png?V3" alt="Ver Latina tv en vivo" title="Ver Latina tv en vivo"> <span>TV en vivo</span></div></a>
				<div><img id="js-movil-menu"  style="width: 22px;" src="<?php echo get_template_directory_uri()?>/img/menu_ico_movil.png?V3"></div>
			</div>
		
	</div>
	<div class="fill-head"></div>
</header>

<div class="bar-sub-category">
	<div class="contenido-sub-menu">
		<span id="sub-menu-left" class="nav-left-submenu" style="display:none">
			<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/latinaTheme/img/iconos/arrowleftblack.png" alt="">
		</span>
		<div id="sub-menu-categoria" class="owl-carousel">
			
		</div>
		<span id="sub-menu-right" class="nav-right-submenu"  style="display:none"> 
			<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/latinaTheme/img/iconos/arrowrightblack.png" alt="">
		</span>
	</div>
</div>

	<div class="over-mega-menu ">
		<div class="menu-fixed-desktop">
			<div class="elements-left">
				<div class="box-logo-fixed">
					<a href="<?php echo get_home_url();?>">
						<img  class="logo-bar-fixed" src="<?php echo get_template_directory_uri()?>/img/logo_latina_pe.png?V3" alt="Latina Televisión" title="Latina Televisión"></a>
				</div>
				<div>
				<ul>
					<li id="menu-site"><img data-estado="<?php echo get_template_directory_uri()?>/img/menu_activo.png" src="<?php echo get_template_directory_uri()?>/img/menu_pasivo.png"> Secciones</li>
				</ul>
				</div>
			</div>
			<div class="elements-right">
				<div>
				<a href="<?php get_home_url()?>/tvenvivo/">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/tvenvivo.png">
					</a>
				</div>
				
			</div>

			<div class="bar-avance"></div>

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

