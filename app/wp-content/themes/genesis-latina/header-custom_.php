<!DOCTYPE html>
<html lang="es_PE">
<head>
	<!--<title>Latina 2019</title>
	<meta charset="utf-8">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head();?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/main.css?v<?php echo rand(1, 1670000);?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css?<?php echo rand(1, 10000);?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/owl.carousel.min.css">
	 
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/js/main.js?v<?php echo rand(1, 105500);?>"></script>

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

<style>
li.bold{
font-weight:bold;

}
.banner-demo img , .publicidad-970 img{
	max-width: 970px;
	width: 100%;
}

.cat-90{
	    color: rgba(112,0,255,1);
}

.item-news span.cat-90:before {
    content: "";
    display: inline-block;
    width: 10px;
    height: 10px;
    margin-right: 5px;
    border: 5px solid transparent;
    border-right: 5px solid rgba(112,0,255,1);
    box-sizing: border-box;
    border-bottom: 5px solid rgba(112,0,255,1);
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
}
.caja-buscador-v2{

}
.btn-buscar-movil{
	width: 20px;
    margin-right: 15px;
    margin-top: 5px;
}
.over-mega-menu .col-1:last-child{
	display:none;
}
</style>
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
		<button class="btn-bar-search"><img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/search_icon.png"></button>
		</form>
	
	</div>		
	</div>
</div>
<div>	

<div class="marco-header-movil-v2">
	<div class="header-movil-v2">
		<div class="logo-box">
			<div>
				<a href="<?php echo get_home_url();?>"><img class="logo-movil-bar" src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/logo_latina_menu.png" alt=""></a>
			</div>
			
				<div id="js-movil-menu" class="ico-menu-v2">
					<img src="https://wordpress-150511-986519.cloudwaysapps.com//wp-content/themes/genesis-latina/img/menu_ico_white.png" ;?="">
					<span>MENU</span>
				</div>
			
		</div>
		
		<div>
			<img class="btn-buscar-movil" id="btn-buscar" src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/search_icon.png" alt="">

			<a href="https://wordpress-150511-986519.cloudwaysapps.com/tvenvivo"><img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/tv_icon_white.png" alt=""></a>
			
		</div>
		
	</div>
</div>


<!-- fixed-->
<div class="box-fixed-top2">

	<div class="bar-top-v2 fixed-top-2">
		<div class="menu-top-v2">
			<div class="logo-fixed-bar">
			<a href="<?php echo get_home_url();?>"><img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/logo_latina_menu.png" alt=""></a>
			</div>
			<div  class="ico-menu-v2">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/menu_ico_white.png";?>
				<span>MENU</span>
			</div>
			<ul class="menu-listado">
			<li><a href="<?php echo get_home_url();?>/noticias">Noticias</a></li>
				<li><a href="<?php echo get_home_url();?>/entretenimiento">Entretenimiento</a></li>
				<li><a href="<?php echo get_home_url();?>/deportes">Deportes</a></li>
				<li><a href="<?php echo get_home_url();?>/novelas">Novelas</a></li>
				<li><a href="<?php echo get_home_url();?>/tendencias">Tendencias</a></li>
				<li><a href="<?php echo get_home_url();?>/latina-play">Play</a></li>
				<li><a href="<?php echo get_home_url();?>/latina-digital">Digital</a></li>
				<li class="bold"><a href="<?php echo get_home_url();?>/corporativo/">#YoMeComprometo</a></li>
			
			</ul>
		</div>
		<div class="caja-buscador-v2"> 
		
			<!--<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/search_icon.png" alt="">-->
			<a href="<?php echo get_home_url();?>/tvenvivo"><img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/tv_icon_white.png" alt=""></a>
		</div>
	</div>
</div>

