<?php 
$category = get_queried_object();

$parent=get_term($category->parent);

?>
<style>
    .cp-paginador{
        text-align:center;
        font-size:20px;
        margin-bottom:20px;
      /*  color:#b9b9b9;*/
    }
    .cp-paginador .current{
       /*color:black;*/
        font-weight:bold;

    }
    .cp-paginador a , .cp-paginador span{
        margin-left:10px;
        margin-right:10px;
    }
</style>
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

<?php


$foto_destacada = get_field('foto_destacada_categoria', $category);

?>

<div class="cp-contenedor" >
        <?php if($foto_destacada):?>
            <section class="bloque-top-banner">
                <img src="<?php echo $foto_destacada;?>" alt="">
            </section>
        <?php endif;?>
        <section id="bloque-top" class="
        bloque-top-v2 lyt-2" >
     
              <?php  $args=array( 'cat' => $category->term_id,'posts_per_page'=>3,"tag"=>"destacada");?>
                                <?php $query = new WP_Query(  $args ); ?> 
                                <?php $ind=0;?>
                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                        <?php if($ind==0):?>
                            <article class="top-big-noticia-v2">
                                <a href="<?php echo get_permalink();?>">
                                    <img class="foto-destacada" src="<?php echo get_the_post_thumbnail_url();?>" title="<?php echo the_title();?>" alt="<?php echo the_title();?>">
                                </a>
                                    <span class="fecha">
                                    <?php echo get_the_date('j F, Y');?>
                                    </span>
                                    <h2 class="titulo">
                                        <a href="<?php echo get_permalink();?>">
                                        <?php echo the_title();?>
                                    </a>
                                </h2>
                                    <div class="info-detalle">
                                        <?php echo get_field( "sumilla");?>
                                    </div>
                                    <div class="box-categoria <?php echo  $type;?>">
                                        <span class="decorate"></span> <span class="text-categoria"><?php echo $category->name;?></span>
                                    </div>
                                </article>



                            <div class="cp-listado-top">
                            <?php else:?>
                                <article class="item-ultimo-minuto">
                            <a href="<?php echo get_permalink();?>"><img class="foto" src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
                            <div class="detalle">
                                <span class="fecha"><?php echo get_the_date('j F, Y');?></span>
                                <h2 class="titulo"><a href="<?php echo get_permalink();?>"><?php echo the_title();?></a></h2>
                                <div class="box-categoria  <?php echo  $type;?>">
                                    <span class="decorate"></span> <span class="text-categoria"><?php echo $category->name;?></span>
                                </div>
                            </div>
                        </article>
                                <?php endif;?>
                        
                        
                       
                        
                        <?php
                    // End loop.
                    $ind++;
                   endwhile; 
                                wp_reset_postdata();
                                else : ?>
                               
                                <?php endif; ?>    
                   
                          
            </div>
        </section>

        <div class="cp-banner-row">
            <div class="banner_large banner_pc"  id="Top2">
                <script>
                    googletag.cmd.push(function() { googletag.display('Top2'); });
                </script>
             </div>
            
        </div>

          
                    <section class="section-news">
                        <div class="cp-head-section">
                            <div class="info-title">
                                <h1 class="title  <?php echo  $type;?>"><?php  echo $category->name?></h1>
                                <span class="detalle"></span>
                            </div>
                           
                        </div>
                        <div class="fila">

                        
                                <?php 
                                global $paged;
                                $curpage = $paged ? $paged : 1;
                                $args=array( 'cat' => $category->term_id,
                                'posts_per_page'=>8,
                                'paged' => $paged);?>
                                <?php $query = new WP_Query(  $args ); ?>
                                <?php $ind=0;?>
                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="col-item">
                                    <article
                                    class="cp-noticia"> 

                                    <a href="<?php echo get_permalink();?>">
                                    <img class="foto-cp-noticia" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt=""></a>
                                    <span class="cp-fecha"><?php echo get_the_date('j F, Y');?></span>
                                    <h3 class="title-noticia"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h3>
                                    <div class="box-categoria  <?php echo  $type;?>">
                                    <span class="decorate"></span> <span class="text-categoria"><a href="<?php echo get_category_link($category);?>"><?php echo $category->name;?></a></span>
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
                    <div class="cp-contenedor">
                        <div class="cp-paginador <?php echo  $type;?>">
                        <?php

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


                            ?>
                        </div>
                    </div>
                   

                     
                    <div class="cp-banner-row">
                    <div class="banner_large banner_pc"  id="Top3">
                        <script>
                            googletag.cmd.push(function() { googletag.display('Top3'); });
                        </script>
                    </div>
        </div>




       
</div>