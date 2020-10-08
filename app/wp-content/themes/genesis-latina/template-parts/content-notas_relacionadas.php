
<section>
					<span class="title-info">También te puede interesar</span>

					<div class="lyt-bloque-related">
						<div class="row">
		<?php $ind=0;?>
							<?php $custom_query = new WP_Query('posts_per_page=12'); ?>
			<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>

						<article class="item-news item-type-3">
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail() ) : ?>
       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>

				<?php endif; ?></a>

							<div class="detail-news">
								<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
								<h4 class="title-news"><a href="<?php the_permalink(); ?>"><?php echo code_short_text(get_the_title(),75);?></a>
								</h4>
								
								<span class="category-news cat-<?php echo categoriaParent()->category_nicename ?>"><a href="<?php echo get_home_url()?>/<?php echo categoriaParent()->slug?>"><?php  echo categoriaParent()->cat_name;?></a></span>
								
							</div>
						</article>
						<?php if($ind==5):?>
							<div class="publicidad-970">
									<div class="banner_large banner_pc" id="Top3">
									    <script>
									        googletag.cmd.push(function() { googletag.display('Top3'); });
									    </script>
									</div>

							</div>

								<?php get_template_part( 'template-parts/content', "taboola-bloque" );?>


						<?php endif;?>
						<?php $ind++;?>
						<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>
<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top4">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top4'); });
		    </script>
		</div>

</div>
						
						</div><!-- end row -->
						


						

					</div>
			</section>