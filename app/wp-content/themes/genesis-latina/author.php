<?php get_header("custom");?>

<div class="container container-resultado">
	<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>
		
	</div>
	<div class="breadcumb">
		<ul>
			<li><a href="">Inicio</a></li>
			<li><a href="">Tags</a></li>
		</ul>
	</div>
	
	<div class="lyt-resultado">
		<section class="list-resultado lista-tag-resultado">
			
			<h1 class="title-search">Lista de resultados de  : Redacción Latina</h1>
			<div class="detalle-tag">
				<?php //echo tag_description();?>
			</div>

			<div>
			<?php $custom_query = new WP_Query(array(
					'posts_per_page'=>18)); ?>
				<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>	
				 <article class="item-list-resultado">
				 		<?php if (has_post_thumbnail() ) : ?>
       				<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'pic-item')); ?></a>

				<?php endif; ?>


					<!--<img class="pic-item" src="https://via.placeholder.com/170x100">-->
					<div>
						<div style="margin-bottom: 3px;"><span class="category"><?php  echo categoriaParent()->cat_name;?></span>   <time class="fecha"><?php echo get_the_date('j F, Y',$value->ID)?></time></div>
						<h2 class="title-item"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a>
						</h2>
						<div class="summary-item"><a href="<?php the_permalink(); ?>"><?php echo get_field("sumilla");?></a></div>
					</div>
				</article>

				<?php endwhile; ?>
				



				

			</div>
		</section> 
		<aside class="sidebar-resultado">
				<div>
					<div class="publicidad-320x600">
						<div class="banner_large banner_pc" id="Middle">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle'); });
					    </script>
					</div>
					</div>
						
				</div>
				
				
				<?php get_template_part( 'template-parts/content', "relacionadas" );?>

		</aside>
		<div class="clear"></div>
	</div>

	<section>
					

					<div>
			<?php get_template_part( 'template-parts/content', "notas_relacionadas" );?>

		</div>


			</section>
		
		





</div>

<?php get_footer("custom");?>