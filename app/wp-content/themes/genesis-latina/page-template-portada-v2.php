<?php
/*
* Template Name: Portada V2
*
*/
get_header("custom");?>


<div class="cp-contenedor" >
      


    <section id="bloque-top" class="
    bloque-top lyt-1">
        <div class="noticias-listado">
        <?php 

            $value = get_field("destacada_1",7621);
            $id_post=$value->ID;
            $sumilla= get_field("sumilla",$value->ID);
            $url = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
            $link=get_permalink($value->ID);
            $title=$value->post_title;
            $listado=get_the_category($value->ID);

            $padre_categoria="";
            foreach($listado as $key => $value) {

                if($value->category_parent==0){
            
                    $padre_categoria=$value->term_id;
                }
                else{
                    $padre_categoria=$value->category_parent;
                }
            }
            $padre=get_category($padre_categoria);
            ?>
            <article class="top-big-noticia">
                <a href="<?php echo get_permalink($id_post); ?>"><img class="foto-destacada" src="<?php echo  $url ;?>" alt="<?php echo  $title;?>"></a>
                <span class="fecha"><?php echo get_the_date('j F, Y',$id_post);?></span>
                <h2 class="titulo"> <a href="<?php echo get_permalink($id_post); ?>"><?php echo  $title;?></a></h2>
                <div class="info-detalle"> <a href="<?php echo get_permalink($id_post); ?>"><?php echo $sumilla;?></a></div>
                <div class="box-categoria color-type1 <?php echo $padre->slug;?>">
                    <span class="decorate"></span> <span class="text-categoria"><a href="<?php echo get_category_link($padre->term_id);?>"><?php echo $padre->name;?></a></span>
                 </div>
            </article>
            <div class="noticias-top-sub">
                <div class="cp-text-ultimo-minuto">
                    <span>Último <br>minuto</span>
                </div>
                <div class="cp-carousel-um">
                    <span class="nav-left">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-left-gray.png" alt="">
                    </span>
                <!-- carousel -->
                    <div class="owl-carousel carousel-ultimo-minuto">
                    <?php $custom_query = new WP_Query(array(
						'posts_per_page'=>6,
						'tag'=>'destacada-minuto')); ?>
					<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>	

                    <div>
                        <article class="item-ultimo-minuto">
                             <?php if (has_post_thumbnail() ) : ?>
								<a href="<?php echo get_permalink(); ?>"> 
								<?php the_post_thumbnail('small', array('class' => 'foto')); ?>
							    </a>
                            <?php endif;?>
                            <!--<img class="foto" src="https://via.placeholder.com/100x100" alt="">-->
                            <div class="detalle">
                                <span class="fecha"><?php echo get_the_date('j F, Y',$value->ID);?></span>
                                <h2 class="titulo"><a href="<?php echo get_permalink(); ?>"><?php echo code_short_text(get_the_title(),40);?></a></h2>
                                <div class="box-categoria color-type1">
                                    <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    
					<?php endwhile; ?>

                    <!--<div>
                        <article class="item-ultimo-minuto">
                            <img class="foto" src="https://via.placeholder.com/100x100" alt="">
                            <div class="detalle">
                                <span class="fecha">20 Agosto, 2020</span>
                                <h2 class="titulo">Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                                <div class="box-categoria color-type1">
                                    <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div>
                        <article class="item-ultimo-minuto">
                            <img class="foto" src="https://via.placeholder.com/100x100" alt="">
                            <div class="detalle">
                                <span class="fecha">20 Agosto, 2020</span>
                                <h2 class="titulo">Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                                <div class="box-categoria color-type1">
                                    <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                                </div>
                            </div>
                        </article>
                    </div>-->


                </div>
                <!-- end carousel-->
                <span class="nav-right">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-right-gray.png" alt="">
                </span>
                </div>
            </div>
        </div>
        <aside class="banner-top-aside">
            <div class="banner_large banner_pc" id="Middle1">
				<script>
					googletag.cmd.push(function() { googletag.display('Middle1'); });
				</script>
			</div>

        </aside>
    </section>
    <div class="cp-banner-row">
            <div class="banner_large banner_pc" id="Top2">
				<script>
					googletag.cmd.push(function() { googletag.display('Top2'); });
				</script>
			</div>

       
    </div>
    <?php

    // Check rows exists.
    if( have_rows('listado_categorias',7621) ):
        $ind=0;
        // Loop through rows.
        while( have_rows('listado_categorias',7621) ) : the_row();

            // Load sub field value.
            $cat_id_ = get_sub_field('categoria'); ?>  
            <section class="section-news">
                <div class="cp-head-section">
                    <div class="info-title">
                        <h2 class="title " style="color:<?php echo get_sub_field('color') ;?>"><?php echo get_sub_field('nombre_a_mostrar');?></h2>
                        <span class="detalle"><?php echo get_sub_field('detalle') ;?></span>
                    </div>
                    <div class="link-vermas">
                        <span class="text" style="color:<?php echo get_sub_field('color') ;?>"><a href="<?php echo get_category_link($cat_id_);?>">IR A LA SECCIÓN</a></span>
                        <span class="icon-circle"style="background-color:<?php echo get_sub_field('color') ;?>">
                            <img src="<?php echo get_stylesheet_directory_uri()?>/img/icono_white_arrow.png" alt="">
                        </span>
                    </div>
                </div>
            
                
                <?php 
           
                $custom_query = new WP_Query('posts_per_page=2&cat='.$cat_id_ ); 
             
                ?>  
         
      
                <div class="fila">
                        <?php while($custom_query->have_posts()) : $custom_query->the_post();?>
                        
                            <div class="col-item">
                                <article
                                class="cp-noticia"> 

                                <a href="<?php echo get_permalink();?>"><img class="foto-cp-noticia" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt=""></a>
                                <span class="cp-fecha"><?php echo $ind;?><?php echo get_the_date('j F, Y');?></span>
                                <h2 class="title-noticia"><a href="<?php echo get_permalink();?>"><?php echo code_short_text(get_the_title(),120);?></a></h2>
                                <div class="box-categoria ">
                                <span class="decorate" style="border-right-color:<?php echo get_sub_field('color') ;?>;border-bottom-color:<?php echo get_sub_field('color') ;?>"></span> <span class="text-categoria" style="color:<?php echo get_sub_field('color') ;?>"><a href="<?php echo get_category_link($cat_id_ );?>"><?php echo get_cat_name( $cat_id_ ) ;?></a></span>
                                </div>
                                </article>
                            </div>
                        
                        
                        <?php 
                        
                        endwhile; 
                        wp_reset_postdata();?>
                        <div class="col-item col-banner">
                            <div class="cp-banner">
                             
                                <div class="banner_large banner_pc"  id="Middle<?php echo  ($ind+2); ?>">
                                    <script>
                                        googletag.cmd.push(function() { googletag.display('Middle<?php echo  ($ind+2); ?>'); });
                                    </script>
                                </div>
                                
                            </div>
                        </div>

                    <!--<div class="col-item">
                        <article
                        class="cp-noticia"> 

                        <img src="https://via.placeholder.com/320x180" alt="">
                        <span class="cp-fecha">30 de agosto 2021</span>
                        <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                        <div class="box-categoria color-type1">
                        <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                        </div>
                        </article>
                    </div>
                    <div class="col-item">
                        <article
                        class="cp-noticia"> 

                        <img src="https://via.placeholder.com/320x180" alt="">
                        <span class="cp-fecha">30 de agosto 2021</span>
                        <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                        <div class="box-categoria color-type1">
                        <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                        </div>
                        </article>
                    </div>
                    
                
                    <div class="col-item col-banner">
                        <div class="cp-banner">
                            <img src="https://via.placeholder.com/300x250" alt="">
                        </div>
                    </div>-->
                </div>
            </section>


    <?php
      $ind++;
    // End loop.
    endwhile;

    // No value.
    else :
        // Do something...
    endif;



    ?>
    <div class="banner_large banner_pc" id="Top3">
				<script>
					googletag.cmd.push(function() { googletag.display('Top3'); });
				</script>
			</div>

    <!--<section class="section-news">
        <div class="cp-head-section">
            <div class="info-title">
                <h2 class="title color-type1">Noticias</h2>
                <span class="detalle">Las noticias del Perú y el mundo</span>
            </div>
            <div class="link-vermas">
                <span class="text color-type1">IR A LA SECCIÓN</span>
                <span class="icon-circle color-type1"></span>
            </div>
        </div>
        <div class="fila">
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type1">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type1">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            
         
            <div class="col-item col-banner">
                <div class="cp-banner">
                    <img src="https://via.placeholder.com/300x250" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="cp-banner-row">
        <img src="https://via.placeholder.com/970x90" alt="">
    </div>

    <section class="section-news">
        <div class="cp-head-section">
            <div class="info-title">
                <h2 class="title color-type2">Noticias</h2>
                <span class="detalle">Las noticias del Perú y el mundo</span>
            </div>
            <div class="link-vermas">
                <span class="text color-type2">IR A LA SECCIÓN</span>
                <span class="icon-circle color-type2"></span>
            </div>
        </div>
        <div class="fila">
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2 ">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            
         
            <div class="col-item col-banner">
                <div class="cp-banner">
                    <img src="https://via.placeholder.com/300x250" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="cp-banner-row">
        <img src="https://via.placeholder.com/970x90" alt="">
    </div>
    <section class="section-news">
        <div class="cp-head-section">
            <div class="info-title">
                <h2 class="title color-type2">Programas</h2>
                <span class="detalle">Las noticias del Perú y el mundo</span>
            </div>
            <div class="link-vermas">
                <span class="text color-type2">IR A LA SECCIÓN</span>
                <span class="icon-circle color-type2"></span>
            </div>
        </div>
        <div class="fila">
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2 ">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            
         
            <div class="col-item col-banner">
                <div class="cp-banner">
                    <img src="https://via.placeholder.com/300x250" alt="">
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            <div class="col-item">
                <article
                class="cp-noticia"> 

                <img src="https://via.placeholder.com/320x180" alt="">
                <span class="cp-fecha">30 de agosto 2021</span>
                <h2 class="title-noticia">Conoce a los protagonistas de Conoce a los protagonistas de “Los otros libertadores”, la próxima serie de Latina</h2>
                <div class="box-categoria color-type2 ">
                   <span class="decorate"></span> <span class="text-categoria">Noticias</span>
                </div>
                </article>
            </div>
            
         
            <div class="col-item col-banner">
                <div class="cp-banner">
                    <img src="https://via.placeholder.com/300x250" alt="">
                </div>
            </div>
        </div>
    </section>-->
</div>


<?php get_footer("custom");?>

<script>
$(function(){
    var owl_ultimo_minuto= $(".carousel-ultimo-minuto").owlCarousel({
        items:2,
        margin:10,
        dots:false,
        nav:false,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
                margin:0,
            },
            // breakpoint from 480 up
            600 : {
                items:2,
                margin:10,
            }
        }
    });


// Go to the next item
$('.cp-carousel-um .nav-right').click(function() {
    owl_ultimo_minuto.trigger('next.owl.carousel',[300]);
})
// Go to the previous item
$('.cp-carousel-um .nav-left').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_ultimo_minuto.trigger('prev.owl.carousel', [300]);
})


})
</script>