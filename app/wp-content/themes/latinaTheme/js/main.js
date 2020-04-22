

$(document).ready(function(){
	opciones_series={
		0:{
            items:1,
            nav:false

        },
        400:{
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        970:{
            items:3,
            nav:false,
           
        }
	}
 var list_breaking=$(".list-breaking-news").owlCarousel(
  		{
  		
  			margin:10,
		    loop:true,
		    autoWidth:true,
		    items:1,

  		}
  	);
 $(".nav-left-ultima").click(function(event) {
    list_breaking.trigger('prev.owl');
 });
 $(".nav-right-ultima").click(function(event) {
   list_breaking.trigger('next.owl');
 });




  var list_series=$(".list-series").owlCarousel(
  		{
  			nav:false,
  			dots:false,
  			margin:0,
    		loop:true,
    		items:3,
    		responsive:opciones_series
  		}
  	);
  $(".nav-left-1").click(function(){
     list_series.trigger('prev.owl');
  })
  $(".nav-right-1").click(function(){
       list_series.trigger('next.owl');
  })


   $(".carousel-categoria").owlCarousel({ 
        margin:0,
        dots:true,
        loop:true,
        items:1})

  $("#btn-buscar").click(function(){
  
    $(".lyt-buscador .buscador").fadeToggle(400,function(){
      $(".inp-buscador").focus();
      $(".inp-buscador").val("")  
    });
    
  })





  
});
 function versubitems(ele){
    $(ele).parent().toggleClass("activo");
  $(ele).parent().find("ul").slideToggle();
 }
$("#js-movil-menu").click(function(){
  $(".menu-lateral").toggleClass("activo");
})

$(function(){

  // cargando contendio de menu
  let config={
    url:"https://latinademo.s3.amazonaws.com/web/menu.json",
    dataType:"json",
    success:function(data){
     
     let bloque=""
     for (var i = 0; i <data.length; i++) {
       let items_menu=""
       let items=data[i].items;
       for (var j = 0; j <items.length; j++) {
          items_menu+= `<li><a href="${items[j].link}">${items[j].opcion}</a></li>`
       }


      bloque=`<div class="col-1">
        <ul class="lista-menu">
          <li class="bold">${data[i].opcion}</li>
         ${items_menu}
        </ul>
      </div>`;
      bloque_menu_movil=`
      <div class="bloque-item-menu">
       <span onclick="versubitems(this)">${data[i].opcion}</span>
          <ul>
          ${items_menu}
          </ul>
      </div>
      `
     $(".menu").append(bloque)
      $("#menu-lateral-movil").append(bloque_menu_movil)      
     }
     
     /*$(".menu").append(`<div class="col-2">
        <img src="https://via.placeholder.com/180x220">
      </div>`
      )*/

    }
  }
  $.ajax(config);

    $(".tab-contenido li").click(function(e) {
   
  /* Act on the event */
      e.preventDefault();
      $(".tab-contenido li").removeClass("active");
      $(this).addClass("active");
      let id=$(this).attr("data-id")

      $.ajax({
      url : dcms_vars.ajaxurl,
      type: 'post',
      data: {
        action : 'dcms_ajax_readmore',
        id_category: id
      },
      beforeSend: function(){
          $(".list-news-ajax").html("");
          //$(".list-news-section").append("CARGANDO...");
      },
      success: function(resultado){
        
        $(".list-news-ajax").html("");
        $(".list-news-ajax").append(resultado)
          
      }

    })

    });
  

    let items=$(".tab-contenido li");
  
    $(items[0]).addClass("active");
    $(items[0]).click();




  $(window).scroll(function() {
    let top=$(window).scrollTop();
  
    if(top<100){
      $(".espacios-bar").css("margin-top","-"+top+"px");
    }
    else{
      $(".espacios-bar").css("margin-top","-100px");  
    }

  });   


  $(".box-compartir img").click(function(){
  
    let url = $(this).attr("data-url");
    window.open(url, '_blank','width=550,height=600');


  })


  $(".js-enlace").click(function(){
    window.location=$(this).attr("data-enlace");
  })
  $(".js-enlace-blank").click(function(){
  
     window.open($(this).attr("data-enlace"), '_blank');
  })
    
    $(".see-more-footer").click(function(){
      $(".footer-site .col-2, .footer-site .col-3, .footer-site .col-4").toggle();
    })


    $(window).scroll(function() {
    let top=$(window).scrollTop();
   
    let top_menu=top;
    if(top<100){
      $(".espacios-bar").css("margin-top","-"+top+"px");
      
      $(".over-mega-menu.activo .menu").css("margin-top","-"+top_menu+"px");
      $(".over-mega-menu").css("top","100px")
      $(" .menu-fixed-desktop").css("display","none");
    }
    else{
      $(".espacios-bar").css("margin-top","-100px");  
      $(".over-mega-menu.activo .menu").css("margin-top","0px");
      $(".over-mega-menu.activo .menu").css("margin-top","0px");
      $(" .menu-fixed-desktop").css("display","flex");
      $(" .menu-fixed-desktop").css("margin-top","-100px");
      //$(".over-mega-menu").css("display","0px")
    }

  });

    $("#menu-site img").click(function(){
      $(".over-mega-menu").toggleClass("activo");
      let ruta_actual=$(this).attr("src");  
      
      let ruta_cambiar=$(this).attr("data-estado")
     
      $("#menu-site img").attr("src",ruta_cambiar);
      $("#menu-site img").attr("data-estado",ruta_actual);
    })



    $(".container-player-fixed").addClass("show");
    $(".cerrar-player").click(function(){
      $(".container-player-fixed").remove();
    })
  



  
})



  

  ///** detectando el click en el contenido **///



  function registro_consumo(valor_propiedad){
    var _favoritos=localStorage.getItem("favoritos");
    //console.log(_favoritos);
    if(_favoritos==null){
      _favoritos={};
    }
    else{
      _favoritos=_favoritos.replace('""','"').replace('""','"').replace('"{','{').replace('}"',"}");

      _favoritos=JSON.parse(_favoritos);

    }
    var _propiedad=valor_propiedad;
    var contador=_favoritos[_propiedad];

    if(contador==undefined){
    
      _favoritos[_propiedad]=0;
    }
    else{
      _favoritos[_propiedad]=_favoritos[_propiedad]+1;
    }
    
    _favoritos=JSON.stringify(_favoritos).replace(/\\/g,"")
    
    localStorage.setItem("favoritos",_favoritos);
    
  }

/*
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
            
                  
                  //$(".list-news-section").append("CARGANDO...");
              },
              success: function(resultado){
                console.log("resultado")
                console.log(resultado);
                //$(".list-news-ajax").html("");
                //$(".list-news-ajax").append(resultado)
                  
              },
              error:function(error){
            
              }


            })


     }
    
   
    console.log(base);
    console.log(slug);
  }
mostar_favorito();
*/