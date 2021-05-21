<?php $categorias=get_the_category($value->ID);?>
<?php $id_post=get_the_ID();?>

<?php
$parent=get_term($categorias[0]->parent);

?>
<?php 

$slug=$parent->slug;
 
$type="color-type1";
$contenido_bloque="";
$lista_categorias="";
switch($slug){
	case "noticias":
		$type="color-type1";
		$contenido_bloque="noticias_destacada";
		$lista_categorias="noticias_programas_listados";
		break;
	case "entretenimiento":
		$type="color-type2";
		$contenido_bloque="entretenimiento_destacada";
		$lista_categorias="entretenimiento_programas_listados";
		break;
	case "deportes":
		$type="color-type3";
		$contenido_bloque="deporte_destacada";
		$lista_categorias="deportes_programas_listados";
		break;
	default:
		$type="color-type1";
		$contenido_bloque="noticias_destacada";
		break;


}

?>

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
                                'posts_per_page'=>8,
                                'post__not_in'=>array($id_post)
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
                                    <div class="box-categoria <?php echo $type;?>">
                                    <span class="decorate"></span> <span class="text-categoria"><a href="<?php echo get_category_link($categorias[0]);?>"><?php echo $categorias[0]->name;?></a></span>
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
                    <div>
                    <?php get_template_part( 'template-parts/content', "taboola-bloque" );?>


                    </div>

