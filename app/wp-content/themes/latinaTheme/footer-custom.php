 <footer class="footer-site">
 	<div class="container">
 		<div class="col-1">
 			<div class="detail">
 			<img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo.png?v34">
 			<div class="info" >
 				<span>Latina</span>
 				<address>Av. San Felipe 968 - Jesús María</address>
 				<span>Télefono: 219 1000</span>
 			</div>
 			</div>
 			<div class="info-redes">
 				<span>Síguenos en: <a href=""><img src="<?php echo get_template_directory_uri()?>/img/iconos/fbwhite.png"></a> <a href=""><img src="<?php echo get_template_directory_uri()?>/img/iconos/twwhite.png"></a> <a href=""><img src="<?php echo get_template_directory_uri()?>/img/iconos/instagram.png"></a></span>
 				
 			</div>
 			<span class="see-more-footer">Ver más</span>
 		</div>
 		<div class="col-2">
 			<ul>
 				<!--<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/">Nosotros</li>
 				<li class="js-enlace" data-enlace="<?php echo get_home_url();?>/">Nuestras visión y compromiso</li>-->
 				<li class="js-enlace" data-ruta="<?php echo get_home_url();?>/politias-privacidad">Políticas de privacidad</li>
 				<li class="js-enlace" data-ruta="<?php echo get_home_url();?>/terminos-condiciones" >Términos y condiciones</li>
 				<!--<li>Linea editorial</li>-->
 				
 			</ul>
 		</div>
 		<div class="col-3">
 			<ul>
 				<li><a href="">Noticias</a></li>
 				<li><a href="">Entretenimiento</a></li>
 				<li><a href="">Deportes</a></li>
 				<li><a href="">Tendencias</a></li>
 				<li><a href="">Latina Play</a></li>
 				<li><a href="">Señal en vivo</a></li>
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

 <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/main.js?v<?php echo rand(1, 105500);?>"></script>
<?php wp_footer();?>
<?php echo get_field("codigo_footer","option");?>
</body>
</html>

<script>
  
	
	$(function(){

 	/*$(".js-enlace").click(function(){
 		window.location=$(this).attr("data-enlace");
 	})
 	$(".js-enlace-blank").click(function(){
 	
 		 window.open($(this).attr("data-enlace"), '_blank');
 	})
		
		$(".see-more-footer").click(function(){
			$(".footer-site .col-2, .footer-site .col-3, .footer-site .col-4").toggle();
		})
*/
	/*$(window).scroll(function() {
		let top=$(window).scrollTop();
		console.log(top);
		let top_menu=top;
		if(top<100){
			$(".espacios-bar").css("margin-top","-"+top+"px");
			
			$(".over-mega-menu.activo .menu").css("margin-top","-"+top_menu+"px");
			$(".over-mega-menu").css("top","100px")
			$("	.menu-fixed-desktop").css("display","none");
		}
		else{
			$(".espacios-bar").css("margin-top","-100px");	
			$(".over-mega-menu.activo .menu").css("margin-top","0px");
			$(".over-mega-menu.activo .menu").css("margin-top","0px");
			$("	.menu-fixed-desktop").css("display","flex");
			$("	.menu-fixed-desktop").css("margin-top","-100px");
			//$(".over-mega-menu").css("display","0px")
		}

	});*/
	/*

		$("#menu-site img").click(function(){
			$(".over-mega-menu").toggleClass("activo");
			let ruta_actual=$(this).attr("src");	
			
			let ruta_cambiar=$(this).attr("data-estado")
			console.log(ruta_cambiar);		
			$("#menu-site img").attr("src",ruta_cambiar);
			$("#menu-site img").attr("data-estado",ruta_actual);
		})*/
	})
</script>