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
.site-menu-v2,.site-menu-v2 .box-content{
	max-width:1170px;
	padding-right:5px;
	margin:0 auto;
	
}
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
			
	</div>

	<div class="publicidad-skin-tv">
	
			
			<div id='Interstitial'>
				<script>
					googletag.cmd.push(function() { googletag.display('Interstitial'); });
				</script>
			</div>
	</div>
	
</section>



		<?php

if( have_rows('item_carrousel',"option") ): ?>
<section class="sec-programas">
	<span class="title-info">Programas y novelas estelares</span>
	<div class="relative">
		<span class="nav-left-1"><img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/arrow-left_white.png"></span>
		<span class="nav-right-1"><img src="<?php echo get_stylesheet_directory_uri()?>/img/iconos/arrow-right_white.png"></span>
		<div class="list-series owl-carousel">


			<?php

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


endif;

?>
	
	

<div class="publicidad-970"></div>
<style>
	.contenedor-programacion{
		padding:0px 10px;
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
	@media (max-width:950px){
		.publicidad-programacion{
			display:none;
		}
	}
	@media (max-width:750px){
	
		.programas-horario{
			flex-direction:column;
			align-items:center;
		}
		.bloque-info-horario{
			margin-bottom:40px;
		}
		.programas-horario li{
			width:100%;
		}
		.tab-dias-programacion{
			overflow-y:scroll;
		}
		.tab-dias-programacion li{
			margin-right:10px;
		}
	}

	@media (max-width:580px){
		.bloque-info-horario{
			width:90%;
		}
		.titulo-programacion .titulo{
			font-size:20px;
		}

}
</style>
<div id="programacion" class="contenedor-programacion">
	<div class="titulo-programacion">
		<div class="box-titulo-programacion"><span class="titulo">PROGRAMACIÓN DE TV</span></div>
	</div>

	<div class="over-scroll">
		<ul class="tab-dias-programacion">
			<li data-dia="lun" data-numdia="lun">LUNES</li>
			<li data-dia="mar" data-numdia="mar">MARTES</li>
			<li data-dia="mie" data-numdia="mie">MIÉRCOLES</li>
			<li data-dia="jue" data-numdia="jue">JUEVES</li>
			<li data-dia="vie" data-numdia="vie"> VIERNES</li>
			<li data-dia="sab" data-numdia="sab">SÁBADO</li>
			<li data-dia="dom" data-numdia="dom">DOMINGO</li>
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
			
				</ul>
			</div>
		</div>
		<div class="bloque-info-horario">
			<div>
				<span  class="tipo"><img  style="vertical-align:middle" src="<?php echo get_stylesheet_directory_uri()?>/img/ico_parrilla.png"> P.M  <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon_night.png"></span>
			</div>
			<div>
				<ul id="programas-pm">
				
				</ul>
			</div>
		</div>
	</div>
	<div class="publicidad-programacion">

	<div>
						<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle2">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle2'); });
					    </script>
						</div>
						</div>
						
					</div>


					<div>
						<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
						</div>
						</div>
						
					</div>


		
	</div>
		
	</div>

</div>

</div><!-- end container -->
<?php get_footer("custom");?>
