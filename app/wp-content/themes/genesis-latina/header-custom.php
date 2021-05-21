<!DOCTYPE html>
<html lang="es_PE">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head();?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/header.css?v<?php echo rand(1, 1670000);?>">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/main.css?v<?php echo rand(1, 1670000);?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css?<?php echo rand(1, 10000);?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/menu.css?V1<?php echo(rand(10,100));?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/mainv2.css?V1<?php echo(rand(10,100));?>">


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




</head>
<body>
<?php
if (!wp_is_mobile()) {
    // get_template_part( 'template-parts/content', "takeover" );

}
?>

 <style>

 </style>





<!-- endfixed-->


<header>
		<div class="menu-desktop">
			<!--<div class="bar-top-menu">
				<div class="box-content lyt-bar-top-menu">
					<div class="lty-menu">
						<div class="box-menu-ico">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/menu_ico_dark.png" alt="">
							<span class="text-ico-menu">MENU</span>
						</div>
						<div>
							<ul id="categorias-top-menu" class="ui-listado-categorias">
							
							</ul>
						</div>
					</div>
					<div class="componente-buscar">
						<span id="ico-buscar-top"><img src="<?php echo get_stylesheet_directory_uri();?>/img/lupa.svg" alt=""></span>					
					</div>
					</div>
			</div>-->
			<!--<div class="site-menu">
				<div class="box-content lyt">
						<div class="box-logos-header">
							<h1 class="lyt">
								<a href="<?php echo get_home_url();?>"><img class="logo-l" src="<?php echo get_stylesheet_directory_uri();?>/img/logo_latina_menu.png" alt=""></a>
								<a href="<?php echo get_home_url();?>"><img class="logo-texto" src="<?php echo get_stylesheet_directory_uri();?>/img/text_latina_color.png" alt=""></a>
							</h1>

						</div>
						<div class="datos-programacion">
							<div class="ui-box-play">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/latinaplay.svg" alt="">
							
							</div>
							<div class="ui-text-programacion">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/icon_parrilla.png" alt="">
								<span class="text">Nuestra programación</span>
							</div>
							<div class="ui-text-en-vivo">
								<a href="<?php echo get_home_url();?>/tvenvivo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/tv_tipo1.gif" alt=""></a>
								<div class="texto-programa">
										<p class="texto-1"><a href="<?php echo get_home_url();?>/tvenvivo">AHORA EN VIVO:</a></p>
									<p class="texto-2" id="texto-programa-envivo"><a href="<?php echo get_home_url();?>/tvenvivo">Caso Cerrado</a></p>

								</div>
								<div class="img-programa-vivo">
									<img width="80px" src="" id="img-programa-envivo">
								</div>
							</div>
						</div>
				</div>
				<div class="box-buscar-top"> 
							<form action="" class="form-busqueda-site">
								
							<input type="text" class="inp-buscar-text" placeholder="Buscar"> 
							<input type="submit" value=Buscar class="inp-button-buscar"></form>
				</div>
			</div>-->
			<div class="site-menu-v2">
				<div class="box-content lyt">
					<div class="cp-menu ">
						<div class="logo">
							<a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/latina_pe.png" alt="Latina.pe"></a>
						</div>
						<div>
							<ul class="lista-menu-main">
								<li class="item-menu-ico  box-menu-ico">	<img src="<?php echo get_stylesheet_directory_uri();?>/img/menu_ico_dark.png" alt="">Menu</li>
								<li><a href="<?php echo get_home_url();?>/noticias/">NOTICIAS</a></li>
								<li><a href="<?php echo get_home_url();?>/programas/">PROGRAMAS</a></li>
								<li><a href="<?php echo get_home_url();?>/novelas/">NOVELAS</a></li>
								<li><a href="<?php echo get_home_url();?>/deportes/">DEPORTES</a></li>
								<li><img  id="ico-buscar-top" src="<?php echo get_stylesheet_directory_uri();?>/img/buscar_latina.png" alt="">
								</li>	
								<li><a href="<?php echo get_home_url();?>/latina-play/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/latina_play.png" alt="Latina Play"></a>
								</li>

							</ul>
						</div>
					</div>
					
					<div class="cp-tvvivo-icon">
						<a href="<?php echo get_home_url();?>/tvenvivo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/tv_envivo.png" alt=""></a>
						<a href="<?php echo get_home_url();?>/tvenvivo"><p id="texto-programa-envivo"></p></a>
						<span></span>
					</div>
				</div>
				<div class="box-buscar-top"> 
							<form method="get"  action="<?php echo get_home_url()?>" class="form-busqueda-site">
								
							<input type="text" class="inp-buscar-text" placeholder="Buscar"  name="s" id="s" > 
							<input type="hidden" name="post_type" value="post">
							<input type="submit" value=Buscar class="inp-button-buscar"></form>
				</div>
			</div>
			<div class="contenido-menu-desktop">
				<div class="contenedor-columnas" id="contendio-menu-columnas">
				


				</div>

			</div>
		</div>
		<div class="menu-fixed">
			<div class="header-type-2">
				<div class="lyt_menu">
					<div class="box-logo-menu">	
						<a href="<?php echo get_home_url();?>">
						<img class="logo-l" src="<?php echo get_stylesheet_directory_uri();?>/img/logo_latina_menu.png" alt="">
						</a>
					</div>
					<div class="lyt_menu-fixed">
								<!--<div class="box-ico-menu-fixed"><img src="<?php echo get_template_directory_uri();?>/assets/img/menu_ico_dark.png" alt="">
								<span class="text-ico-menu">MENU</span></div>-->
								<ul id="categorias-top-menu-fixed_" class="listado-items-menu" >
									<li><a href="<?php echo get_home_url();?>/noticias/">NOTICIAS</a></li>
									<li><a href="<?php echo get_home_url();?>/programas/">PROGRAMAS</a></li>
									<li><a href="<?php echo get_home_url();?>/novelas/">NOVELAS</a></li>
									<li><a href="<?php echo get_home_url();?>/deportes/">DEPORTES</a></li>
									<li><a href="<?php echo get_home_url();?>/latina-play"><img style="margin-top:-2px" src="<?php echo get_stylesheet_directory_uri();?>/img/latina_play.png" alt="Latina Play"></a>
								</ul>
					</div>
				</div>
				<div>
					<a href="<?php echo get_home_url();?>/tvenvivo">
						<img class="ico-tv-envivo2" src="<?php echo get_stylesheet_directory_uri();?>/img/tv_tipo2.gif" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="menu-movil">
			<div class="bar-menu">
				<div id="opc-menu-movil" class="opc-menu">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/menu-white.png" alt="">
				</div>
				<div class="box-logo">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-movil.png" alt=""></a>
				</div>
				
				<div class="opc-tvenvivo">
				<a href="<?php echo get_home_url();?>/tvenvivo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icon_tv_fondo.png" alt=""></a>
				</div>
				
			</div>
			<div class="bar-en-vivo">
				<div>
					<a href="<?php echo get_home_url();?>/tvenvivo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icon_parrilla.png" alt=""></a>
				</div>
				<div class="info-prog-envivo">
					<a href="<?php echo get_home_url();?>/tvenvivo"><p class="texto-1">AHORA EN VIVO:</p></a>
					<a href="<?php echo get_home_url();?>/tvenvivo"><p id="texto-programa-vivo-movil" class="texto-2"></p></a>

				</div>
				<div>
				<!--<a href="<?php echo get_home_url();?>/tvenvivo"><img  id="img-programa-vivo-movil" width="85" src="" alt=""></a>-->

				
				</div>
			</div>
			<div class="contenido-menu-movil">
				<div class="busqueda-movil">
					<form method="get"  action="<?php echo get_home_url()?>" >
					
								
								<input type="text" class="inp-buscar-text" placeholder="Buscar"  name="s" id="s" > 
								<input type="hidden" name="post_type" value="post">

						<button><img src="<?php echo get_stylesheet_directory_uri();?>/img/lupa.svg" alt="">				</button>
					</form>
				</div>
				<ul class="listado-menu">
									<li class="item-top"><span><a href="<?php echo get_home_url();?>/noticias/">NOTICIAS</a></span></li>
									<li class="item-top"><span><a href="<?php echo get_home_url();?>/programas/">PROGRAMAS</a></span></li>
									<li class="item-top"><span><a href="<?php echo get_home_url();?>/novelas/">NOVELAS</a></span></li>
									<li class="item-top"><span><a href="<?php echo get_home_url();?>/deportes/">DEPORTES</a></span></li>
									<li class="item-top"><a href="https://play.latina.pe"><img style="margin-top:-2px" src="<?php echo get_stylesheet_directory_uri();?>/img/latina_play.png" alt="Latina Play"></a>

					<!--<li class="item-top"><span>Noticias</span>
						<div>
							<ul class="sub-listado-menu">
								<li class="sub-item">90</li>
								<li class="sub-item">Sin Medias Tintas</li>
								<li class="sub-item">Reporte semanal</li>

							</ul>
						</div>
					</li>
					<li class="item-top"><span>Noticias</span>
						<div>
							<ul class="sub-listado-menu">
								<li class="sub-item">90</li>
								<li class="sub-item">Sin Medias Tintas</li>
								<li class="sub-item">Reporte semanal</li>

							</ul>
						</div>
					</li>
					<li class="item-top"><span>Noticias</span>
						<div>
							<ul class="sub-listado-menu">
								<li class="sub-item">90</li>
								<li class="sub-item">Sin Medias Tintas</li>
								<li class="sub-item">Reporte semanal</li>

							</ul>
						</div>
					</li>
					<li class="item-top"><span>Noticias</span>
						<div>
							<ul class="sub-listado-menu">
								<li class="sub-item">90</li>
								<li class="sub-item">Sin Medias Tintas</li>
								<li class="sub-item">Reporte semanal</li>

							</ul>
						</div>
					</li>
					<li class="item-top"><span>Noticias</span>
						<div>
							<ul class="sub-listado-menu">
								<li class="sub-item">90</li>
								<li class="sub-item">Sin Medias Tintas</li>
								<li class="sub-item">Reporte semanal</li>

							</ul>
						</div>
					</li>
					<li class="item-top">
					</li>-->
				</ul>
			</div>
		</div>

	</header>








