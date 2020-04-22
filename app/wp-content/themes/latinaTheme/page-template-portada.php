<?php
/**
* Template Name: Page Portada
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/?>
<?php get_header("custom");?>

<style>

</style>

<div class="container container-home">
	<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>

	</div>
	<div class="relative">
			<span class="nav-left-ultima">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/arrowleftblack.png">
			</span>
			<span class="nav-right-ultima">
				<img src="<?php echo get_template_directory_uri()?>/img/iconos/arrowrightblack.png">
			</span>
	<div class="breaking-news">
		<div class="info">
			<img src="<?php echo get_template_directory_uri()?>/img/iconos/watch.png">
			<span>Úlitmo minuto</span>

		</div>
		
			
			<div class="list-breaking-news owl-carousel">
				<?php $custom_query = new WP_Query(array(
					'posts_per_page'=>6,
					'tag'=>'destacada-minuto')); ?>
				<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>	
			
					

				<div><a href="<?php echo get_permalink(); ?>">
					<article class="item-news-list">
						<?php if (has_post_thumbnail() ) : ?>
	       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>

					<?php endif; ?>
						<div class="detail-news-list">
							<span class="category cat-<?php echo categoriaParent()->category_nicename ?>"><?php  echo categoriaParent()->cat_name;?></span>-<time class="date"><?php echo get_the_date('j F, Y',$value->ID)?></time>
							<span class="title"><?php echo code_short_text(get_the_title(),53);?></span>
						</div>
					</article></a>
				</div>
			
			
				<?php endwhile; ?>
				


			</div>
		</div>
	</div>
	<section class="sec-destacadas">
		<div class="bloque-big">
			
			<?php echo print_destacada_portada("destacada_1",7621)?>
			

		</div>
		<div class="bloque-big-columna">
			
			<?php echo print_destacada_portada_small("destacada_2",7621)?>
			<?php echo print_destacada_portada_small("destacada_3",7621)?>
			
		</div>
		
	</section>
<div class="publicidad-970">
	<div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>
</div>

		<div class="lyt-bloque-related" id="tu_contenido">
			<span class="title-info" style="display: none">Te puede interesar</span>
			<div class="row">
				
			</div>

		</div>



<div class="lyt-tempalte-bloque-1">
	<section class="list-news-section">
		<span class="title-info">Útlimas noticias</span>
		<?php $ind=0;?>
		
		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => 6,
			'tag__not_in'=>array(57)
		 )); ?>
		<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item-news item-type-<?php echo ($ind<2 || $ind>3)? '3':'4'; ?>">
			<?php if (has_post_thumbnail() ) : ?>
				<a href="<?php echo get_permalink(); ?>">
       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>
				</a>
				<?php endif; ?>

			<div class="detail-news">
				<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
				<a href="<?php echo get_permalink(); ?>"><span class="title-news"><?php echo code_short_text(get_the_title(),75);?>
				</span></a>
				
				<span class="category-news cat-<?php echo categoriaParent()->category_nicename;?>"><a href="<?php echo get_home_url()."/".categoriaParent()->slug ;?>"><?php  echo categoriaParent()->cat_name;?></a></span>
				
			</div>
			
		</article>
			<?php if($ind==1):?>
				<div class="publicidad-320x250">
					<div class="banner_large banner_pc" id="Middle2">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle2'); });
					    </script>
					</div>

				</div>
			<?php endif;?>
		<?php $ind++; ?>
			<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>

	</section>
	<aside class="news-related">
	<?php get_template_part( 'template-parts/content', "relacionadas" );?>

	<div class="publicidad-320x250">
					<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
					</div>

				</div>
	</aside>
</div>




		<?php

// check if the repeater field has rows of data
if( have_rows('item_carrousel',"option") ):
?>

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
	
	
<div class="publicidad-970">
	<div class="banner_large banner_pc" id="Top3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Top3'); });
					    </script>
					</div>
</div>
<!-- tab por contenido -->
<div><!--bloque dinamico -->

<?php get_template_part( 'template-parts/content', "tab_contenido" );?>

</div><!-- bloque dinamico-->
</div>
<?php get_footer("custom");?>

<!--<div class="container-player-fixed">
	<div class="relative">
		<span class="cerrar-player">Cerrar</span>
	</div>
<iframe src='//mdstrm.com/live-stream/5ce7109c7398b977dc0744cd?player=5dd44f1a60a703079be39d13' width='100%' height='100%' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
</div>-->

<script>
	/*$(function(){
		$(".container-player-fixed").addClass("show");
		$(".cerrar-player").click(function(){
			$(".container-player-fixed").remove();
		})
	})*/
</script>