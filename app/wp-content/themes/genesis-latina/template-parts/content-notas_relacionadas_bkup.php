
  <section class="section-news">
	<?php $categorias=get_the_category($value->ID);?>
		
	
                        <div class="cp-head-section">
                            <div class="info-title">
                                <h2 class="title  type1">También te puede interesar</h2>
                                <span class="detalle"></span>
                            </div>
                           
                        </div>
                        <div class="fila">

                        
                                <?php 
                             
                                $args=array( 'cat' => $categorias[0]->term_id,
                                'posts_per_page'=>8
                                );?>
							
                                <?php $query = new WP_Query(  $args ); ?>
                                <?php $ind=0;?>
                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="col-item">
                                    <article
                                    class="cp-noticia">  

                                    <a href="<?php echo get_permalink();?>">
                                    <img class="foto-cp-noticia" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt=""></a>
                                    <span class="cp-fecha"><?php echo get_the_date('j F, Y');?></span>
                                    <h2 class="title-noticia"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h2>
                                    <div class="box-categoria type1">
                                    <span class="decorate"></span> <span class="text-categoria"><a href="<?php echo get_category_link($category);?>"><?php echo $category->name;?></a></span>
                                    </div>
                                    </article>
                                </div>
                               
                                    <?php if($ind==1):?>
                                        <div class="col-item col-banner">
                                            <div class="cp-banner">
                                                <div class="banner_large banner_pc"  id="Middle2">
                                                    <script>
                                                        googletag.cmd.push(function() { googletag.display('Middle2'); });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                <?php $ind++;?>
                                <?php endwhile; 
                                wp_reset_postdata();
                                else : ?>
                               
                                <?php endif; ?>    
                             

                           
                            
                        
                            
                        </div>
                    </section>


<section style="display:none">
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
								<div class="lyt-fecha-categoria">
								<span class="category-news cat-<?php echo categoriaParent()->category_nicename ?>"><a href="<?php echo get_home_url()?>/<?php echo categoriaParent()->slug?>"><?php  echo categoriaParent()->cat_name;?></a></span>
								
								</div>
								
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