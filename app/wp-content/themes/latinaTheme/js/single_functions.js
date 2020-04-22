
  $(window).load(function(){
    
    var limit_top=$(".lyt-interna .content-item-news").offset().top;
    var alto_elemento=$(".lyt-interna .content-item-news").innerHeight();
    var tope_inferior=$("#bar-bottom_detail-news").offset().top;

    var limite_sin_fixed=alto_elemento+limit_top;   

    var window_height=$(window).height();

    $(window).scroll(function(){



      var top_scroll=$(window).scrollTop();

       var tamano_consumo=(top_scroll*100)/tope_inferior;
  
      if(tamano_consumo<=100){

       $(".bar-avance").css("width",tamano_consumo+"%");
      }else{
         $(".bar-avance").css("width","100%");

      }
      
      if(top_scroll>limit_top){
        var total=top_scroll+alto_elemento;
        if(total<tope_inferior){
          $(".lyt-interna .content-item-news").addClass('fixed_content')
          $(".lyt-interna .content-item-news").removeClass('fixed_bottom')
        }
        else{
          $(".lyt-interna .content-item-news").removeClass('fixed_content')
          $(".lyt-interna .content-item-news").addClass('fixed_bottom')
        } 
        
        
      }
      else
      { $(".lyt-interna .content-item-news").removeClass('fixed_bottom')
        $(".lyt-interna .content-item-news").removeClass('fixed_content')
      

      }
    })
  })
  let action=0;
  let id_single;
  function siguienteNota(valor){


    if(action==0){

    }

  }

 function registro_ID_single(id)
 {
  id_single=id;
  console.log("id registrado es:" + id);
 }