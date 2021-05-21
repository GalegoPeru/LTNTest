<?php 
$category = get_queried_object();
?>
<?php 
    $slug=$category->slug;
 
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


<div class="cp-contenedor" >
        <section id="bloque-top" class="
        bloque-top-v2 lyt-2" >
     
             <?php

                // Check rows exists.
                if( have_rows($contenido_bloque,"option") ):
                    $ind=0;

                    // Loop through rows.
                    while( have_rows($contenido_bloque,"option") ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('noticia'); ?>
                        <?php if($ind==0):?>
                            <article class="top-big-noticia-v2">
                                <a href="<?php echo get_permalink($sub_value->ID);?>">
                                    <img class="foto-destacada" src="<?php echo get_the_post_thumbnail_url($sub_value->ID);?>" title="<?php echo $sub_value->post_title;?>" alt="<?php echo $sub_value->post_title;?>">
                                </a>
                                    <span class="fecha">
                                    <?php echo get_the_date('j F, Y', $sub_value->ID);?>
                                    </span>
                                    <h2 class="titulo">
                                        <a href="<?php echo get_permalink($sub_value->ID);?>">
                                        <?php echo $sub_value->post_title;?>
                                    </a>
                                </h2>
                                    <div class="info-detalle">
                                        <?php echo get_field( "sumilla", $sub_value->ID );?>
                                    </div>
                                    <div class="box-categoria <?php echo  $type;?>">
                                        <span class="decorate"></span> <span class="text-categoria"><?php echo $category->name;?></span>
                                    </div>
                                </article>



                            <div class="cp-listado-top">
                            <?php else:?>
                                <article class="item-ultimo-minuto">
                            <a href="<?php echo get_permalink($sub_value->ID);?>"><img class="foto" src="<?php echo get_the_post_thumbnail_url($sub_value->ID);?>" alt=""></a>
                            <div class="detalle">
                                <span class="fecha"><?php echo get_the_date('j F, Y', $sub_value->ID);?></span>
                                <h2 class="titulo"><a href="<?php echo get_permalink($sub_value->ID);?>"><?php echo $sub_value->post_title;?></a></h2>
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

                // No value.
                else :
                    // Do something...
                endif;
            ?>
                    
                   
                          
            </div>
        </section>
        <div class="banner_large banner_pc" id="Top2">
				<script>
					googletag.cmd.push(function() { googletag.display('Top2'); });
				</script>
			</div>

        <section class="section-news">
                        <div class="cp-head-section">
                            <div class="info-title">
                                <h2 class="title  <?php echo  $type;?>">Nuestra programación</h2>
                                <span class="detalle"></span>
                            </div>
                          <!--  <div class="link-vermas">
                                <span class="text  <?php echo  $type;?>"><a href="<?php echo get_category_link($category_list_item);?>">IR A LA SECCIÓN</a></span>
                                <span class="icon-circle  <?php echo  $type;?>"></span>
                            </div>-->
                        </div>

                        <?php
$category = get_queried_object();

    if($category->parent==0):
        //echo "categoria sin padre";
        $category_sel=$category;
        //var_dump($category_sel);
    else:
        //echo "categoria con padre";
        $category_sel=get_category($category->parent);
       // var_dump($category_sel);
    endif;



    // Check rows exists.
    if( have_rows('sub_categorias',$category_sel) ): ?>
        <div class="cp-list-programacion"> 
       
                <span class="nav-left-m">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-left-gray.png" alt="">
                </span>
                <div class="owl-carousel owl-cp-list-programacion">
                <?php
                // Loop through rows.
                while( have_rows('sub_categorias',$category_sel) ) : the_row();

                    // Load sub field value.
                    $sub_value = get_sub_field('categoria_id'); 
                    $category_ind=get_category($sub_value);
                    // Do something...?>
                    <div>
                    <?php $foto_destacada = get_field('foto_card_categoria', $category_ind);?>
                    <a href="<?php echo get_category_link($sub_value) ;?>"> <img src="<?php echo $foto_destacada;?>" alt=""></a>
                    </div>
                    <?php
                // End loop.
                endwhile; ?>
                </div>
                         
                <span class="nav-right-m">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-right-gray.png" alt="">
                            </span>
                </div>
        <?php

    // No value.
    else :
        // Do something...
    endif;?>



        </section>

        <section>

            <?php 
    
            // Check rows exists.
            if( have_rows($lista_categorias,"option") ):
                $ind=0;

                // Loop through rows.
                while( have_rows($lista_categorias,"option") ) : the_row();

                    // Load sub field value.
                    $sub_value = get_sub_field('id_categoria_listada'); ?>
                    <?php
                     $category_list_item = get_category( $sub_value ); 
                    ?>
                    <section class="section-news">
                        <div class="cp-head-section">
                            <div class="info-title">
                                <h2 class="title  <?php echo  $type;?>"><?php  echo $category_list_item->name?></h2>
                                <span class="detalle"></span>
                            </div>
                            <div class="link-vermas">
                                <span class="text  <?php echo  $type;?>"><a href="<?php echo get_category_link($category_list_item);?>">IR A LA SECCIÓN</a></span>
                                <span class="icon-circle  <?php echo  $type;?>">
                                     <img src="<?php echo get_stylesheet_directory_uri()?>/img/icono_white_arrow.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="fila">
                                <?php  $args=array( 'cat' => $category_list_item->term_id,'posts_per_page'=>5 );?>
                                <?php $query = new WP_Query(  $args ); ?>
                                <?php $ind_banner=0;?>
                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="col-item">
                                    <article
                                    class="cp-noticia"> 

                                    <a href="<?php echo get_permalink();?>">
                                    <img class="foto-cp-noticia" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt=""></a>
                                    <span class="cp-fecha"><?php echo get_the_date('j F, Y');?></span>
                                    <h2 class="title-noticia"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h2>
                                    <div class="box-categoria  <?php echo  $type;?>">
                                    <span class="decorate"></span> <span class="text-categoria"><a href="<?php echo get_category_link($category_list_item);?>"><?php echo $category_list_item->name;?></a></span>
                                    </div>
                                    </article>
                                </div>
                               
                                    <?php if($ind_banner==1):?>
                                        <div class="col-item col-banner">
                                            <div class="cp-banner">
                                                <div class="banner_large banner_pc"  id="Middle<?php echo  ($ind+2); ?>">
                                                    <script>
                                                        googletag.cmd.push(function() { googletag.display('Middle<?php echo  ($ind+2); ?>'); });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                <?php $ind_banner++;?>
                                <?php endwhile; 
                                wp_reset_postdata();
                                else : ?>
                               
                                <?php endif; ?>    
                             

                           
                            
                        
                            
                        </div>
                    </section>

                      <?php
                    // End loop.
               $ind++;
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
            ?>
                    




         
        </section>
</div>