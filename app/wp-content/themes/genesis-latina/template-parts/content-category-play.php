<?php $categoria=data_categoria();?>


<style>
.item-type-3 .detail-news
{
padding-left:5px;
padding-right:5px;
}
.carousel-categoria .detail-news{
	position: absolute!important;
    left: 0px;
    bottom: 35px;
    padding-left: 20px!important;
    padding-right: 20px!important;
    padding-bottom: 20px!important;
}
.carousel-categoria .detail-news .over{
	width:100%;
}
.carousel-categoria .detail-news .date-news{
	display:none;


}
.carousel-categoria .detail-news .over .title-news a{
	text-shadow:1px 1px 1px black;
}
.sec-destacadas-categoy .owl-dots{
	margin-top:-30px!important
}
</style>
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
		
	</section>


<!-- contenido agregado -->

<section><br><br>
					<span class="title-info">Programas completos</span>

					<div class="lyt-bloque-related">
						<div class="row">
	<?php
	 $custom_query = new WP_Query(array(
		'posts_per_page' => 12,
		'paged'=>2,
		'cat'=>$categoria->term_id
	 ));
	 ?>

						
			<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>

						<article class="item-news item-type-3">
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail() ) : ?>
       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>

				<?php endif; ?></a>

							<div class="detail-news">
								<time class="date-news"><?php  //echo get_the_date('j F, Y',$value->ID)?></time>
								<h4 class="title-news"><a href="<?php the_permalink(); ?>"><?php echo code_short_text(get_the_title(),75);?></a>
				</h4>
								
								<!--<span class="category-news cat-<?php echo categoriaParent()->category_nicename ?>"><a href="<?php echo get_home_url()?>/<?php echo categoriaParent()->slug?>"><?php  echo categoriaParent()->cat_name;?></a></span>-->
								
							</div>
						</article>
						
				
						<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>

						
						</div><!-- end row -->
						


						

					</div>
			</section>


<!-- end contenido agregado-->
<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top4">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top4'); });
		    </script>
		</div>

</div>




	<?php  get_template_part( 'template-parts/content', "destacada-seccion" );?>
</div>
<div class="publicidad-970"></div>
<div><!--bloque dinamico -->
<?php //get_template_part( 'template-parts/content', "tab_contenido" );?>
</div><!-- bloque dinamico-->

</div>