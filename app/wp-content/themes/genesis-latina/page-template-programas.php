<?php 
/*
* Template Name: Programas
*
*/
get_header("custom");?>
<style>
  .cp-contenedor{
      background-color:black
  }
    </style>
 <div class="cp-contenedor">

 <!--<div class="cp-banner-row">
            <img src="https://via.placeholder.com/970x90" alt="">
</div>-->
 <?php

// Check rows exists.
if( have_rows('item_programa') ):

    // Loop through rows.
    while( have_rows('item_programa') ) : the_row();

        // Load sub field value.
        $titulo = get_sub_field('titulo');
        $color=get_sub_field("color");
        // Do something... ?>
        <section class="section-news">
            <div class="cp-head-section">
                <div class="info-title">
                    <h2 class="title color-type2" style="color:<?php echo $color;?>!important"><?php echo $titulo;?></h2>
                </div>
              
            </div>
            <div class="fila">
                <?php 

                if( have_rows('foto_programa') ):

                    // Loop through rows.
                    while( have_rows('foto_programa') ) : the_row();?>

                    <div class="col-item programas">
                        <article
                        class="cp-noticia"> 
                        <?php   $foto = get_sub_field('foto');?>

                            <img src="<?php echo $foto;?>" alt="">
                        </article>
                    </div>

                    <?php // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;?>
                
            
            
            </div>
        
        </section>
    <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;?>
 <!--<div class="cp-banner-row">
            <img src="https://via.placeholder.com/970x90" alt="">
        </div>-->
</div>
<?php get_footer("custom");?>