<!-- endfixed-->


	
<div class="header-v2">
<div class="fondo-bar-top-v2">
	<div class="bar-top-v2">
		<div class="menu-top-v2">
			<div class="ico-menu-v2">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/menu_ico_dark.png";?>
				<span>MENU</span>
			</div>
			<ul class="menu-listado">
			<li><a href="<?php echo get_home_url();?>/noticias">Noticias</a></li>
				<li><a href="<?php echo get_home_url();?>/entretenimiento">Entretenimiento</a></li>
				<li><a href="<?php echo get_home_url();?>/deportes">Deportes</a></li>
				<li><a href="<?php echo get_home_url();?>/novelas">Novelas</a></li>
				<li><a href="<?php echo get_home_url();?>/tendencias">Tendencias</a></li>
				<li><a href="<?php echo get_home_url();?>/latina-play">Play</a></li>
				<li><a href="<?php echo get_home_url();?>/latina-digital">Digital</a></li>
				<li class="bold"><a href="<?php echo get_home_url();?>/corporativo/">#YoMeComprometo</a></li>
			</ul>
		</div>
		<!--<div class="caja-buscador-v2" id="btn-buscar" style="display:none" onclick="ver_buscador()">
			<span>Búscador</span>
			<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/search_icon.png" alt="">
		</div>-->
	</div>
</div>
<div class="fondo-caja-marca">
	<div class="caja-marca">

		<div class="logo-lyt">
		<a href="<?php echo get_home_url();?>">
		<img width="30px" src="<?php echo get_stylesheet_directory_uri()?>/img/logo_latina_menu.png" alt="">
		</a>
		<a href="<?php echo get_home_url();?>" style="margin-left:7px;">
			<img style="position:relative;top:6px;" src="<?php echo get_stylesheet_directory_uri()?>/img/text_Latina_color.png" alt="">
		</a>

		</div>

		<!--<a href="<?php echo get_home_url();?>/tvenvivo">
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/tvenvivo_button.png" alt="">
		</a>-->
		<div class="box-programacion">
			<div class="item-p nuestra-programacion-item">
				<a href="<?php echo get_home_url();?>/tvenvivo#programacion"><img src="<?php echo get_stylesheet_directory_uri()?>/img/icon_parrilla.png" alt=""></a>
				<span><a href="<?php echo get_home_url();?>/tvenvivo#programacion">	NUESTRA<br> PROGRAMACIÓN</a></span>
			</div> 
			<div class="item-p ahora-envivo-item">
				<a href="<?php echo get_home_url();?>/tvenvivo">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/tv_icon_color_big.png" alt="">
				</a>
				<div>
					<span class="texto1"><a href="<?php echo get_home_url();?>/tvenvivo">AHORA EN VIVO:</a></span>
					<span  class="texto2"><a href="<?php echo get_home_url();?>/tvenvivo"></a></span>
				</div>
			</div>
			<div class="item-p programa-envivo">
				<a href="<?php echo get_home_url();?>/tvenvivo"><img id="thumb-tvenvivo" src="" width="100" alt=""></a>
			</div>
		</div>
	</div>
</div><!-- end fondo caja-marca-->


<div class="over-mega-menu ">
	
		<div class="menu">
			
		</div>
	</div>








<?php if(is_front_page()  ):?>
	<div class="caja-tag">
		<ul>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Vizcarra</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Richard Cisneros</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Cuarentena</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Vacancia</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Congreso</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Fútbol</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Paolo guerrero</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Farfán</a></li>
		<li><a href="<?php echo get_home_url();?>/noticias-sobre/destacada-minuto/">Racismo</a></li>
		
	 
	 
		</ul>
	</div>
<?php endif;?>
</div>
<?php if(is_front_page() ):?>

<div class="banner-demo b-10" >
		<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/banner1_970x90.jpg" alt="">
	</div>
	<?php endif;?>
<div class="contenedor-v2">
<?php if(is_front_page()):?>
<div class="ultimo-minuto-caja"> 
				<span class="titulo">#ESNOTICIAAHORA</span>
				<div class="detalle">
					
					<p class="texto">
					Lambayeque: Reportan primer caso sospechoso de reinfección de la COVID-19
						</p>
					<span class="cerrar-ultimo-minuto">X</span>
				</div>
</div>
 
<?php endif;?>
</div>

