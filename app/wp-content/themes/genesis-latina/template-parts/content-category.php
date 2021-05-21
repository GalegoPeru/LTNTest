<?php $categoria=data_categoria();

$seccion_destacada=get_destacada_seccion($categoria->slug);

?>

<style type="text/css">
	.news-related{
		align-self: flex-start;
		position: sticky;
		top: 10px
	}
	.paginador-custom{
		clear:both;
		width: 100%;
		text-align:center;
		margin-top: 40px;
		margin-bottom: 30px;
	}
	.paginador-custom a{
		font-weight: bold;
		margin-left: 20px;
		margin-right: 20px;
		font-size: 22px;
		color:#513CCA;
	}
	.new-paginador{
		float:left;
		text-align:center;
		width:100%;
		margin-top:40px;
		margin-bottom:30px;
		color:gray;
	}
	.new-paginador span.page-numbers.current{
		font-weight:bold;
		color:#513CCA;
		margin-left:10px;
		margin-right:10px;
	}
	.new-paginador a{
		margin-left:10px;
		margin-right:10px;
	}
</style>
<div class="container container-home">
	<div class="publicidad-970">
		<!--<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>-->
		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/banner1_970x90.jpg?v45" alt="">

	</div>
	<!--<div class="breadcumb" style="display: none;">
		<ul>
			<li><a href="<?php //echo get_home_url();?>">Inicio</a></li>
			<li>
				<a href="<?php // echo get_home_url();?>/<?php echo $categoria->slug; ?>">
					<?php //echo single_cat_title();?></a>
			</li>
		</ul> 
	</div>-->
	<div class="description-category">
	
		<!--<h1 class="title-category"><?php echo $categoria->name;?></h1>-->
	
		
		<?php if(category_description()):?> 
			<div class="detail">
			<p><?php //echo category_description();?></p>
			</div>
		<?php else: ?>
			
		<?php endif?>

		
		
	</div>
	<div>

	<section class="sec-destacadas">
		<div class="bloque-big">
			
			<?php echo print_destacada_portada_seccion(1,$categoria->slug)?>
			

		</div>
		<div class="bloque-big-columna">
			
			<?php  echo print_destacada_portada_small_seccion(2,$categoria->slug)?>
			<?php echo print_destacada_portada_small_seccion(3,$categoria->slug)?>
			
		</div>
		
	</section>
	</div>

	<section class="sec-destacadas-categoy" style="display:none;">
		<div class="carusel-destacadas-category">
			
			<div class="carousel-categoria owl-carousel">

		<?php
			/*
			if(have_rows($seccion_destacada,"option")  && $categoria->parent==0){
				get_template_part( 'template-parts/content', "carusel-section" );
			
			}
			else{
				get_template_part( 'template-parts/content', "carusel-programa" );
			
			}*/
		?>



		</div>

		
		</div>
		<!--<div class="more-news-list">
			<?php //$custom_query = new WP_Query('posts_per_page=4&order=DESC&paged=2&cat='.$categoria->term_id); ?>
			<?php //while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<article class="item-news-list">
				<?php if (has_post_thumbnail() ) : ?>
       				 <a href="<?php echo get_permalink();?>">
       				 <?php the_post_thumbnail('full'); ?>
       				</a>

				<?php endif; ?>

			
				<div class="detail-news-list">
					
					<time class="date" style="margin-left: 0px;"><?php echo get_the_date('j F, Y',$value->ID)?></time>

					<h3 class="title"><a href="<?php echo get_permalink();?>"><?php echo code_short_text(get_the_title(),53);?></a></h3>
				</div>
			</article>
			<?php //endwhile; ?>
			<?php //wp_reset_postdata(); // reset the query ?>

			
			
		</div>-->
	</section>
<div class="publicidad-970">
	<!--<div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>-->

		<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/banner3_970x90.jpg" alt="">
		</div>
	
		

<div class="lyt-tempalte-bloque-1">

