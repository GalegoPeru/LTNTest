/*
  function ver_buscador(){
    $(".lyt-buscador .buscador").fadeToggle(400, function() {
        $(".inp-buscador").focus();
        $(".inp-buscador").val("")
    });
}*/
 
$(document).ready(function() {
    console.log(":::::")
    opciones_series = {
        0: {
            items: 1,
            nav: false

        },
        400: {
            items: 2,
            nav: false
        },
        600: {
            items: 3,
            nav: false
        },
        970: {
            items: 3,
            nav: false,

        }
    }
    var list_breaking = $(".list-breaking-news").owlCarousel({

        margin: 10,
        loop: true,
        autoWidth: true,
        items: 1,
        /*responsive:{
            0:{
                dots:true
            },
            400:{
                dots:true
            }
        }*/
    });
    $(".nav-left-ultima").click(function(event) {
        list_breaking.trigger('prev.owl');
    });
    $(".nav-right-ultima").click(function(event) {
        list_breaking.trigger('next.owl');
    });


    var descatada_single = $(".carousel-destacada-single").owlCarousel({
        nav: false,
        dots: false,
        margin: 0,
        loop: true,
        items: 1,

    });

    $(".destacada-single .nav-left").click(function(event) {
        descatada_single.trigger('prev.owl');
    });
    $(".destacada-single .nav-right").click(function(event) {
        descatada_single.trigger('next.owl');
    });






    var list_series = $(".list-series").owlCarousel({
        nav: false,
        dots: false,
        margin: 0,
        loop: true,
        items: 3,
        responsive: opciones_series
    });
    $(".nav-left-1").click(function() {
        list_series.trigger('prev.owl');
    })
    $(".nav-right-1").click(function() {
        list_series.trigger('next.owl');
    })


    $(".carousel-categoria").owlCarousel({
        margin: 0,
        dots: true,
        loop: true,
        items: 1
    })
/*
    $("#btn-buscar").click(function() {

        $(".lyt-buscador .buscador").fadeToggle(400, function() {
            $(".inp-buscador").focus();
            $(".inp-buscador").val("")
        });

    })*/

  


/*
    $("#js-movil-menu").click(function() {
        $(".menu-lateral").toggleClass("activo");
    })*/

    //console.log("..cargasnod sub menu");
    //nuevoCargar();
    cargarSubMenu();
    $(".cerrar-ultimo-minuto").click(function() {
        $(".ultimo-minuto-caja").slideUp(500);
    })
});

function nuevoCargar(){
    let path = window.location;
    //let slug = path.pathname.replace(/\//g, "");
    let slug = path.pathname.split("/")[1];
    console.log(slug);
    let seleccionado;
    let url = "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/assets/js/sub-menu.json?v654468798";
    fetch(url)
        .then((data) => { return data.json() })
        .then((data) => {
            for(let item of data){
                //console.log(item.title);
                let title_=item.title.replace(" ","-").toLowerCase();
                //console.log(title_);
                if(slug==title_){
                    seleccionado=item;
                    break;
                }
            }
            console.log(seleccionado)
            //console.log(data);
           
            if ( seleccionado.items) {
                $("#sub-menu-left").show();
                $("#sub-menu-right").show();
                for (var i = 0; i < seleccionado.items.length; i++) {
                    $("#sub-menu-categoria").append(`<div class="item-submenu"><a href="${seleccionado.items[i].link}">${seleccionado.items[i].title}</a><div>`)
                }
                var owlsubmenu = $("#sub-menu-categoria").owlCarousel({
                    margin: 3,
                    loop: false,
                    dots: false,
                    nav: false,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: 1,
                            margin: 10,

                        },
                        // breakpoint from 480 up
                        660: {
                            items: 1,
                            margin: 10,

                        },
                        // breakpoint from 768 up
                        768: {
                            items: 6,
                        }
                    }


                });


                $("#sub-menu-left").click(function() {
                    owlsubmenu.trigger('prev.owl');
                })
                $("#sub-menu-right").click(function() {
                    owlsubmenu.trigger('next.owl');
                })





            } else {
                // submenu off
            
            }
        
        });
}
function cargarSubMenu__() {
    let path = window.location;
    //let slug = path.pathname.replace(/\//g, "");
    let slug = path.pathname.split("/")[1];
    console.log(slug);
    console.log(":::::::");
    let url = "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/js/submenu.json?v654468798";
    fetch(url)
        .then((data) => { return data.json() })
        .then((data) => {
            console.log(data);
            /*
            let submenu = data[slug];
            $("#sub-menu-categoria").html("");
            if (submenu) {
                $("#sub-menu-left").show();
                $("#sub-menu-right").show();
                for (var i = 0; i < submenu.items.length; i++) {
                    $("#sub-menu-categoria").append(`<div class="item-submenu"><a href="${submenu.items[i].slug}">${submenu.items[i].name}</a><div>`)
                }
                var owlsubmenu = $("#sub-menu-categoria").owlCarousel({
                    margin: 3,
                    loop: false,
                    dots: false,
                    nav: false,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: 1,
                            margin: 10,

                        },
                        // breakpoint from 480 up
                        660: {
                            items: 1,
                            margin: 10,

                        },
                        // breakpoint from 768 up
                        768: {
                            items: 6,
                        }
                    }


                });


                $("#sub-menu-left").click(function() {
                    owlsubmenu.trigger('prev.owl');
                })
                $("#sub-menu-right").click(function() {
                    owlsubmenu.trigger('next.owl');
                })





            } else {
                // submenu off
            }*/

        })
}

