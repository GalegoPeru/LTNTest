<style>
.texto-cabezera{
display:flex;

    margin-bottom: 30px;
    margin-top: 20px;
    font-size: 15.5px;

    font-weight: 500;
    letter-spacing: 0.5px;
}


.texto-cabezera .titulo{

margin-right:8px;
border-right: 1px solid;
    padding-right: 8px;
}

.texto-cabezera .detalle{
margin-left:7px;
}

.texto-cabezera{

}

.no-title .title-info{
	display:none!important;
}
aside .publicidad-320x250 img{
	width:100%;
}
</style>

<!--
<div >
	<div class="tab-contenido">
		<ul>
			<?php echo listado_tabs()?>
			
		</ul>
	</div>
</div>-->
<!--<div class="lyt-tempalte-bloque-1">

	<section class="list-news-section list-news-ajax">
	<?php // echo nuevo_bloques(12);?>
	</section>
	<aside class="news-related">
		
		<div>
		<div class="publicidad-320x600">
			<div class="banner_large banner_pc" id="Middle1">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle1'); });
					    </script>
					</div>
		</div>
			
		</div>
	</aside>
</div>-->


<?php

// Check rows exists.
if( have_rows('listado_categorias',7621) ):

    // Loop through rows.
    while( have_rows('listado_categorias',7621) ) : the_row();

        // Load sub field value.
        $id = get_sub_field('categoria'); ?>
		<div>
<div class="texto-cabezera">
<span class="titulo" style="color:<?php echo get_sub_field('color') ;?>"><span class="decoration" style="border-color:<?php echo get_sub_field('color')?>"></span><?php echo get_sub_field('nombre_a_mostrar');?></span>
<span class="subtitulo"><?php echo get_sub_field('detalle');?></span>
</div>
<div class="lyt-tempalte-bloque-1 no-title">

<section class="list-news-section list-news-ajax">
<?php echo nuevo_bloques($id);?>
</section>
<aside class="news-related">

	<?php get_template_part( 'template-parts/content', "relacionadas" );?>

	<div class="publicidad-320x250">
	'<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/Banner3_326x280.jpg">'.


					<!--<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
					</div>-->

				</div>

	<!--<div>
	<div class="publicidad-320x600">
		<div class="banner_large banner_pc" id="Middle1">
					<script>
						googletag.cmd.push(function() { googletag.display('Middle1'); });
					</script>
				</div>
	</div>
		
	</div>-->
</aside>
</div>

</div>


       
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;



?>