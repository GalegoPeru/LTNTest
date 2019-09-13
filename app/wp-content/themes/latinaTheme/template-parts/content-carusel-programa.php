<?php 
$categoria=data_categoria();
$custom_query = new WP_Query('posts_per_page=4&order=DESC&paged=1&cat='.$categoria->term_id); ?>
			<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>

<article class="item-news item-cat-type-1">

<?php if (has_post_thumbnail() ) : ?>
				<a href="<?php echo get_permalink(); ?>">
       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>
				</a>
				<?php endif; ?>


				

					<div class="detail-news">
						<div class="over">
							<time class="date-news"><?php echo get_the_date('j F, Y')?></time>
							<span class="title-news"><a href="<?php echo get_permalink();?>"><?php echo code_short_text(get_the_title(),92);?></a></span>
							<div class="sumary-news">
							<p><a href="<?php echo get_permalink();?>"><?php echo get_field("sumilla");?></p></a></div>
							
							
						</div><!-- end over -->
					</div>	
				</article>

					<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>