function versubitems(ele) {
    $(ele).parent().toggleClass("activo");
    $(ele).parent().find("ul").slideToggle();
}


$(function() {
    //let url_menu = "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/js/menu.json?v321542342348";
    //let url_menu="https://latinademo.s3.amazonaws.com/web/menu.json";
    // cargando contendio de menu
    /*let config = {
        url: url_menu,
        dataType: "json",
        success: function(data) {

            let bloque = ""
            for (var i = 0; i < data.length; i++) {
                let items_menu = ""
                let items = data[i].items;
                for (var j = 0; j < items.length; j++) {
                    items_menu += `<li><a href="${items[j].link}">${items[j].opcion}</a></li>`
                }


                bloque = `<div class="col-1">
        <ul class="lista-menu">
          <li class="bold">${data[i].opcion}</li>
         ${items_menu}
        </ul>
      </div>`;
                bloque_menu_movil = `
      <div class="bloque-item-menu activo">
       <span onclick="versubitems(this)">${data[i].opcion}</span>
          <ul style="display:none">
          ${items_menu}
          </ul>
      </div>
      `
                $(".menu").append(bloque)
                $("#menu-lateral-movil").append(bloque_menu_movil)
            }



        }
    }
    $.ajax(config);*/

    /*$(".tab-contenido li").click(function(e) {

     
        e.preventDefault();
        $(".tab-contenido li").removeClass("active");
        $(this).addClass("active");
        let id = $(this).attr("data-id")

        $.ajax({
            url: dcms_vars.ajaxurl,
            type: 'post',
            data: {
                action: 'dcms_ajax_readmore',
                id_category: id
            },
            beforeSend: function() {
                $(".list-news-ajax").html("");
                //$(".list-news-section").append("CARGANDO...");
            },
            success: function(resultado) {

                $(".list-news-ajax").html("");
                $(".list-news-ajax").append(resultado)

            }

        })

    });


    let items = $(".tab-contenido li");

    $(items[0]).addClass("active");
    $(items[0]).click();*/


/*

    $(window).scroll(function() {
        let top = $(window).scrollTop();

        if (top < 150) {

            $(".box-fixed-top2").hide();
            //  $(".espacios-bar").css("margin-top", "-" + top + "px");
        } else {
            $(".box-fixed-top2").show();
            // $(".espacios-bar").css("margin-top", "-100px");
        }

    });*/


    $(".box-compartir img").click(function() {

        let url = $(this).attr("data-url");
        window.open(url, '_blank', 'width=550,height=600');


    })


    $(".js-enlace").click(function() {
        window.location = $(this).attr("data-enlace");
    })
    $(".js-enlace-blank").click(function() {

        window.open($(this).attr("data-enlace"), '_blank');
    })

    $(".see-more-footer").click(function() {
        $(".footer-site .col-2, .footer-site .col-3, .footer-site .col-4").toggle();
    })

/*
    $(window).scroll(function() {
        let top = $(window).scrollTop();
       

        let top_menu = top;
        if (top < 150) {
            //$(".espacios-bar").css("margin-top", "-" + top + "px");

            $(".over-mega-menu.activo .menu").css("margin-top", "-" + top_menu + "px");
            $(".over-mega-menu").css("top", "112px")
            $(" .menu-fixed-desktop").css("display", "none");
            $(".over-mega-menu").css("margin-top", "0px")
        } else {
            //$(".espacios-bar").css("margin-top", "-100px");
            $(".over-mega-menu.activo .menu").css("margin-top", "0px");
            $(".over-mega-menu.activo .menu").css("margin-top", "0px");
            $(" .menu-fixed-desktop").css("display", "flex");
            $(" .menu-fixed-desktop").css("margin-top", "-90px");
            $(".over-mega-menu").css("margin-top", "-60px")
        }

    });*/

    //$("#menu-site img").click(function() {
    /*$(".ico-menu-v2").click(function() {
        $(".over-mega-menu").toggleClass("activo");
        let ruta_actual = $(this).attr("src");

        let ruta_cambiar = $(this).attr("data-estado")


        $("#menu-site img").attr("src", ruta_cambiar);
        $("#menu-site img").attr("data-estado", ruta_actual);
    })*/



    $(".container-player-fixed").addClass("show");
    $(".cerrar-player").click(function() {
        $(".container-player-fixed").remove();
    })

/*
   if ($(".contenedor-programacion").length) {
        detectandodiaactual("tvenvivo");
    } else {
        detectandodiaactual("home");
    }
*/

    /*$(".tab-dias-programacion li").click(function() {

        // $(".tab-dias-programacion li").removeClass("activado");
        // $(this).addClass("activado");
        // let dia = $(this).attr("data-dia");
        let numdia = $(this).attr("data-numdia");

       // cargarContenido(numdia, "tvenvivo");



    })
*/



})
/*
function detectandodiaactual(page = null) {
    let actual = new Date();
    let dia_actual = actual.getDay();


    //cargarContenido(dia_actual, page);


}*/
/*
function cargarContenido(dia_actual_, par) {

    $(".tab-dias-programacion li").removeClass("activado");
    $(`li[data-numdia="${dia_actual_}"]`).addClass("activado");


    let dia = "";
    if (par == "tvenvivo") {

        dia = $(`li[data-numdia="${dia_actual_}"]`).attr("data-dia");
    } else {
        dia = "jue";
    }

    

    let numdia = dia_actual_;


    let programacion = {
        lun: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "Despierta 90 matinal", img: "" },
                { hora: "06:00", programa: "90 Matinal nacional", img: "" },
                { hora: "07:00", programa: "90 Matinal", img: "" },
                { hora: "08:00", programa: "90 Matinal", img: "" },
                { hora: "09:00", programa: "Mujeres al mando", img: "" },
                { hora: "10:00", programa: "Mujeres al mando", img: "" },
                { hora: "11:00", programa: "Aprendo en casa", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Modo espectaculos", img: "" },
                { hora: "03:00", programa: "Tengo algo que decirte", img: "" },
                { hora: "04:00", programa: "Tengo algo que decirte", img: "" },
                { hora: "05:00", programa: "La venganza de Iffet", img: "" },
                { hora: "06:00", programa: "Caso cerrado", img: "" },
                { hora: "07:00", programa: "90 Central", img: "" },
                { hora: "08:00", programa: "Yo soy", img: "" },
                { hora: "09:00", programa: "Yo soy", img: "" },
                { hora: "10:00", programa: "Jesús", img: "" },
                { hora: "11:00", programa: "90 central", img: "" },


            ]
        },
        mar: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "Despierta 90 matinal", img: "" },
                { hora: "06:00", programa: "90 Matinal nacional", img: "" },
                { hora: "07:00", programa: "90 Matinal", img: "" },
                { hora: "08:00", programa: "90 Matinal", img: "" },
                { hora: "09:00", programa: "Mujeres al mando", img: "" },
                { hora: "10:00", programa: "Mujeres al mando", img: "" },
                { hora: "11:00", programa: "Aprendo en casa", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/covers/90central_cover_16_9.jpg" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Caso Cerrado", img: "" },
                { hora: "03:00", programa: "Caso Cerrado", img: "" },
                { hora: "04:00", programa: "Yo soy Betty", img: "" },
                { hora: "05:00", programa: "Caso Cerrado", img: "" },
                { hora: "06:00", programa: "Caso Cerrado", img: "" },
                { hora: "07:00", programa: "90 Central", img: "" },
                { hora: "08:00", programa: "Yo soy", img: "" },
                { hora: "09:00", programa: "Yo soy", img: "" },
                { hora: "10:00", programa: "Jesús", img: "" },
                { hora: "11:00", programa: "90 central", img: "" },


            ]
        },
        mie: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "Despierta 90 matinal", img: "" },
                { hora: "06:00", programa: "90 Matinal nacional", img: "" },
                { hora: "07:00", programa: "90 Matinal", img: "" },
                { hora: "08:00", programa: "90 Matinal", img: "" },
                { hora: "09:00", programa: "Mujeres al mando", img: "" },
                { hora: "10:00", programa: "Mujeres al mando", img: "" },
                { hora: "11:00", programa: "Aprendo en casa", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/covers/90central_cover_16_9.jpg" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Caso Cerrado", img: "" },
                { hora: "03:00", programa: "Caso Cerrado", img: "" },
                { hora: "04:00", programa: "Yo soy Betty", img: "" },
                { hora: "05:00", programa: "Caso Cerrado", img: "" },
                { hora: "06:00", programa: "Caso Cerrado", img: "" },
                { hora: "07:00", programa: "90 Central", img: "" },
                { hora: "08:00", programa: "Yo soy", img: "" },
                { hora: "09:00", programa: "Yo soy", img: "" },
                { hora: "10:00", programa: "Jesús", img: "" },
                { hora: "11:00", programa: "90 central", img: "" },


            ]
        },
        jue: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "Despierta 90 matinal", img: "" },
                { hora: "06:00", programa: "90 Matinal nacional", img: "" },
                { hora: "07:00", programa: "90 Matinal", img: "" },
                { hora: "08:00", programa: "90 Matinal", img: "" },
                { hora: "09:00", programa: "Mujeres al mando", img: "" },
                { hora: "10:00", programa: "Mujeres al mando", img: "" },
                { hora: "11:00", programa: "Aprendo en casa", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/covers/90central_cover_16_9.jpg" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Caso Cerrado", img: "" },
                { hora: "03:00", programa: "Caso Cerrado", img: "" },
                { hora: "04:00", programa: "Yo soy Betty", img: "" },
                { hora: "05:00", programa: "Caso Cerrado", img: "" },
                { hora: "06:00", programa: "Caso Cerrado", img: "" },
                { hora: "07:00", programa: "90 Central", img: "" },
                { hora: "08:00", programa: "Yo soy", img: "" },
                { hora: "09:00", programa: "Yo soy", img: "" },
                { hora: "10:00", programa: "Jesús", img: "" },
                { hora: "11:00", programa: "90 central", img: "" },


            ]
        },
        vie: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "Despierta 90 matinal", img: "" },
                { hora: "06:00", programa: "90 Matinal nacional", img: "" },
                { hora: "07:00", programa: "90 Matinal", img: "" },
                { hora: "08:00", programa: "90 Matinal", img: "" },
                { hora: "09:00", programa: "Mujeres al mando", img: "" },
                { hora: "10:00", programa: "Mujeres al mando", img: "" },
                { hora: "11:00", programa: "Aprendo en casa", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/covers/90central_cover_16_9.jpg" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Modo espectaculos", img: "" },
                { hora: "03:00", programa: "Tengo algo que decirte", img: "" },
                { hora: "04:00", programa: "Tengo algo que decirte", img: "" },
                { hora: "05:00", programa: "La venganza de Iffet", img: "" },
                { hora: "06:00", programa: "Caso cerrado", img: "" },
                { hora: "07:00", programa: "90 Central", img: "" },
                { hora: "08:00", programa: "Yo soy", img: "" },
                { hora: "09:00", programa: "Yo soy", img: "" },
                { hora: "10:00", programa: "Jesús", img: "" },
                { hora: "11:00", programa: "Noche de patas", img: "" },


            ]
        },
        sab: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "El Wasap de JB", img: "" },
                { hora: "06:00", programa: "90 Sábados", img: "" },
                { hora: "07:00", programa: "90 Sábados", img: "" },
                { hora: "08:00", programa: "90 Sábados", img: "" },
                { hora: "09:00", programa: "Chapa tus tabas", img: "" },
                { hora: "10:00", programa: "Mascotas", img: "" },
                { hora: "11:00", programa: "Mascotas", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Cine sábado", img: "" },
                { hora: "03:00", programa: "Cine sábado", img: "" },
                { hora: "04:00", programa: "Cine sábado", img: "" },
                { hora: "05:00", programa: "Clásicos Animados", img: "" },
                { hora: "06:00", programa: "Clásicos Animados", img: "" },
                { hora: "07:00", programa: "Funcion estelear", img: "" },
                { hora: "08:00", programa: "El wasap de JB", img: "" },
                { hora: "09:00", programa: "El wasap de JB", img: "" },
                { hora: "10:00", programa: "Yo soy", img: "" },
                { hora: "11:00", programa: "Yo soy", img: "" },


            ]
        },
        dom: {
            am: [
                { hora: "00:00", programa: "Programación Latina", img: "" },
                { hora: "01:00", programa: "Programación Latina", img: "" },
                { hora: "02:00", programa: "Programación Latina", img: "" },
                { hora: "03:00", programa: "Programación Latina", img: "" },
                { hora: "04:00", programa: "Programación Latina", img: "" },
                { hora: "05:00", programa: "El Wasap de JB", img: "" },
                { hora: "06:00", programa: "90 Dominical", img: "" },
                { hora: "07:00", programa: "90 Dominical", img: "" },
                { hora: "08:00", programa: "Reporte Semanal", img: "" },
                { hora: "09:00", programa: "Reporte Semanal", img: "" },
                { hora: "10:00", programa: "Reporte Semanal", img: "" },
                { hora: "11:00", programa: "Reporte Semanal", img: "" },
                { hora: "12:00", programa: "90 Mediodia", img: "" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia", img: "" },
                { hora: "02:00", programa: "Huella Digital", img: "" },
                { hora: "03:00", programa: "Cineplus", img: "" },
                { hora: "04:00", programa: "Cineplus", img: "" },
                { hora: "05:00", programa: "Cine Millonario", img: "" },
                { hora: "06:00", programa: "El Wasap de JB", img: "" },
                { hora: "07:00", programa: "90 central", img: "" },
                { hora: "08:00", programa: "Punto final", img: "" },
                { hora: "09:00", programa: "Punto final", img: "" },
                { hora: "10:00", programa: "Latina deportes", img: "" },
                { hora: "11:00", programa: "Latina deportes", img: "" },
            ]
        }
    }
    let dia_programacion = programacion[dia];

    let actual = new Date();


    let hora = actual.getHours();
    let dia_actual = actual.getDay();
    let dia_actual_activo = false;
  
    if (dia_actual == numdia) {
       
        dia_actual_activo = true;
    }


    let ele_am = "";
    let ele_pm = "";
    let ind_d = 0;
    for (let item of dia_programacion["am"]) {
        let activo = "";
        let ele_activo = "";
        if (dia_actual_activo) {
            if (ind_d == hora) {
                activo = "ahoraenvivo";
                ele_activo = `<span class="ico-vivo">En vivo</span>`;
               // showahoraenvivo(item);
            }
        }


        ele_am = ele_am + `<li class="${activo}"> <span class="hora">${item.hora}</span><span>${item.programa}</span> ${ele_activo}</li>`;

        ind_d++;
    }

    let ind_n = 13;
    for (let item of dia_programacion["pm"]) {
        let activo = "";
        let ele_activo = "";
        if (dia_actual_activo) {
            if (ind_n == hora) {
                ele_activo = `<span class="ico-vivo">En vivo</span>`;
                activo = "ahoraenvivo";
                //showahoraenvivo(item);
            }
        }

        ele_pm = ele_pm + `<li class="${activo}"><span class="hora">${item.hora}</span><span>${item.programa}</span>${ele_activo}</li>`;

        ind_n++;
    }

    $("#programas-am").html(ele_am);
    $("#programas-pm").html(ele_pm);






}*/
/*
function showahoraenvivo(ele) {
   
    $(".ahora-envivo-item .texto2 a").text(ele.programa);
    $("#thumb-tvenvivo").attr("src", ele.img);
}*/

///** detectando el click en el contenido **/ //



function registro_consumo(valor_propiedad) {
    var _favoritos = localStorage.getItem("favoritos");
    //console.log(_favoritos);
    if (_favoritos == null) {
        _favoritos = {};
    } else {
        _favoritos = _favoritos.replace('""', '"').replace('""', '"').replace('"{', '{').replace('}"', "}");

        _favoritos = JSON.parse(_favoritos);

    }
    var _propiedad = valor_propiedad;
    var contador = _favoritos[_propiedad];

    if (contador == undefined) {

        _favoritos[_propiedad] = 0;
    } else {
        _favoritos[_propiedad] = _favoritos[_propiedad] + 1;
    }

    _favoritos = JSON.stringify(_favoritos).replace(/\\/g, "")

    localStorage.setItem("favoritos", _favoritos);

}