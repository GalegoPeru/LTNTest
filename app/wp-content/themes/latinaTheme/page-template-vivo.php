<?php
/**
* Template Name: Page Vivo
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/?>
<?php get_header("custom");?>

<div class="container container-tvenvivo">
	<div class="publicidad-970"></div>
	<div class="breadcumb">
		<ul>
			<li><a href="">Inicio</a></li>
			<li><a href="">Tv en vivo</a></li>
		</ul>
	</div>
	<div class="description-category">
		<h1 class="title-category">TV EN VIVO</h1>
		<div class="detail">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
		endwhile; else: ?>
  
<?php endif; ?>
		
		</div>
	</div>
	

<section class="content-player">
<div class="publicidad-skin-tv">
	<a href=""><img src="<?php echo get_template_directory_uri()?>/img/skin_yosoy.jpg"></a>
</div>
	<div class="player-box">
			<iframe src='//mdstrm.com/live-stream/5ce7109c7398b977dc0744cd?autoplay=false' width='100%' height='100%' allow='autoplay; fullscreen' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
			<!--<div id="widget_ajax"></div>-->
			<!--<iframe src='https//mdstrm.com/live-stream/5ce7109c7398b977dc0744cd?autoplay=false&player=5d447d657da22346fafe71e8' width='100%' height='100%' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>-->
	</div>
</section>



		<?php

// check if the repeater field has rows of data
if( have_rows('item_carrousel',"option") ): ?>
<section class="sec-programas">
	<span class="title-info">Programas y novelas estelares</span>
	<div class="relative">
		<span class="nav-left-1"><img src="<?php echo get_template_directory_uri()?>/img/iconos/arrow-left_white.png"></span>
		<span class="nav-right-1"><img src="<?php echo get_template_directory_uri()?>/img/iconos/arrow-right_white.png"></span>
	<div class="list-series owl-carousel">


<?php
 	// loop through the rows of data
    while ( have_rows('item_carrousel',"option") ) : the_row(); ?>
<div>

		<article class="item-programa">
			<a href="<?php echo get_sub_field('link_destino'); ?>">
			<img class="pic-serie" src="<?php the_sub_field('foto'); ?>">
			<div class="over-programa-info">
			<div class="detail-info">
			<span class="title"><?php the_sub_field('titulo'); ?></span>
			
			<p><?php the_sub_field('detalle'); ?></p>
			</div>
			</div>
			</a>
		</article>
	</div>
      
<?php 
    endwhile; ?>
</div>
	</div>
</section>


<?php
else :

    // no rows found

endif;

?>
	
	

<div class="publicidad-970"></div>

</div><!-- end container -->
<?php get_footer("custom");?>
<style>
	.player-box
	{
		position: relative;
	}
	#widget_ajax{
		position: absolute;
		width: 100%;
		height: 100%;
		background-color: red;
	}
</style>

<script>
	setTimeout(consultar,3000);

	function consultar(){
		let url="https://latinademo.s3.amazonaws.com/votacionabrelosojos.json";
		fetch(url)
		.then((data)=>{
			return data.json()
		})
		.then((data)=>{
			if(data.estado==1){

				let opciones=data.opciones;
					let _opcion="";
					for(let item of opciones){
						let ruta=item.foto.split(".")[0];
						_opcion=_opcion+`<div class="item-voto" >
										<img class="foto-participante" src="http://cdn.latina.pe/abre_los_ojos/${item.foto}"  onclick="seleccionar()" alt="" data-hit="${item.id}" data-nombre="${ruta}">
									</div>`;
						}
					var contenido

			}

			console.log(data)
		})

	}
</script>