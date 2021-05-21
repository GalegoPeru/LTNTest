<?php get_header("custom");?>
<?php $category = get_queried_object();?>
<?php //var_dump($category->parent);?>
<?php 
$estado_menu=false;
    if($category->parent==0):
        //echo "categoria sin padre";
        $estado_menu=false;
        $category_sel=$category;
        //var_dump($category_sel);
    else:
        $estado_menu=true;
        //echo "categoria con padre";
        $category_sel=get_category($category->parent);
       // var_dump($category_sel);
    endif;


?> 
<?php 
    $slug=$category_sel->slug;
 
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

    // Check rows exists.
    if( have_rows('sub_categorias',$category_sel) ): ?>
        <div class="cp-bar-menu"> 
            <div class="bar-seccion-title bgcolor-<?php echo $type;?>"> <?php echo $category_sel->name;?></div>
            <div class="cp-bar-submenu">
                <span class="nav-left-m">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-left-gray.png" alt="">
                </span>
                <div class="owl-carousel owl-cp-sub-menu">
                    <?php if($estado_menu):?>
                    <div>  
                        <p class="<?php echo $type;?> activado-menu"><a href="<?php echo get_category_link($category->term_id) ;?>"><?php echo get_term($category->term_id)->name;?></a> </p>
                    </div>
                    <?php else:?>
                    <?php endif;?>
                <?php
                // Loop through rows.
                while( have_rows('sub_categorias',$category_sel) ) : the_row();

                    // Load sub field value.
                    $sub_value = get_sub_field('categoria_id'); 
                    // Do something...?>
                    <?php if($category->term_id==$sub_value):?>
                    
                    <?php else:?>
                        <div>
                        <p class=" <?php echo $category->term_id==$sub_value? "activado-menu ".$type:"";?>"><a href="<?php echo get_category_link($sub_value) ;?>"><?php echo get_term($sub_value)->name;?></a></p>
                      </div>
                    <?php endif;?>
                    <!-- <div>
                        <p class=" <?php //echo $category->term_id==$sub_value? "activado-menu ".$type:"";?>"><a href="<?php //echo get_category_link($sub_value) ;?>"><?php //echo get_term($sub_value)->name;?></a></p>
                    </div>-->
                    <?php
                // End loop.
                endwhile; ?>
                </div>
                            <span class="nav-right-m">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-right-gray.png" alt="">
                            </span>
                        </div>
                </div>
        <?php

    // No value.
    else :
        // Do something...
    endif;?>


<!--<div class="cp-bar-menu"> 
        <div class="bar-seccion-title bgcolor-type1"> Noticias</div>
        <div class="cp-bar-submenu">
            <span class="nav-left-m">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-left-gray.png" alt="">
            </span>
            <div class="owl-carousel owl-cp-sub-menu">
                    <div><p>Noticias</p></div>
                    <div><p>Noticias</p></div>
                    <div><p>Noticias</p></div>
                     <div><p>Noticias</p></div>
                    
            </div>
            <span class="nav-right-m">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow-right-gray.png" alt="">
            </span>
        </div>
</div>-->


<div class="cp-contenedor">
<div class="banner_large banner_pc mb-10" id="Top1">
				<script>
					googletag.cmd.push(function() { googletag.display('Top1'); });
				</script>
			</div>
            </div>

<?php// var_dump($category);?>
<?php 

if($category->term_id==358):

    // get_template_part("template-parts/content","subcategory-latinaplay");
   get_template_part("template-parts/content","category-novelas");

else:?>
<?php if($category->slug=="noticias" || $category->slug=="entretenimiento" || $category->slug=="deportes" ):?>
	<?php get_template_part("template-parts/content","categoria-principal");?>
<?php else:?>
	<?php get_template_part("template-parts/content","categoria-estandar");?>
<?php endif;?>
<?php endif;?>
<?php get_footer("custom");?>

<script>
$(function(){
    var owl_ultimo_minuto= $(".carousel-ultimo-minuto").owlCarousel({
        items:2,
        margin:10,
        dots:false,
        nav:false
    });
     var owl_sub_menu=$(".owl-cp-sub-menu").owlCarousel({
         items:5,
         responsive : {
            // breakpoint from 0 up
            0 : {
                items:2,
                margin:0,
            },
            // breakpoint from 480 up
            600 : {
                items:5,
              
            }
        }
     })

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



var owl_listado_programacion= $(".owl-cp-list-programacion").owlCarousel({
        items:5,
        margin:10,
        dots:false,
        nav:false,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:2,
                margin:10,
            },
            // breakpoint from 480 up
            600 : {
                items:3,
              
            },
            750 : {
                items:5,
              
            }
        }
    });
    
$('.cp-list-programacion .nav-right-m').click(function() {
    owl_listado_programacion.trigger('next.owl.carousel',[300]);
    
})
// Go to the previous item
$('.cp-list-programacion .nav-left-m').click(function() {
    
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_listado_programacion.trigger('prev.owl.carousel', [300]);
})



})
</script>
<?php ?>
<!--/* if($categoria->category_parent==44):?>
	
  get_template_part("template-parts/content","subcategory-latinaplay");
    get_template_part("template-parts/content","category-play");
 
 elseif($categoria->term_id==318):
	 // get_template_part("template-parts/content","subcategory-latinaplay");
    get_template_part("template-parts/content","category-novelas");

 else:
p get_template_part("template-parts/content","category");
 endif; */?>
</div>-->

