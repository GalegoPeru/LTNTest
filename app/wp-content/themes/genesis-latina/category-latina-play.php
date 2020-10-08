<?php get_header("custom");?>
<?php $categoria=data_categoria();?>

<style>
.sec-destacadas-categoy.sec-latina-play .owl-dots{
margin-top: -40px;
margin-bottom: 30px;
}	
.item-serie{
	width: 24.5%;
    position: relative;
    margin-bottom: 1%;
}
</style>
<div class="container container-home">
	<div class="publicidad-970">
		<!--<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>-->

	</div>
	<div class="breadcumb">
		<ul>
			<li><a href="<?php echo get_home_url();?>">Inicio </a></li>
			<li>
				<a href="<?php echo get_home_url();?>/<?php echo $categoria->slug; ?>">
					<?php echo single_cat_title();?></a>
			</li>
		</ul> 
	</div>
	<div class="description-category">
	
		<h1 class="title-category"><?php // echo $categoria->name;?></h1>
	
		
		<?php if(category_description()):?> 
			<div class="detail">
			<p><?php echo category_description();?></p>
			</div>
		<?php else: ?>
			
		<?php endif?>

		
		
	</div>
	
	<!--<section class="sec-destacadas-categoy sec-latina-play">
		<div class="carusel-destacadas-category">
			
			<div class="carousel-categoria owl-carousel">

<?php

//$seccion_destacada=get_destacada_seccion($categoria->slug);
// check if the repeater field has rows of data
//if( have_rows($seccion_destacada,"option") ):

 	// loop through the rows of data
  //  while ( have_rows($seccion_destacada,"option") ) : the_row();
    //	$value=get_sub_field('noticia');
        // display a sub field value
?>
			<article class="item-news item-cat-type-1">
					<img  class="pic-news" src="<?php //echo wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>" alt="">
					

					<div class="detail-news">
						<div class="over">
							<time class="date-news"><?php //echo get_the_date('j F, Y',$value->ID)?></time>
							<h2 class="title-news"><a href="<?php //echo get_permalink($value->ID);?>"><?php //echo code_short_text($value->post_title,92);?></a></h2>
							<div class="sumary-news">
							<p><a href="<?php //echo get_permalink($value->ID);?>"><?php //echo get_field("sumilla",$value->ID);?></p></a></div>-->
							<!--<span class="category-news cat-<?php //echo $categoria->slug;?>"><a href=""><?php // echo categoriaParent()->cat_name;?></a></span>-->
					<!--		
						</div>
					</div>	
				</article>


      
<?php 
    //endwhile;

//else :

    // no rows found

//endif;

?>


		</div>

		<div class="navigator">
			<ul>
				<li class="bullet"></li>
				<li class="bullet"></li>
				<li class="bullet"></li>
			</ul>
		</div>
		</div>
		
	</section>-->
<!--<div class="publicidad-970"><div class="banner_large banner_pc" id="Top2">
		    <script>
		       // googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>
		</div>
-->

<div class="lyt-tempalte-bloque-play" >
<section class="grid-series" style="display:none;">
<?php

// check if the repeater field has rows of data
if( have_rows('programa',"option") ):

 	// loop through the rows of data
    while ( have_rows('programa',"option") ) : the_row(); ?>

	<article class="item-serie">
		<img src="<?php the_sub_field('foto'); ?>">
		<a href="<?php the_sub_field('link'); ?>"><div class="over-serie">
			<span class="categoria"><?php the_sub_field('sub_titulo'); ?></span>
			<h1 class="title"><?php the_sub_field('titulo'); ?></h1>
		</div></a>
	</article>
	<?php 
    endwhile;

else :

    // no rows found

endif;

?>
	

</section>

<style>
.item-latina-play{
	width:31%;
	display:inline-block;

	position:relative;
	margin-right:1%;
	margin-left:1%;
	margin-bottom:15px;
}
.item-latina-play img{
	width:100%;
}
.nombre-latinaplay{
	position:absolute;
	bottom:0px;
	left:0px;
	width:100%;
	background-color:#513CCA;
	padding:10px;
	text-align:center;
	font-weight:bold;
	color:white;

}
.lyt-grida-item-play{

	/*display:flex;
	justify-content:flex-start;
	flex-wrap:wrap;*/
}
.play-noticias-titulo{
	color: rgba(112,0,255,1);
	font-size:23px;
	font-weight:700;
	
}
.play-noticias-titulo:before {
    content: "";
    display: inline-block;
    border: 8px solid transparent;
    border-right: 8px solid rgba(112, 0, 255, 1);
    box-sizing: border-box;
    border-bottom: 8px solid rgba(112, 0, 255, 1);
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 16px;
    height: 16px;
	margin-right: 5px;
}  