<header class="header-site lyt-header" style="display:none">
	<div class="color-head"></div>
	<div class="container">
		<div class="title-site">
			<div class="marco-title-site">	
			<a href="<?php echo get_home_url();?>">
			
			<img src="<?php echo get_stylesheet_directory_uri()?>/img/logo_latina_pe.png?V1234" alt="Latina Televisión" title="Latina Televisión">
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
				<li id="menu-site"><img data-estado="<?php echo get_stylesheet_directory_uri()?>/img/menu_activo.png" src="<?php echo get_stylesheet_directory_uri()?>/img/menu_pasivo.png"></li>
				<?php listado_menu();?>
			</ul>
		</nav>
			<div class="opciones-head">
			
				<div class="item-op-head op-tv">
					
					<a id="click-tv-en-vivo-web" href="<?php echo get_home_url()?>/tvenvivo/">
				<img  src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/tvenvivo.png" alt="Ver Latina tv en vivo" title="Ver Latina tv en vivo">
					<span>Tv en vivo</span></a>
				</div>
				<div class="item-op-head op-search">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/search.png" id="btn-buscar">
					
				</div>

			</div>

			<div class="opciones-head-movil">
				<a id="click-tv-en-vivo-movil" href="<?php echo get_home_url()?>/tvenvivo/"><div><img  src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/tvenvivo.png?V3" alt="Ver Latina tv en vivo" title="Ver Latina tv en vivo"> <span>TV en vivo</span></div></a>
				<div><img id="js-movil-menu"  style="width: 22px;" src="<?php echo get_stylesheet_directory_uri()?>/img/menu_ico_movil.png?V3"></div>
			</div>
		
	</div>
	<div class="fill-head"></div>
</header>

<style>
.contenedor-bread{
	max-width:1020px;
	margin:0 auto;
	padding:15px 10px;
}
.bar-bread{
/*	background-color:#513CCA;*/
}
.categoria-bread{
	color:white;

}
.categoria-bread.bold,
.subcategoria-bread.bold{
	font-weight:bold;
}
.subcategoria-bread{
	color:white;

	margin-left:15px;
}
</style>

	<?php if(is_category()):?>
		<?php
		$fondo="#513CCA";
		$category = get_queried_object();
		$cat_niv_1=$category->name;
		$slug_swtich=$category->slug;
		if(!$category->parent==0){
			$cat_padre=get_category($category->parent);
			$slug_swtich=$cat_padre->slug;
			//$cat_padre=get_the_category_by_ID($category->parent);
			
		}?>

		<?php
		
		switch ($slug_swtich) {
			case "noticias":
				$fondo="#513CCA";
				break;
			case "entretenimiento":
				$fondo="#ff0095";
				break;
			case "deportes":
				$fondo="#dd4911";
				break;
			case "novelas":
				$fondo="#ff0095";
				break;
			
		}
?>
		
		<div class="bar-bread" style="background-color:<?php echo $fondo;?>">
<div class="contenedor-bread">

		
	
	
	
			<?php 	if(!$category->parent==0):?>
				<span class="categoria-bread"><?php echo $cat_padre->name;?></span>
				<span class="subcategoria-bread bold"><?php echo $cat_niv_1;?></span>

			<?php else: ?>
				<span class="categoria-bread bold"><?php echo $cat_niv_1;?></span>
				
			<?php endif;?>

		
		</div>

</div>

	<?php endif;?>


			<div class="fondo-bar-category">
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
			 </div>

	<!--<div class="over-mega-menu ">
		<div class="menu-fixed-desktop">
			<div class="elements-left">
				<div class="box-logo-fixed">
					<a href="<?php echo get_home_url();?>">
						<img  class="logo-bar-fixed" src="<?php echo get_stylesheet_directory_uri()?>/img/logo_latina_pe.png?V1231233" alt="Latina Televisión" title="Latina Televisión"></a>
				</div>
				<div>
				<ul>
					<li id="menu-site"><img data-estado="<?php echo get_stylesheet_directory_uri()?>/img/menu_activo.png" src="<?php echo get_stylesheet_directory_uri()?>/img/menu_pasivo.png"> Secciones</li>
				</ul>
				</div>
			</div>
			<div class="elements-right">
				<div>
				<a href="<?php get_home_url()?>/tvenvivo/">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/tvenvivo.png">
					</a>
				</div>
				
			</div>

			<div class="bar-avance"></div>

		</div>
		<div class="menu">
			
		</div>
	</div>-->
</div>
<div class="box-skin"  style="display:none">
	<div class="espacios-bar">
		<div class="bar-left">
		<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/BannerSkin_160x600.jpg" alt="">
			<!--<div class="banner_large banner_pc" id="Lateral_Left">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Left'); });
			    </script>
			</div>-->


		</div>
		<div class="bar-right">
		<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/BannerSkin_160x600.jpg" alt="">
			<!--<div class="banner_large banner_pc" id="Lateral_Right">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Right'); });
			    </script>
			</div>-->
		</div>
	</div> 
</div>

<div id="menu-lateral-movil" class="menu-lateral">
	
</div>

