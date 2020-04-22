<?php get_header("custom");?>
<?php $categoria=data_categoria();?>

<style>
.sec-destacadas-categoy.sec-latina-play .owl-dots{
margin-top: -40px;
margin-bottom: 30px;
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
	<div class="breadcumb">
		<ul>
			<li><a href="<?php echo get_home_url();?>">Inicio </a></li>
			<li>
				<a href="<?php echo get_home_url();?>/<?php echo $categoria->slug; ?>">
					<?php echo single_cat_title();?></a>
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
	
	<section class="sec-destacadas-categoy sec-latina-play">
		<div class="carusel-destacadas-category">
			
			<div class="carousel-categoria owl-carousel">

<?php

$seccion_destacada=get_destacada_seccion($categoria->slug);
// check if the repeater field has rows of data
if( have_rows($seccion_destacada,"option") ):

 	// loop through the rows of data
    while ( have_rows($seccion_destacada,"option") ) : the_row();
    	$value=get_sub_field('noticia');
        // display a sub field value
?>
			<article class="item-news item-cat-type-1">
					<img  class="pic-news" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>" alt="">
					

					<div class="detail-news">
						<div class="over">
							<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
							<h2 class="title-news"><a href="<?php echo get_permalink($value->ID);?>"><?php echo code_short_text($value->post_title,92);?></a></h2>
							<div class="sumary-news">
							<p><a href="<?php echo get_permalink($value->ID);?>"><?php echo get_field("sumilla",$value->ID);?></p></a></div>
							<!--<span class="category-news cat-<?php echo $categoria->slug;?>"><a href=""><?php  echo categoriaParent()->cat_name;?></a></span>-->
							
						</div><!-- end over -->
					</div>	
				</article>


      
<?php 
    endwhile;

else :

    // no rows found

endif;

?>


		</div>

		<div class="navigator">
			<ul>
				<li class="bullet"></li>
				<li class="bullet"></li>
				<li class="bullet"></li>
			</ul>
		</div>
		</div>
		
	</section>
<!--<div class="publicidad-970"><div class="banner_large banner_pc" id="Top2">
		    <script>
		       // googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>
		</div>
-->

<div class="lyt-tempalte-bloque-play">
<section class="grid-series">
<?php

// check if the repeater field has rows of data
if( have_rows('programa',"option") ):

 	// loop through the rows of data
    while ( have_rows('programa',"option") ) : the_row(); ?>

	<article class="item-serie">
		<img src="<?php the_sub_field('foto'); ?>">
		<a href="<?php the_sub_field('link'); ?>"><div class="over-serie">
			<span class="categoria"><?php the_sub_field('sub_titulo'); ?></span>
			<h1 class="title"><?php the_sub_field('titulo'); ?></h1>
		</div></a>
	</article>
	<?php 
    endwhile;

else :

    // no rows found

endif;

?>
	

</section>
	
</div>

<!--<div class="publicidad-970">
	<div class="banner_large banner_pc" id="Top3">
		    <script>
		      //  googletag.cmd.push(function() { googletag.display('Top3'); });
		    </script>
		</div>
-->

</div>


</div>
<?php get_footer("custom");?>