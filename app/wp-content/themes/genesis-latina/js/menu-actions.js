let base_url="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/assets/";
//let base_url="https://sitelatinaassets.latina.pe/assets/"
let data_programacion;
jQuery(function($){
  jQuery(".box-menu-ico").click(function(){
    
        $(".contenido-menu-desktop").toggle();
    })
    
    jQuery("#ico-buscar-top").click(function(){
    
        jQuery(".box-buscar-top").toggle();
    })
    $(window).scroll(function(){
        
        if($(window).scrollTop()>200){
            $(".box-buscar-top").hide();
            $(".contenido-menu-desktop").hide();
        }

        if($(window).scrollTop()>130){
            $(".menu-fixed").addClass("down-menu")
            $(".box-skin").addClass("menuscroll");
        }
        else{
            $(".menu-fixed").removeClass("down-menu")
            $(".box-skin").removeClass("menuscroll");
        }
    })

    $(document).mouseup(function(e){
    /*    var container = $(".box-buscar-top");
    
            if(!container.is(e.target) && container.has(e.target).length === 0){
               
                container.hide();
             
            }else{
              
                
              
            }
*/
            /*var menuDesktop = $(".contenido-menu-desktop");
    
            if(!menuDesktop.is(e.target) && menuDesktop.has(e.target).length === 0){
               
                menuDesktop.hide();
             
            }else{
              
                
              
            }*/
       
    });
    $("#opc-menu-movil").click(function(){
        $(".contenido-menu-movil").slideToggle();
    })
    cargarMenuPrincipal();
    cargarSubMenu();
    obtenerProgramacion()
})


/**** funciones de carga de menus ****/
function cargarMenuPrincipal(){
    jQuery("#categorias-top-menu").html("");
    jQuery("#categorias-top-menu-fiex").html("");
    let url=base_url+"js/menu-principal.json?V1233"
    fetch(url)
    .then((data)=>{
        
        return data.json();
    })
    .then((data)=>{ 
        
        let content="";
        for(let item of data){
            if(item.img){
                content=content+`<li><a href="${item.link}" target="${item.target}"><img src="${item.img}"></a></li>`    
            }
            else{
                content=content+`<li><a href="${item.link}" target="${item.target}">${item.title}</a></li>`    
            }
            
        }
        jQuery("#categorias-top-menu").append(content)
        jQuery("#categorias-top-menu-fixed").append(content)
    });
}


function cargarSubMenu(){
  
    let url=base_url+"js/sub-menu.json?V1233"
    fetch(url)
    .then((data)=>data.json())
    .then((data)=>{ 
   
        let content="";
        for(let item of data){
            head=`<div class="col">
                    <span class="title"><a target="${item.target}" href="${item.link}">${item.title}</a></span>
                        <ul class="sub-items">`;
            let body="";
            for(let subitem of item.items)
            {
                body=body+`<li><a href="${subitem.link}" target="${item.target}">${subitem.title}</a></li>`;
            }
                                            
            foot=`</ul></div>`;
            let col_content=head+body+foot;
            content=content+col_content;
        }
    
        jQuery("#contendio-menu-columnas").html(content);
    });
}

function obtenerProgramacion(){
    let url=base_url+"js/programacion.json?V1233"
    fetch(url)
    .then((data)=>data.json())
    .then((data)=>{     
        console.log(data);
        data_programacion=data;
        programaEnVivo(data)
        detectandodiaactual();
    })
}
$(".tab-dias-programacion li").click(function() {

    $(".tab-dias-programacion li").removeClass("activado");
    $(this).addClass("activado");
    // $(".tab-dias-programacion li").removeClass("activado");
    // $(this).addClass("activado");
    // let dia = $(this).attr("data-dia");
    let numdia = $(this).attr("data-numdia");
    console.log(numdia)
    console.log(":::::")
  
   // cargarContenido(numdia, "tvenvivo");
   cargarContenidoProgramacion(numdia)


})

function detectandodiaactual(page = null) {
    let actual = new Date();
    let dia_actual = actual.getDay();
  
    let numdia="lun";
    switch(dia_actual)
    {
        case 0:
             numdia="dom"
            break;
        case 1:
             numdia="lun"
            break;
        case 2:
             numdia="mar"
            break;
        case 3:
             numdia="mie"
            break;
        case 4:
             numdia="jue"
            break;
        case 5:
             numdia="vie"
            break;
        case 6:
             numdia="sab"
            break;
        default:
             numdia="lun"
            break;
    }
    cargarContenidoProgramacion(numdia);
    $(".tab-dias-programacion li").removeClass("activado");
    $(`li[data-numdia="${numdia}"]`).addClass("activado");
    //cargarContenido(dia_actual, page);


}

function cargarContenidoProgramacion(numdia){
    console.log("-----")
    console.log(data_programacion);
    console.log(data_programacion[numdia]);
    let am_contenido=data_programacion[numdia].am;
    let pm_contenido=data_programacion[numdia].pm;
    console.log(am_contenido)
    console.log(pm_contenido)
    let ele="";
    for(let item of am_contenido){
         ele=ele+`<li class=""> <span class="hora inicio ">${item.hora_inicio}</span> <span class="hora fin">${item.hora_fin}</span> <span class="prg-programa">${item.programa}</span> </li>`;
    }
    $("#programas-am").html(ele)

    let ele_pm="";
    for(let item of pm_contenido){
        ele_pm=ele_pm+`<li class=""> <span class="hora inicio ">${item.hora_inicio}</span> <span class="hora fin">${item.hora_fin}</span> <span class="prg-programa">${item.programa}</span> </li>`;
    }
    $("#programas-pm").html(ele)

}
function programaEnVivo(programacion){
    let programa_actual={};
    let date=new Date();
    let hour=date.getHours();
    let minutes=date.getMinutes();
    let day_week=date.getDay();
    let time_total=hour*60+minutes;
    let part_day="am";
    
    if(time_total>720){
        part_day="pm";
    }
    let dias_semana=["dom","lun","mar","mie","jue","vie","sab"];
    
    let dia_actual=dias_semana[day_week];
    let parte_del_dia=part_day;
    let contenido_programacion=programacion[dia_actual][parte_del_dia];
    for(let item of contenido_programacion){
        
        let _hora_inicio=item.hora_inicio.split(":");
        let minutos_inicio=(parseInt(_hora_inicio[0]*60))+parseInt(_hora_inicio[1]);
        

        let _hora_fin=item.hora_fin.split(":");
        let minutos_fin=parseInt((_hora_fin[0]*60))+parseInt(_hora_fin[1]);
        
       
        if(time_total>minutos_inicio && time_total<minutos_fin){
           
            programa_actual=item;
            break;
        }
     
    
    }
   
    $("#texto-programa-envivo").text(programa_actual.programa)
    $("#texto-programa-vivo-movil").text(programa_actual.programa)
    $("#img-programa-envivo").attr("src",programa_actual.img)
    $("#img-programa-vivo-movil").attr("src",programa_actual.img)

    
    
}

