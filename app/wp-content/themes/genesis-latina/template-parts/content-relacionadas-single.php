<?php 
	$id=$post->ID;
	$tags = wp_get_post_tags($id);
	$tag=$tags[0]->term_id;
?>
<span class="title-info">Noticias relacionadas</span>
		<div>
		<?php
		if(is_single()){
			$custom_query = new WP_Query(array(
	    	'post__not_in' => array($id),
	    	'posts_per_page'=>6,
	    	'tag__in'=>$tag));
			
		} 
		else{
			$custom_query = new WP_Query(array(
	    	'posts_per_page'=>6,
	    	'paged'=>2
	    	));
		}
		// exclude category 9
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<article class="item-news-list">
						<div>
							<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
			       				 <?php the_post_thumbnail(); ?>

							<?php endif; ?>
							</a>
						</div>

						
						<div class="detail-news-list">
							<span class="category"><?php  echo categoriaParent()->cat_name;?></span>-<time class="date"><?php echo get_the_date('j F, Y',$value->ID)?></time>
							<h4 class="title"><a href="<?php the_permalink(); ?>"><?php echo code_short_list(get_the_title());?></a></h4>
						</div>
					</article>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>

			
		</div>