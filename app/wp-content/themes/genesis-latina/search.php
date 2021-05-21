<?php get_header("custom");?>

<div class="container container-resultado">
	<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>
	</div>
	
	<div class="lyt-resultado">
	<section>
					<span class="title-info">Resultados con : "<?php echo esc_html( get_search_query())?>"</span>

					<div class="lyt-bloque-related">
						<div class="row">
							<?php if ( have_posts() ) : ?>
								<?php $ind=0;?>
							<?php
							// Start the loop.
							while ( have_posts() ) :
							the_post();

							/**
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/ ?>

							<article class="item-news item-type-3">
									<a href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>

										<?php endif; ?></a>

										<div class="detail-news">
											
											<h4 class="title-news"><a href="<?php the_permalink(); ?>"><?php echo code_short_text(get_the_title(),75);?></a>
											</h4>
											<div class="lyt-fecha-categoria">
											<span class="category-news cat-<?php echo categoriaParent()->category_nicename ?>"><a href="<?php echo get_home_url()?>/<?php echo categoriaParent()->slug?>"><?php  echo categoriaParent()->cat_name;?></a></span>
											<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
											</div>
											
										</div>
							</article>
							<?php if($ind==1):?>
							
									<div class="cp-banner">
									
										<div class="banner_large banner_pc"  id="Middle2">
											<script>
												googletag.cmd.push(function() { googletag.display('Middle2'); });
											</script>
										</div>
										
									</div>
                        
								<?php endif;?>
							<?php
								// End the loop.
								$ind++;
								endwhile;

								// Previous/next page navigation.
								the_posts_pagination(
									array(
										'mid_size'=>1,
										'screen_reader_text'=>" ",
										'prev_text'          => __( '<', 'twentysixteen' ),
										'next_text'          => __( '>', 'twentysixteen' )
									)
								);

							

								// If no content, include the "No posts found" template.
							else : ?>
								<!--get_template_part( 'template-parts/content', 'none' ); -->
								<div>
									<div class="not-found-search">
										<h3>Lo sentimos no encontramos contenido relacionado con tu busqueda, prueba intentando nuevamente</h3>
									</div>
								
								</div>
							<?php endif;
							?>
							
							

						
						</div><!-- end row -->
						


						

					</div>
			</section>

	
	</div>

	


	<section>
					

					<div>
			<?php // get_template_part( 'template-parts/content', "notas_relacionadas" );?>

		</div>


			</section>

		
		





</div>

<?php get_footer("custom");?>