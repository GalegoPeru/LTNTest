<?php
/*
* Template Name: Página Novela
*/
get_header("custom");?>

<style>
    .banner-novela img{
        width:100% 
    }
  
    .info-novela{
        margin-top:20px
    }
    .info-novela h1{
        font-size:22px;
        color:black;
        font-weight:bold;
        margin-bottom:10px;
    }
    .info-novela p{
        font-size:16px;
        line-height:1.4;
    }
    .info-novela .detalle{
        margin-bottom:10px
    }
    .listado-actores{
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
    }
.listado-actores .item-actor{
  /*  width:160px;*/
  width:30%;
}
.listado-actores .item-actor img{
    width:100%;
}
.listado-actores .item-actor .datos {
    margin-top:10px

}
.listado-actores .item-actor .nombre1{
    display:block;
    font-weight:bold;
    font-size:16px;
    margin-bottom:5px
}
.listado-actores .item-actor .nombre2{
    display:block;
    font-size:14px;
    line-height:1.4;
}
.ver-episodios{
    display:inline-block;
    padding:10px 20px;
    color:white;
    background-color:#513CCA;
    margin-top:20px;
    margin-bottom:20px;
    cursor:pointer;
}
.sub-title-novela{
    font-size:22px;
    margin-top:20px;
    margin-bottom:10px;
    display:inline-block;
    font-weight:bold;
}
.info-novela .info{
display:flex;
margin-top:40px
}
.info-novela .info .col-info{
padding-right:30px
}
.info-novela .info .col-video{
    width:300px;
    margin-left:30px;
}
.info-novela .info .ver-video-promo{
    background-color:#513CCA;
    padding:10px;
    display:block;
    width:100%;
    color:white;
    font-weight:bold;
    text-align:center;
    
}
.info-novela .info .col-video iframe{
    vertical-align: top;
}
.info-adicional{
    display:flex;
    justify-content:space-between;

}
.info-adicional .galeria-fotos-novela{



}
.listado-fotos{
    width:300px;
    display:flex;
    justify-content:space-between;
    flex-wrap: wrap;
    margin-left:30px;
}
.info-adicional .galeria-fotos-novela .foto{
    width:140px;
    margin-bottom:20px;
}
.info-adicional .galeria-fotos-novela .sub-title-novela{
    padding-left:30px;
}
.info-adicional .galeria-fotos-novela img{
    width:100%;
}
.info-adicional .actores{
    flex-grow:1; 
   
}
.miniatura-novela{
    width:170px;
    position:absolute;
    left:30px;
    bottom:-60px;
}
.banner-novela{
        position:relative;
        margin-bottom:100px;
    }
.call{
    width:100%;
    margin-top:20px;
    margin-bottom:20px;
    min-height:150px;
    background-color:black;
}
@media (max-width:1024px){
    .info-novela{
        padding-left:10px;
        padding-right:10px;
    }
}
@media (max-width:600px){
    .info-novela .info .col-info{
        padding-right:0px;
    }
    .info-novela .info .col-video{
        width:100%;
        margin-left:0px!important;
    }
    .info-novela .info{
        flex-direction:column;
    }
    .info-novela .info .col-video{
        margin-left:30px;
    }
    .info-novela .info .col-video iframe{
        width:100%;
        height:270px;
        margin-bottom:15px;
    }
    .info-adicional{
        flex-direction:column;
    }
    .listado-fotos{
        width:100%;
        margin-left:0px;
        justify-content:space-evenly;
    
    }
    .miniatura-novela{
        display:none;
    }
    .banner-novela{
        margin-bottom:0px;
    }
}
</style>
<div class="container container-home">
	<div class="publicidad-970">
		<div class="banner_large banner_pc" id="Top1">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top1'); });
		    </script>
		</div>

	</div>
    <div class="contenido-novela-page">
        <div class="banner-novela">
            <img src="<?php echo get_field('foto_portada');?>" alt="">
            <div class="miniatura-novela">
                <img src="<?php echo get_field('foto_miniatura');?>" alt="">
            </div> 
            
        </div>
        <div class="info-novela"> 
            <div class="info">
                <div class="col-info">
                    <h1><?php echo the_title();?></h1>
                    <div class="detalle">
                        <p><?php echo get_field('descripcion');?> </p>
                    </div>
                    <span class="ver-episodios"><a href="<?php echo get_field('link_destino');?>">Ver episodios</a></span>
                </div>
                <div class="col-video">
                    <div class="video-promo">
                    <iframe src='https://mdstrm.com/embed/<?php echo get_field('codigo_video_promo');?>' width='300' height='180' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
                    </div>
                    <span class="ver-video-promo">Ver video Promo</span>
                </div>

            </div>

           
            <div class="info-adicional">
                <div class="actores">
                    <span class="sub-title-novela">Cast</span>
                    <div class="listado-actores">
                    <?php

                        // Check rows exists.
                        if( have_rows('personajes') ):

                            // Loop through rows.
                            while( have_rows('personajes') ) : the_row();

                                // Load sub field value.
                                $foto_personaje = get_sub_field('foto_personaje');
                                $nombre = get_sub_field('nombre');
                                $nombre_personaje = get_sub_field('nombre_personaje');
                                // Do something... ?>

                                <div class="item-actor">
                                    <img src="<?php echo $foto_personaje;?>" alt="">
                                    <div class="datos">
                                        <span class="nombre1"><?php echo $nombre;?></span>
                                        <span  class="nombre2"><?php echo $nombre_personaje;?></span>    
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

                      
                     
                      
                    
                    </div>
                    <!--<div>
                        <span class="ver-episodios">Ver episodios</span>
                    </div>-->
                </div>
                <div class="galeria-fotos-novela">
                <span class="sub-title-novela">Galería de fotos</span>
                     <div class="listado-fotos">
                       <?php

                        // Check rows exists.
                        if( have_rows('galeria_foto') ):

                            // Loop through rows.
                            while( have_rows('galeria_foto') ) : the_row();

                                // Load sub field value.
                                $foto = get_sub_field('foto');
                             
                                // Do something... ?>
                                 <div class="foto">
                                    <img src="<?php echo  $foto;?>" alt="">
                                </div>
                      <?php
                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                        ?>

                        
                    </div>

                </div>
            
            </div>
            
        </div>

    </div>

</div>

<?php get_footer("custom");?>