




<?php $categoria=categoriaParent();
$seccion='items_seccion_'.$categoria->slug;
?>


<?php
$ind=0;
// check if the repeater field has rows of data
if( have_rows($seccion,"option") ): ?>
<h2 class="title-info">Contenido destacado</h2>
<section class="sec-destacadas bloque-interno-categoria">
<?php 

 	// loop through the rows of data
    while ( have_rows($seccion,"option") ) : the_row(); ?>
			<?php if($ind==0):?>
				<div>
					<article class="item-news item-type-1">
						<a href="<?php echo get_sub_field('link_destino'); ?>">
						<img class="pic-news" src="<?php echo get_sub_field('foto'); ?>">
						<div class="detail-news">
							<!--<time class="date-news">12 May 2019</time>-->
							<h2 class="title-news"><?php the_sub_field('titulo'); ?></h2>
							<div class="sumary-news">
							<p><?php the_sub_field('descripcion'); ?></p></div>
							<!--<span class="category-news"><a href="">Entretenimiento</a></span>-->
							
						</div></a>
					</article>
				</div>
				<div class="bloque-inferior-categoria">

				<?php else:?>
				<article class="item-news item-type-2">
					<a href="<?php echo get_sub_field('link_destino'); ?>">
					<img class="pic-news" src="<?php echo get_sub_field('foto'); ?>">
					<div class="detail-news">
						<!--<time class="date-news">12 May 2019</time>-->
						<h2 class="title-news"><?php the_sub_field('titulo'); ?>
						</h2>

						<!--<span class="category-news"><a href="">Entretenimiento</a></span>-->
					
					</div>
					</a>
				</article>
				<?php endif;?>
				
    	<?php 
    	$ind++;
    endwhile; ?>
    	</div>
	</section>

    <?php

else :

    // no rows found

endif;

?>
		
	
	