<?php if(is_front_page()  ):?>
	<div class="caja-tag">
		<ul>
			<?php

		// Check rows exists.
		if( have_rows('listado_tag') ):

			// Loop through rows.
			while( have_rows('listado_tag') ) : the_row();

				// Load sub field value.
				$nombre_tag = get_sub_field('nombre_tag');
				$link_tag = get_sub_field('link_tag');
				// Do something... ?>
					<li><a href="<?php echo $link_tag;?>"><?php echo 	$nombre_tag;?></a></li>
			<?php
			// End loop.
			endwhile;

		// No value.
		else :
			// Do something...
		endif;?>

		
	 
	 
		</ul>
	</div>
<?php endif;?>
</div>
<?php if(is_front_page() ):?>

<div class="banner-demo mb-10" >
		

			<div class="banner_large banner_pc" id="Top1">
				<script>
					googletag.cmd.push(function() { googletag.display('Top1'); });
				</script>
			</div>



		<!--<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/banner1_970x90.jpg?V4" alt="">-->
	</div>
	<?php endif;?>
<div class="contenedor-v2">
<?php if(is_front_page()):?>
	<?php if(get_field("link_es_noticia_ahora")):?>
<div class="ultimo-minuto-caja"> 
				<span class="titulo">#ESNOTICIAAHORA</span>
				<div class="detalle">
					
					<p class="texto">
					<a href="<?php echo get_field("link_es_noticia_ahora");?>"><?php echo get_field("es_noticia_ahora");?></a>
						</p>
					<span class="cerrar-ultimo-minuto">X</span>
				</div>
</div>
 <?php endif;?>
<?php endif;?>
</div>

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
		
		<div class="bar-bread" style="display:none" style="background-color:<?php echo $fondo;?>">
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


			<!--<div class="fondo-bar-category">
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
			 </div>-->

	
</div>
<div class="box-skin" >
	<div class="espacios-bar">
		<div class="bar-left">
		<!--<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/BannerSkin_160x600.jpg" alt="">-->
			<div class="banner_large banner_pc" id="Lateral_Left">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Left'); });
			    </script>
			</div>


		</div>
		<div class="bar-right">
		<!--<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/BannerSkin_160x600.jpg" alt="">-->
			<div class="banner_large banner_pc" id="Lateral_Right">
			    <script>
			        googletag.cmd.push(function() { googletag.display('Lateral_Right'); });
			    </script>
			</div>
		</div>
	</div> 
</div>

