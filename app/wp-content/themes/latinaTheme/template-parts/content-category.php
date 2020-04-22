<?php $categoria=data_categoria();?>
<div class="container container-home">
	<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>

	</div>
	<div class="breadcumb" style="display: none;">
		<ul>
			<li><a href="<?php //echo get_home_url();?>">Inicio</a></li>
			<li>
				<a href="<?php // echo get_home_url();?>/<?php echo $categoria->slug; ?>">
					<?php //echo single_cat_title();?></a>
			</li>
		</ul> 
	</div>
	<div class="description-category">
	
		<h1 class="title-category"><?php echo $categoria->name;?></h1>
	
		
		<?php if(category_description()):?> 
			<div class="detail">
			<p><?php echo category_description();?></p>
			</div>
		<?php else: ?>
			
		<?php endif?>

		
		
	</div>
	
	<section class="sec-destacadas-categoy">
		<div class="carusel-destacadas-category">
			
			<div class="carousel-categoria owl-carousel">

		<?php

			if($seccion_destacada && $categoria->parent==0){
				get_template_part( 'template-parts/content', "carusel-section" );
			}
			else{
				get_template_part( 'template-parts/content', "carusel-programa" );
			}
		?>



		</div>

		
		</div>
		<div class="more-news-list">
			<?php $custom_query = new WP_Query('posts_per_page=4&order=DESC&paged=2&cat='.$categoria->term_id); ?>
			<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<article class="item-news-list">
				<?php if (has_post_thumbnail() ) : ?>
       				 <a href="<?php echo get_permalink();?>">
       				 <?php the_post_thumbnail('full'); ?>
       				</a>

				<?php endif; ?>

			
				<div class="detail-news-list">
					
					<time class="date" style="margin-left: 0px;"><?php echo get_the_date('j F, Y',$value->ID)?></time>

					<span class="title"><a href="<?php echo get_permalink();?>"><?php echo code_short_text(get_the_title(),53);?></a></span>
				</div>
			</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>

			
			
		</div>
	</section>
<div class="publicidad-970"><div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>
		</div>
<div class="lyt-tempalte-bloque-1">


	<section class="list-news-section">
		<h2 class="title-info">Útlimas noticias de <?php echo $categoria->name;?></h2>
		<?php $ind=0;?>
		
		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => 8,
			'paged'=>2,
			'cat'=>$categoria->term_id
		 )); ?>
		<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item-news item-type-<?php echo ($ind<2 || $ind>3)? '3':'4'; ?>">
			<?php if (has_post_thumbnail() ) : ?>
				<a href="<?php echo get_permalink();?>">
       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>
				</a>
				<?php endif; ?>

			<div class="detail-news">
				<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
				<h3 class="title-news"><a href="<?php echo get_permalink(); ?>"><?php echo code_short_text(get_the_title(),75);?></a>
				</h3>
				
				<span class="category-news cat-<?php echo categoriaParent()->category_nicename;?>"><a href=""><?php  echo categoriaParent()->cat_name;?></a></span>
				
			</div>
			<?php if($ind<2 || $ind>3):?>

				<?php echo social_link();?>
			<?php endif;?>
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
<div>

	<?php get_template_part( 'template-parts/content', "destacada-seccion" );?>
</div>
<div class="publicidad-970"></div>
<div><!--bloque dinamico -->
<?php get_template_part( 'template-parts/content', "tab_contenido" );?>
</div><!-- bloque dinamico-->

</div>