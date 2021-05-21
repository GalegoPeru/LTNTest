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
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/bettyfondo.png" alt="">
            <div class="miniatura-novela">
                <img src="https://via.placeholder.com/170x270" alt="">
            </div> 
            
        </div>
        <div class="info-novela"> 
            <div class="info">
                <div class="col-info">
                    <h1>Yo Soy Betty</h1>
                    <div class="detalle">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sunt error at vitae magnam suscipit voluptas vel repudiandae non exercitationem nostrum explicabo ducimus ut iure, labore molestiae voluptate aperiam quo?</p>
                    </div>
                    <span class="ver-episodios">Ver episodios</span>
                </div>
                <div class="col-video">
                    <div class="video-promo">
                    <iframe src='https://mdstrm.com/embed/5fcc5baf9e31a84b27f7762c' width='300' height='180' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
                    </div>
                    <span class="ver-video-promo">Ver video Promo</span>
                </div>

            </div>
            <div class="info-adicional">
                <div class="actores">
                    <span class="sub-title-novela">Cast</span>
                    <div class="listado-actores">
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                        <div class="item-actor">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/personaje.png" alt="">
                            <div class="datos">
                                <span class="nombre1">Elyfer Torres</span>
                                <span  class="nombre2">Beatriz “Betty” Aurora Rincón Lozano</span>    
                            </div>
                            
                            
                        </div>
                    
                    </div>
                    <!--<div>
                        <span class="ver-episodios">Ver episodios</span>
                    </div>-->
                </div>
                <div class="galeria-fotos-novela">
                <span class="sub-title-novela">Galería de fotos</span>
                     <div class="listado-fotos">
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">  
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                        <div class="foto">
                            <img src="https://via.placeholder.com/200x150" alt="">
                        </div>
                    </div>

                </div>
            
            </div>
            
        </div>

    </div>

</div>