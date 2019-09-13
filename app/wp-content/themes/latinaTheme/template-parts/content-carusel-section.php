
<?php
$categoria=data_categoria();
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
							<span class="title-news"><a href="<?php echo get_permalink($value->ID);?>"><?php echo code_short_text($value->post_title,92);?></a></span>
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
