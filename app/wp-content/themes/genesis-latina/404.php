<?php get_header("custom");?>
<?php 
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
	<div class="breadcumb">
		<ul>
			<li><a href="<?php echo get_home_url();?>">Inicio</a></li>
			<li>
				<a href="<?php echo get_home_url().'/'.$primer_nivel->slug;?>">
				<?php echo $primer_nivel->name;?>
				</a>
			</li>
			<li>
				<a href="<?php echo get_home_url().'/'.$primer_nivel->slug."/".$segundo_nivel->slug;?>">
					<?php echo $segundo_nivel->name;?>
						
				</a>
			</li>
			<li>
				<a href="<?php echo get_home_url().'/'.$primer_nivel->slug."/".$segundo_nivel->slug."/".$tercer_nivel->slug;?>">
					<?php echo $tercer_nivel->name;?>
				</a>
			</li>
		</ul>
	</div>

	<section>
		<article class="contendio-404">
			<div class="left-404">
				<span>NO ERES TÚ, <br> SOY YO</span>
				<h2>ERROR 404</h2>
				<p>El contenido que buscas nos abondonó. Pero tienes contenido igual o de mejor calidad relacionado.</p>

			</div>
			<div class="right-404">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/corazon.gif">
			</div>
		</article>


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