<section class="list-news-section" id="new_lyt">
		<h2 class="title-info">Últimas noticias de <?php echo $categoria->name;?></h2>
			<?php $ind=0;?>
			<?php
			global $paged;
			$curpage = $paged ? $paged : 1;
			$args = array(
			    'post_type' => 'post',
			    'cat'=>$categoria->term_id,
			    'post_status'=>'publish',
			    'orderby' => 'post_date',
			    'posts_per_page' => 7,
			    'paged' => $paged
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			?>


				<article class="item-news item-type-<?php echo ($ind<2 || $ind>3)? '3':'3'; ?>">
					<?php if (has_post_thumbnail() ) : ?>
						<a href="<?php echo get_permalink();?>">
		       				 <?php the_post_thumbnail('full', array('class' => 'pic-news')); ?>
						</a>
						<?php endif; ?>

					<div class="detail-news">
						<time class="date-news"><?php echo get_the_date('j F, Y',$value->ID)?></time>
						<h3 class="title-news"><a href="<?php echo get_permalink(); ?>"><?php echo code_short_text(get_the_title(),75);?></a>
						</h3>
						<div class="lyt-fecha-categoria">
							<span class="category-news cat-<?php echo categoriaParent()->category_nicename;?>"><a href=""><?php  echo categoriaParent()->cat_name;?></a></span>
							
						</div>
					</div>
					<?php if($ind<2 || $ind>3):?>

						<?php echo social_link();?>
					<?php endif;?>
				</article>
				<?php if($ind==1):?>
					<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle2">
						    <script>
						        googletag.cmd.push(function() { googletag.display('Middle2'); });
						    </script>
						</div>

					</div>
				<?php endif;?>
		<?php
		 $ind++;
		endwhile;
		    
		    wp_reset_postdata();
		endif;
		?>

		<div class="new-paginador" >
		<?php
/*global $wp_query;
$result = new WP_Query('cat=3');//replace with your desired category id*/
/*
$args_pagi = array(
                'base' => add_query_arg( 'paged', '%#%' ),
                'total' => $query->max_num_pages,
                'current' => $page
            );
            
$args =array('post_type' => 'post','post_status' => 'publish','cat' => 3);
$myposts = new WP_Query( $args );
 
foreach( $myposts->posts as $data ) : setup_postdata($data); 
 
// your desired code
endforeach;*/

$big = 999999999; // need an unlikely integer
 
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 0, get_query_var('paged') ),
    'total' => $query->max_num_pages,
	'show_all'           => false,
	'end_size'           => 2,
    'mid_size'           => 1,
	'prev_text'          => __('<'),
    'next_text'          => __('>'),
) );


 
//call pagination function
//echo paginate_links( $args_pagi); ?>

</div>
	<div class="paginador-custom" style="display:none;">
		<?php
		$arrow_antes=get_stylesheet_directory_uri()."/img/arrowleft1.png";
		$arrow_inicio=get_stylesheet_directory_uri()."/img/arrowleft2.png";
		$arrow_siguiente=get_stylesheet_directory_uri()."/img/arrowright1.png";
		$arrow_fin=get_stylesheet_directory_uri()."/img/arrowright2.png";
		?>

		<?php 
/*echo '
<div id="wp_pagination">
    <a class="first page button" href="'.get_pagenum_link(1).'"> <img src="' .$arrow_inicio. '"> </a>
    <a class="previous page button" href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'"> <img src="' .$arrow_antes. '"></a>';
     //for($i=($curpage-2);$i<=($curpage-1);$i++)
       // echo '<a class="'.($i == $curpage ? 'active ' : '').'page button" href="'.get_pagenum_link($i).'">'.$i.'</a>';
  
    //for($i=$curpage;$i<=($curpage+2);$i++)
      //  echo '<a class="'.($i == $curpage ? 'active ' : '').'page button" href="'.get_pagenum_link($i).'">'.$i.'</a>';
    echo '
    <a class="next page button" href="'.get_pagenum_link(($curpage+1 <= $query->max_num_pages ? $curpage+1 : $query->max_num_pages)).'"><img src="' .$arrow_siguiente. '"></a>
    <a class="last page button" href="'.get_pagenum_link($query->max_num_pages).'"><img src="' .$arrow_fin. '"></a>
</div>
';*/?>

	</div>

</section>
	

	<aside class="news-related">
		<?php // get_template_part( 'template-parts/content', "relacionadas" );?>

		<div class="publicidad-320x250">
					<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
					</div>

				</div>


		
	</aside>
</div>
<div>
  
	<?php // get_template_part( 'template-parts/content', "destacada-seccion" );?>
</div>


<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top3">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top3'); });
		    </script>
		</div>

	</div>
<div  id="new_lyt"><!--bloque dinamico -->
<?php // get_template_part( 'template-parts/content', "tab_contenido" );?>
</div><!-- bloque dinamico-->


<!--<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top4">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top4'); });
		    </script>
		</div>

	</div>
</div>-->