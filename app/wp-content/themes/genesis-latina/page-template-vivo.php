<?php
/**
* Template Name: Page Vivo
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/?>
<?php get_header("custom");?>
<style>
	/*
.header-v2{
	max-width:1170px;

}
.over-mega-menu .menu{
	max-width:1170px;
}
.over-mega-menu{
	max-width:1170px;
}
	.header-v2 .caja-marca{
		width:1170px;
	}
	.fixed-top-2{
		max-width:1170px;
	}*/
.container-tvenvivo{
	max-width:1170px;
	width:100%;
}

.espacios-bar{
	max-width:1170px;
	width:100%;
}
.content-player
{
	height:700px;
}
.footer-site .container{
	max-width:1170px;
	width:100%;
 
}
.menu-fixed-desktop{
	max-width:1170px;
}
</style>
<div class="container container-tvenvivo">
	<div class="publicidad-970"></div>
	
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
	<div class="player-box">
	
			<iframe src='//mdstrm.com/live-stream/5ce7109c7398b977dc0744cd?autoplay=false' width='100%' height='100%' allow='autoplay; fullscreen' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
			<!--<div id="widget_ajax"></div>-->
			<!--<iframe src='https//mdstrm.com/live-stream/5ce7109c7398b977dc0744cd?autoplay=false&player=5d447d657da22346fafe71e8' width='100%' height='100%' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>-->
	</div>

	<div class="publicidad-skin-tv">
	<img src="<?php echo get_stylesheet_directory_uri()?>/img/skin_yosoy.jpg" style="width:100%;height:100%">
			
			<!--<div id='Interstitial'>
				<script>
					googletag.cmd.push(function() { googletag.display('Interstitial'); });
				</script>
			</div>-->
	</div>
	
</section>



		<?php

// check if the repeater field has rows of data
if( have_rows('item_carrousel',"option") ): ?>
<section class="sec-programas">
	<span class="title-info">Programas y novelas estelares</span>
	<div class="relative">
		<span class="nav-left-1"><img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/arrow-left_white.png"></span>
		<span class="nav-right-1"><img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/arrow-right_white.png"></span>
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
<style>
	.contenedor-programacion{

	}
	.titulo-programacion{
		text-align:center;
	}
	.titulo-programacion .titulo{
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		display: flex;
		align-items: flex-end;
		text-align: center;
		text-transform: uppercase;

		color: #545454;

		display:inline-flex;
		text-align:center;
		align-items:center;
	}
	.titulo-programacion .titulo:before{
		content: "";
		display: inline-block;
		border: 9px solid transparent;
		border-right: 9px solid rgba(112, 0, 255, 1);
		box-sizing: border-box;
		border-bottom: 9px solid rgba(112, 0, 255, 1);
		border-top-right-radius: 5px;
		border-bottom-left-radius: 5px;
		width: 18px;
		height: 18px; 
		margin-right: 5px;

	}
	.tab-dias-programacion{


	}
	.tab-dias-programacion {
		display:flex;
		justify-content:space-between;
		
	}
	.tab-dias-programacion li{
		padding:10px 18px;
cursor:pointer;
		font-family: Roboto;
font-style: normal;
font-weight: 300;
font-size: 16px;

/* identical to box height */

text-align: center;
text-transform: uppercase;

color: #545454;


border: 1px solid #dcdcdc;
	}

	.tab-dias-programacion li.activado{
		background-color:rgba(112, 0, 255, 1);
		color:white;
	}
	.box-titulo-programacion{
		padding:22px;
		border: 1px solid #dcdcdc;
		margin-top:20px;
		margin-bottom:20px;
	}

	.lyt-programacion
	{
		display:flex;
		margin-top:40px;
		margin-bottom:60px;
	}
	.publicidad-programacion{
		width:320px;
	}
	.programas-horario{
		flex-shrink:1;
		display:flex;
		flex-grow:1;
	}
	.programas-horario li:first-child{
		border-top:0.25px solid #dcdcdc;
	}
	.programas-horario li:last-child{
		border-bottom:0.25px solid transparent;
	}
	.programas-horario li{
		font-size: 18px;
		padding-top:20px;
		padding-bottom:20px;
		width:80%;

		color:#777777;
	
		border-bottom:0.25px solid #dcdcdc;
	}
	.programas-horario li .hora{
		color:#545454;
		margin-right:10px;
	}
	
	.bloque-info-horario{
		width:50%;

	}
	.bloque-info-horario ul li{
		display:flex;
		padding-left:15px;
	}
	.bloque-info-horario ul li.ahoraenvivo
	{
		background: #513CCA;
		color:white;
	}
	.bloque-info-horario ul li.ahoraenvivo .hora
	{
		
		color:#FFBF01;
	}
	.bloque-info-horario .tipo{
		font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 28px; 
text-transform: uppercase;

color: #545454;
display:inline-block;
margin-bottom:30px;
padding-left:25px;
	}

	.ico-vivo{
		color: #00F16F;
		font-weight: 900;
font-size: 18px;
margin-left:10px;
	}
</style>
<div class="contenedor-programacion">
	<div class="titulo-programacion">
		<div class="box-titulo-programacion"><span class="titulo">PROGRAMACIÓN DE TV</span></div>
	</div>

	<div>
		<ul class="tab-dias-programacion">
			<li data-dia="lun" data-numdia="1">LUNES</li>
			<li data-dia="mar" data-numdia="2">MARTES</li>
			<li data-dia="mie" data-numdia="3">MIÉRCOLES</li>
			<li data-dia="jue" data-numdia="4">JUEVES</li>
			<li data-dia="vie" data-numdia="5"> VIERNES</li>
			<li data-dia="sab" data-numdia="6">SÁBADO</li>
			<li data-dia="dom" data-numdia="0">DOMINGO</li>
		</ul>
	</div>

	<div class="lyt-programacion">

	<div class="programas-horario">
		<div class="bloque-info-horario">
			<div>
				<span class="tipo"><img style="vertical-align:middle" src="<?php echo get_stylesheet_directory_uri()?>/img/ico_parrilla.png"> A.M. <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon_day.png"></span>
			</div>
			<div>
				<ul id="programas-am" >
				<!--	<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li> 
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>-->
				
				</ul>
			</div>
		</div>
		<div class="bloque-info-horario">
			<div>
				<span  class="tipo"><img  style="vertical-align:middle" src="<?php echo get_stylesheet_directory_uri()?>/img/ico_parrilla.png"> P.M  <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon_night.png"></span>
			</div>
			<div>
				<ul id="programas-pm">
					<!--<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>
					<li><span class="hora">00:00</span><span>Contigo Seleccion</span></li>-->
				</ul>
			</div>
		</div>
	</div>
	<div class="publicidad-programacion">

		<div>
			<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/Banner3_326x280.jpg" alt="">
		</div>
		<div>
			<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/Banner3_326x280.jpg" alt="">
		</div>
	</div>
		
	</div>

</div>

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