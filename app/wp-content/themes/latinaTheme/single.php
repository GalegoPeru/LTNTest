<?php get_header("custom");?>
<?php 
/*
$categorias=get_the_category($value->ID);
$total=count($categorias);
$primer_nivel="";
$segundo_nivel="";
$tercer_nivel="";
$top_parent=categoriaParent()->term_id;
if($total==2){
	for($i=0; $i<$total ;$i++){
		if($categorias[$i]->category_parent==0){
			$primer_nivel=$categorias[$i];
			// $top_parent=$categorias[$i]->term_id;
		}
		else{
			$segundo_nivel=$categorias[$i];
		}
	}
}
else if($total==3){
     for($i=0; $i<$total ;$i++){
		if($categorias[$i]->category_parent==0){
			$primer_nivel=$categorias[$i];
		}
		else{
			if($categorias[$i]->category_parent==$top_parent){
				$segundo_nivel=$categorias[$i];
			}
			else{
				$tercer_nivel=$categorias[$i];
			}

		}
	}
}
*/
?>

<style type="text/css">

</style>
<div class="container container-interna">
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
				<a href="<?php //echo get_home_url().'/'.$primer_nivel->slug;?>">
				<?php //echo $primer_nivel->name;?>
				</a>
			</li>
			<li>
				<a href="<?php // echo get_home_url().'/'.$primer_nivel->slug."/".$segundo_nivel->slug;?>">
					<?php //echo $segundo_nivel->name;?>
						
				</a>
			</li>
			<li>
				<a href="<?php //echo get_home_url().'/'.$primer_nivel->slug."/".$segundo_nivel->slug."/".$tercer_nivel->slug;?>">
					<?php //echo $tercer_nivel->name;?>
				</a>
			</li>
		</ul>
	</div>


	<section>
		<article class="item-detail-news">
			<header>
				<h1 class="title-item-news"><?php echo the_title(); ?> [<?php echo title_tipo(); ?>]</h1>
				<span class="sumary-item-news"><?php echo get_field("sumilla"); ?> </span>
				<div class="bar-detail-news">
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$value->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_template_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>">
							<img id="shared-twitter" src="<?php echo get_template_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo the_permalink();?>">
							<!--<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_template_directory_uri();?>/img/iconos/whats.png" alt="">-->
							   

   
						</div>
						
					</div>
				</div>
			</header>
			<div class="lyt-interna">
			<section class="content-item-news">
				
				<div class="bloque-type-item">
				<?php $tipo=get_post_format();?>
		
				<?php if(get_field("codigo_youtube")!="" || get_field("codigo_video")) :?>
						<?php get_template_part( 'template-parts/content', "video" );?>
				<?php else : ?>
						<?php get_template_part( 'template-parts/content', $tipo );?>
				<?php
					endif;	
				?>

					
					
				<?php // $id=0;?>
				<?php // get_template_part( 'template-parts/content', $tipo );?>
				

					
				</div>
				<div class="detail">
					
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php $id=get_the_ID();?>
		
		<?php htmlentities(the_content()); ?>
	

<?php endwhile; ?>

<?php endif; ?>

					
				<div>
					
					<?php // if(!$tipo):?>
					<?php // if(get_field("codigo_youtube")){ ?>
						<!---<iframe width="100%" height="340" src="https://www.youtube.com/embed/<?php // echo get_field("codigo_youtube"); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							-->
					<?php // }; ?>
					<?php // endif;?>
				</div>
				</div>

			</section>
			<aside class="sidebar-item-news">

				<div>
						<div class="publicidad-320x600">
							
							<div class="banner_large banner_pc" id="Middle">
						    <script>
						        googletag.cmd.push(function() { googletag.display('Middle'); });
						    </script>
						</div>
						</div>
						
					</div>
				 <?php get_template_part( 'template-parts/content', "taboola-right" );?>	

			<div>
					<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
					</div>
					</div>
						
				</div>

			
				<?php get_template_part( 'template-parts/content', "relacionadas" );?>
			

			</aside>

			<div class="clear"></div>
			</div>
		</article>
			<div class="bar-detail-news">
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$value->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_template_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>">
							<img id="shared-twitter" src="<?php echo get_template_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo the_permalink();?>">
							<!--<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_template_directory_uri();?>/img/iconos/whats.png" alt="">-->
							   

   
						</div>
					</div>
			</div>


		<div class="publicidad-970">
			<div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>

		</div>

		<div class="bloque-tag">
			<h2 class="title-info">Tags: </h2>
			<?php $_tags=wp_get_post_tags($id);?>
				
				<?php if($_tags): ?>
			<ul class="list-tag">
				
						<?php foreach ( $_tags as $key => $value) { ?>
							<li><a href="<?php echo get_home_url()."noticias-sobre/".$value->slug;?>"><?php echo $value->name;?></a></li>
						<?php }  ?>
			
					
			
			
			
			</ul>
				<?php else : ?>
							<span>No se encontraron tags registrados para esta noticia.</span>
				<?php endif ;?>
		</div>
		<div>
			<?php get_template_part( 'template-parts/content', "notas_relacionadas" );?>

		</div>
	</section>



</div>
<?php get_footer("custom");?>