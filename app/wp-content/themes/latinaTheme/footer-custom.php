<footer class="footer-site">
 	<div class="container">
 		<div class="col-1">
 			<div class="detail">
        <a href="<?php echo get_home_url();?>">
 			<img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo.png?v34" alt="Latina Televisión" title="Latina Televisión"></a>
 			<div class="info" >
 				<span>Latina</span>
 				<address>Av. San Felipe 968 - Jesús María</address>
 				<span>Télefono: 219 1000</span>
 			</div>
 			</div>
 			<div class="info-redes">
 				<span>Síguenos en: <a target="_blank" href="https://www.facebook.com/Latina.pe">
          <img src="<?php echo get_template_directory_uri()?>/img/iconos/fbwhite.png">
        </a> 
        <a href="https://twitter.com/Latina_pe" target="_blank">
          <img src="<?php echo get_template_directory_uri()?>/img/iconos/twwhite.png">
        </a> 
        <a href="https://www.instagram.com/Latina.pe/" target="_blank">
          <img src="<?php echo get_template_directory_uri()?>/img/iconos/instagram.png">
        </a></span>
 				
 			</div>
 			<span class="see-more-footer">Ver más</span>
 		</div>
 		<div class="col-2">
 			<ul>
 				<!--<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/">Nosotros</li>
 				<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/">Nuestras visión y compromiso</li>-->
 				<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/politicas-de-privacidad/">Políticas de privacidad</li>
 				<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/terminos-y-condiciones/" >Términos y condiciones</li>
 				<!--<li>Linea editorial</li>-->
 				
 			</ul>
 		</div>
 		<div class="col-3">
 			<ul>
 				<li><a href="<?php echo get_home_url();?>/noticias/">Noticias</a></li>
 				<li><a href="<?php echo get_home_url();?>/entretenimiento/">Entretenimiento</a></li>
 				<li><a href="<?php echo get_home_url();?>/deportes/">Deportes</a></li>
 				<li><a href="<?php echo get_home_url();?>/tendencias/">Tendencias</a></li>
 				<li><a href="<?php echo get_home_url();?>/latina-play/">Latina Play</a></li>
 				<li><a href="<?php echo get_home_url();?>/tvenvivo/" alt="Ver Latina tv en vivo" title="Ver Latina tv en vivo" >Señal en vivo</a></li>
 			</ul>
 		</div>
 		<div class="col-4">
 			<span class="title-download">Encuentranos también en:</span>
 			<div class="item-download js-enlace-blank" data-enlace="https://itunes.apple.com/pe/app/latina/id1003739866?mt=8">
 				<img src="<?php echo get_template_directory_uri()?>/img/iconos/googleplay.png">
 				<span>Descárgala ahora en Google Play </span>
 			</div>

 			<div class="item-download js-enlace-blank" data-enlace="https://play.google.com/store/apps/details?id=com.applicaster.pe.frecuencia&hl=es_PE">
 				<img src="<?php echo get_template_directory_uri()?>/img/iconos/appstore.png">
 				<span>Descárgala ahora en App store </span>
 			</div>
 			

 		</div>
 	</div>

 	<!-- /267164699/latina.pe_Floating -->
<div id='Floating'><script>googletag.cmd.push(function(){googletag.display('Floating')})</script></div>


<!-- /267164699/latina.pe_Zocalo -->
<div id='Zocalo'><script>googletag.cmd.push(function(){googletag.display('Zocalo')})</script></div>


 </footer>

<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/main.js?v<?php echo rand(1, 105500);?>"></script>-->
<?php 
if(is_single()){ ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/single_functions.js?v<?php echo rand(1, 105500);?>"></script>
<?php }
?>
<?php wp_footer();?>
<?php echo get_field("codigo_footer","option");?>
</body>
</html>
<script>
	

	  function mostar_favorito(){
     var _favoritos=localStorage.getItem("favoritos");
     console.log(_favoritos);
     if(_favoritos==null){
        console.log("no tiene favoritos");
     }
     else{
          _favoritos=_favoritos.replace('""','"').replace('""','"').replace('"{','{').replace('}"',"}");
             if(_favoritos==null){
              _favoritos={};
            }
            else{
              _favoritos=JSON.parse(_favoritos);
              var base=0;
              var slug="";
              for(key in _favoritos){
                if(_favoritos[key]>base){
                  base=_favoritos[key]
                  slug=key;
                }
                
              }
            }


            $.ajax({
              url : dcms_vars.ajaxurl,
              type: 'post',
              data: {
                action : 'dcms_ajax_load',
                slug_cat: slug
              },
              beforeSend: function(){
                 
              },
              success: function(resultado){
              $("#tu_contenido .title-info").show();
               $("#tu_contenido .row").html(resultado);
                  
              },
              error:function(error){
            
              }


            })


     }
    
   
    //console.log(base);
    //console.log(slug);
  }
mostar_favorito();

$(function(){
  $("#pub-take-over").addClass("show-take");
  setTimeout(function(){
    $("#pub-take-over").removeClass("show-take");
  },6000)
})
</script>