.play-entretenimiento-titulo{
	color: rgba(255, 0, 149, 1);
	font-size:23px;
	font-weight:700;
	
}
.play-entretenimiento-titulo:before {
    content: "";
    display: inline-block;
    border: 8px solid transparent;
    border-right: 8px solid rgba(255, 0, 149, 1);
    box-sizing: border-box;
    border-bottom: 8px solid rgba(255, 0, 149, 1);
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 16px;
    height: 16px;
	margin-right: 5px;
}  

.play-deportes-titulo{
	color: rgba(221,73,17,1);
	font-size:23px;
	font-weight:700;
	
}
.play-deportes-titulo:before {
    content: "";
    display: inline-block;
    border: 8px solid transparent;
    border-right: 8px solid rgba(221,73,17,1);
    box-sizing: border-box;
    border-bottom: 8px solid rgba(221,73,17,1);
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 16px;
    height: 16px;
	margin-right: 5px;
}  
.box-titulo-play{
	margin-bottom:13px;
	margin-top:10px;
	padding-left:10px;
	}
</style>
<section>
	<div class="box-titulo-play">
		<span class="play-noticias-titulo">Noticias</span>
	</div>
	<div class="lyt-grida-item-play">
		<div class="item-latina-play">
		<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-90"><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/90central_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">90 Central</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/puntofinal_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Punto Final</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/reportesemanal_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Reporte Semanal</span></a>
		</div>
		
	</div>
</section>

<section>
	<div class="box-titulo-play">
		<span class="play-entretenimiento-titulo">Entretenimiento</span>
	</div>
	<div class="lyt-grida-item-play">
		<div class="item-latina-play">
			<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-yo-soy-2018/"><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/yosoy_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Yo soy</span></a>
		</div>
		<div class="item-latina-play">
			<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-el-wasap-de-jb/"><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/elwasapdejb_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">El Wasap de JB</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/larutadelamor_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">La ruta del amor</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/taqd_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">TAQD</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/mujeresalmando_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Mujeres al mando</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/nochedepatas_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Noche de patas</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/hd_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Huella Digital</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/modoespectaculos_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Modo espectáculos</span></a>
		</div>
		
	</div>
</section>
	
<section>
	<div class="box-titulo-play">
		<span class="play-deportes-titulo">Deportes</span>
	</div>
	<div class="lyt-grida-item-play">
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/chapatustabas_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Chapa tus tabas</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/contigoseleccion_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Contigo elección</span></a>
		</div>
		<div class="item-latina-play">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/covers/latina_deportes_cover_16_9.jpg" alt="">
			<span class="nombre-latinaplay">Deportes</span></a>
		</div>
	
	</div>
</section>
	
</div><!--
<div class="description-category">
	
		<h1 class="title-category">Noticias</h1>
	
	</div>

	<div class="lyt-tempalte-bloque-play">




<section class="grid-series">

	<article class="item-serie">
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/uploads/2020/06/o_3-2.jpg">
		<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-el-wasap-de-jb/"><div class="over-serie">
			<span class="categoria">Programa completo</span>
			<h1 class="title">El wasap de JB</h1>
		</div></a>
	</article>
	
	<article class="item-serie">
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/uploads/2020/06/24.jpg">
		<a href="https://wordpress-150511-986519.cloudwaysapps.com/ver-90/"><div class="over-serie">
			<span class="categoria">Programa completo</span>
			<h1 class="title">90 </h1>
		</div></a>
	</article>
	
	<article class="item-serie">
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/uploads/2020/06/o_3-1.jpg">
		<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-los-cuatro-finalistas-baile/"><div class="over-serie">
			<span class="categoria">Programa completo</span>
			<h1 class="title">Los 4 Finalistas</h1>
		</div></a>
	</article>
	
	<article class="item-serie">
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/uploads/2020/06/o_3.jpg">
		<a href="https://wordpress-150511-986519.cloudwaysapps.com/latina-play/ver-los-reyes-del-playback/"><div class="over-serie">
			<span class="categoria">Programa completo</span>
			<h1 class="title">Los Reyes del Playback</h1>
		</div></a>
	</article>
	
	
</section>


	
</div>--><!-- end section-->










</div>


</div>
<?php get_footer("custom");?>