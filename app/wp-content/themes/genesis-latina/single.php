<?php get_header("custom");?>
<style>

.publicidad-970{
	margin-top:5px;
	margin-bottom:0px;
}
					.center-content{
						display:flex;
						justify-content:center;
						width:100%;
						margin-top:15px;
					}
					.lyt-interna{
						margin-top:15px;
					/*}
					@media (max-width:720px){
						.lyt-bloque-related .item-type-3{
							width:47%!important;
						}
					}*/
				</style>

<?php $categorias=get_the_category($value->ID);?>

<?php 
/*

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


<div class="container container-interna">
<div class="publicidad-970">
	<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/banner1_970x90.jpg" alt="">
	</div>
	<!--<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>

	</div>-->
	<!--<div class="breadcumb" style="display: none;">
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
	</div>-->
	


	<section>
		<article class="item-detail-news">
			<header>
				<h1 class="title-item-news"><?php echo the_title(); ?></h1>
				<span class="sumary-item-news"><?php echo get_field("sumilla"); ?> </span>
				<!--<div class="bar-detail-news"> 
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$value->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>">
							<img id="shared-twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo the_permalink();?>">
							<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/whats.png" alt="">
							   

   
						</div>
						
					</div>
				</div>-->
			</header>
			<div class="lyt-interna">
			<section class="content-item-news">
				<div class="over-content-item">
				
				<div class="bloque-type-item">
					<?php $tipo=get_post_format();?>


					<?php get_template_part( 'template-parts/content',"");?>


					<?php // if(get_field("codigo_youtube")!="" || get_field("codigo_video")!="") :?>
						
							<?php // get_template_part( 'template-parts/content', "video" );?>
					<?php// else : ?>
							<?php // $tipo="";?>
							<?php //get_template_part( 'template-parts/content', $tipo );?>
					<?php
						//endif;	
					?>

					<?php // $id=0;?>
					<?php // get_template_part( 'template-parts/content', $tipo );?>
				

					
				</div>
				
				<!--<div class="banner_large banner_pc center-content" id="Box1">
						    <script>
						        googletag.cmd.push(function() { googletag.display('Box1'); });
						    </script>
					</div>-->
				<div class="detail">
						
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $id=get_the_ID();?>
		
						<?php htmlentities(the_content()); ?>
	

						<?php endwhile; ?>

					<?php endif; ?>

				
				</div>
				<div>
				<?php if(get_field("codigo_youtube")!="" || get_field("codigo_video")!="") :?>
						
						<?php // get_template_part( 'template-parts/content', "video" );?>
				<?php else : ?>
						
				<?php
					endif;	
				?>
				<iframe src='https://mdstrm.com/embed/5ef56abe87d200078071157f' width='100%' height='360' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
				</div>
				</div>
			</section>
			<aside class="sidebar-item-news">
				<div class="over-content-sidebar">
					<!--<div>
						<div class="publicidad-320x600">
							
							<div class="banner_large banner_pc" id="Middle1">
						    <script>
						        googletag.cmd.push(function() { googletag.display('Middle1'); });
						    </script>
							</div>-->
							<!--<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/Banner1_300x600.jpg" alt="">


						</div>
						
					</div>-->
				 	<?php //get_template_part( 'template-parts/content', "taboola-right" );?>	

					<div>
						<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle2">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle2'); });
					    </script>
						</div>
						</div>
						
					</div>

			
					<?php get_template_part( 'template-parts/content', "relacionadas-single" );?>
					
					<div class="publicidad-320x250">
						<!--<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
						</div>-->
						<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/Banner1_300x250.jpg" alt="">


						</div>
			
				</div>
			</aside>

			<div class="clear"></div>
			</div>
		</article>
			<div id="bar-bottom_detail-news" class="bar-detail-news">
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$value->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>">
							<img id="shared-twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo the_permalink();?>">
							<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_stylesheet_directory_uri();?>/img/iconos/whats.png" alt="">
							   

   
						</div>
					</div>
			</div>


		<div class="publicidad-970">
			<!--<div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>-->
		<img src="<?php echo get_stylesheet_directory_uri()?>/img/banner/banner4_970x90.jpg" alt="">


		</div>

		<div class="bloque-tag">
			<h2 class="title-info">Tags:</h2>
				
				<?php // $next=get_next_post(); var_dump($next);?>
			
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
			<div id="new_lyt"> 
				<?php get_template_part( 'template-parts/content', "notas_relacionadas" );?>
			</div>
		</div>

		</div>
	</section>
	<div id="contentido-adicional"></div>


</div>
<?php get_footer("custom");?>

<script>
	registro_ID_single("<?php echo get_the_ID();?>")
	registro_consumo("<?php echo $categorias[0]->slug;?>");
</script>