$(document).ready(function() {
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

    $("#btn-buscar").click(function() {

        $(".lyt-buscador .buscador").fadeToggle(400, function() {
            $(".inp-buscador").focus();
            $(".inp-buscador").val("")
        });

    })



    $("#js-movil-menu").click(function() {
        $(".menu-lateral").toggleClass("activo");
    })

    cargarSubMenu();
    $(".cerrar-ultimo-minuto").click(function() {
        $(".ultimo-minuto-caja").slideUp(500);
    })
});

function cargarSubMenu() {
    let path = window.location;
    //let slug = path.pathname.replace(/\//g, "");
    let slug = path.pathname.split("/")[1];
    let url = "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/js/submenu.json?v123845645698";
    fetch(url)
        .then((data) => { return data.json() })
        .then((data) => {

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
            }

        })
}

function versubitems(ele) {
    $(ele).parent().toggleClass("activo");
    $(ele).parent().find("ul").slideToggle();
}


$(function() {
    let url_menu = "https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/js/menu.json?v3453678";
    //let url_menu="https://latinademo.s3.amazonaws.com/web/menu.json";
    // cargando contendio de menu
    let config = {
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



        }
    }
    $.ajax(config);

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




    $(window).scroll(function() {
        let top = $(window).scrollTop();

        if (top < 150) {

            $(".box-fixed-top2").hide();
            //  $(".espacios-bar").css("margin-top", "-" + top + "px");
        } else {
            $(".box-fixed-top2").show();
            // $(".espacios-bar").css("margin-top", "-100px");
        }

    });


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


    $(window).scroll(function() {
        let top = $(window).scrollTop();
        console.log(top);

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

    });

    //$("#menu-site img").click(function() {
    $(".ico-menu-v2").click(function() {
        $(".over-mega-menu").toggleClass("activo");
        let ruta_actual = $(this).attr("src");

        let ruta_cambiar = $(this).attr("data-estado")


        $("#menu-site img").attr("src", ruta_cambiar);
        $("#menu-site img").attr("data-estado", ruta_actual);
    })



    $(".container-player-fixed").addClass("show");
    $(".cerrar-player").click(function() {
        $(".container-player-fixed").remove();
    })




    detectandodiaactual();
    $(".tab-dias-programacion li").click(function() {

        // $(".tab-dias-programacion li").removeClass("activado");
        // $(this).addClass("activado");
        // let dia = $(this).attr("data-dia");
        let numdia = $(this).attr("data-numdia");

        cargarContenido(numdia);


        /*

                let programacion = {
                    lun: {
                        am: [
                            { hora: "00:00", programa: "Programa Lunes" },
                            { hora: "01:00", programa: "Programa Lunes" },
                            { hora: "02:00", programa: "Programa Lunes" },
                            { hora: "03:00", programa: "Programa Lunes" },
                            { hora: "04:00", programa: "Programa Lunes" },
                            { hora: "05:00", programa: "Programa Lunes" },
                            { hora: "06:00", programa: "Programa Lunes" },
                            { hora: "07:00", programa: "Programa Lunes" },
                            { hora: "08:00", programa: "Programa Lunes" },
                            { hora: "09:00", programa: "Programa Lunes" },
                            { hora: "10:00", programa: "Programa Lunes" },
                            { hora: "11:00", programa: "Programa Lunes" },
                            { hora: "12:00", programa: "Programa Lunes" },


                        ],
                        pm: [
                            { hora: "01:00", programa: "Programa Lunes" },
                            { hora: "02:00", programa: "Programa Lunes" },
                            { hora: "03:00", programa: "Programa Lunes" },
                            { hora: "04:00", programa: "Programa Lunes" },
                            { hora: "05:00", programa: "Programa Lunes" },
                            { hora: "06:00", programa: "Programa Lunes" },
                            { hora: "07:00", programa: "Programa Lunes" },
                            { hora: "08:00", programa: "Programa Lunes" },
                            { hora: "09:00", programa: "Programa Lunes" },
                            { hora: "10:00", programa: "Programa Lunes" },
                            { hora: "11:00", programa: "Programa Lunes" },


                        ]
                    },
                    mar: {
                        am: [
                            { hora: "00:00", programa: "Programa Martes" },
                            { hora: "01:00", programa: "Programa Martes" },
                            { hora: "02:00", programa: "Programa Martes" },
                            { hora: "03:00", programa: "Programa Martes" },
                            { hora: "04:00", programa: "Programa Martes" },
                            { hora: "05:00", programa: "Programa Martes" },
                            { hora: "06:00", programa: "Programa Martes" },
                            { hora: "07:00", programa: "Programa Martes" },
                            { hora: "08:00", programa: "Programa Martes" },
                            { hora: "09:00", programa: "Programa Martes" },
                            { hora: "10:00", programa: "Programa Martes" },
                            { hora: "11:00", programa: "Programa Martes" },
                            { hora: "12:00", programa: "Programa Martes" },


                        ],
                        pm: [

                            { hora: "01:00", programa: "Programa Martes" },
                            { hora: "02:00", programa: "Programa Martes" },
                            { hora: "03:00", programa: "Programa Martes" },
                            { hora: "04:00", programa: "Programa Martes" },
                            { hora: "05:00", programa: "Programa Martes" },
                            { hora: "06:00", programa: "Programa Martes" },
                            { hora: "07:00", programa: "Programa Martes" },
                            { hora: "08:00", programa: "Programa Martes" },
                            { hora: "09:00", programa: "Programa Martes" },
                            { hora: "10:00", programa: "Programa Martes" },
                            { hora: "11:00", programa: "Programa Martes" },

                        ]
                    },
                    mie: {
                        am: [
                            { hora: "00:00", programa: "Programa Miercoles" },
                            { hora: "01:00", programa: "Programa Miercoles" },
                            { hora: "02:00", programa: "Programa Miercoles" },
                            { hora: "03:00", programa: "Programa Miercoles" },
                            { hora: "04:00", programa: "Programa Miercoles" },
                            { hora: "05:00", programa: "Programa Miercoles" },
                            { hora: "06:00", programa: "Programa Miercoles" },
                            { hora: "07:00", programa: "Programa Miercoles" },
                            { hora: "08:00", programa: "Programa Miercoles" },
                            { hora: "09:00", programa: "Programa Miercoles" },
                            { hora: "10:00", programa: "Programa Miercoles" },
                            { hora: "11:00", programa: "Programa Miercoles" },
                            { hora: "12:00", programa: "Programa Miercoles" },


                        ],
                        pm: [

                            { hora: "01:00", programa: "Programa Miercoles" },
                            { hora: "02:00", programa: "Programa Miercoles" },
                            { hora: "03:00", programa: "Programa Miercoles" },
                            { hora: "04:00", programa: "Programa Miercoles" },
                            { hora: "05:00", programa: "Programa Miercoles" },
                            { hora: "06:00", programa: "Programa Miercoles" },
                            { hora: "07:00", programa: "Programa Miercoles" },
                            { hora: "08:00", programa: "Programa Miercoles" },
                            { hora: "09:00", programa: "Programa Miercoles" },
                            { hora: "10:00", programa: "Programa Miercoles" },
                            { hora: "11:00", programa: "Programa Miercoles" },


                        ]
                    },
                    jue: {
                        am: [
                            { hora: "00:00", programa: "Programa Jueves" },
                            { hora: "01:00", programa: "Programa Jueves" },
                            { hora: "02:00", programa: "Programa Jueves" },
                            { hora: "03:00", programa: "Programa Jueves" },
                            { hora: "04:00", programa: "Programa Jueves" },
                            { hora: "05:00", programa: "Programa Jueves" },
                            { hora: "06:00", programa: "Programa Jueves" },
                            { hora: "07:00", programa: "Programa Jueves" },
                            { hora: "08:00", programa: "Programa Jueves" },
                            { hora: "09:00", programa: "Programa Jueves" },
                            { hora: "10:00", programa: "Programa Jueves" },
                            { hora: "11:00", programa: "Programa Jueves" },
                            { hora: "12:00", programa: "Programa Jueves" },


                        ],
                        pm: [


                            { hora: "01:00", programa: "Programa Jueves" },
                            { hora: "02:00", programa: "Programa Jueves" },
                            { hora: "03:00", programa: "Programa Jueves" },
                            { hora: "04:00", programa: "Programa Jueves" },
                            { hora: "05:00", programa: "Programa Jueves" },
                            { hora: "06:00", programa: "Programa Jueves" },
                            { hora: "07:00", programa: "Programa Jueves" },
                            { hora: "08:00", programa: "Programa Jueves" },
                            { hora: "09:00", programa: "Programa Jueves" },
                            { hora: "10:00", programa: "Programa Jueves" },
                            { hora: "11:00", programa: "Programa Jueves" },



                        ]
                    },
                    vie: {
                        am: [
                            { hora: "00:00", programa: "Programa Viernes" },
                            { hora: "01:00", programa: "Programa Viernes" },
                            { hora: "02:00", programa: "Programa Viernes" },
                            { hora: "03:00", programa: "Programa Viernes" },
                            { hora: "04:00", programa: "Programa Viernes" },
                            { hora: "05:00", programa: "Programa Viernes" },
                            { hora: "06:00", programa: "Programa Viernes" },
                            { hora: "07:00", programa: "Programa Viernes" },
                            { hora: "08:00", programa: "Programa Viernes" },
                            { hora: "09:00", programa: "Programa Viernes" },
                            { hora: "10:00", programa: "Programa Viernes" },
                            { hora: "11:00", programa: "Programa Viernes" },
                            { hora: "12:00", programa: "Programa Viernes" },


                        ],
                        pm: [

                            { hora: "01:00", programa: "Programa Viernes" },
                            { hora: "02:00", programa: "Programa Viernes" },
                            { hora: "03:00", programa: "Programa Viernes" },
                            { hora: "04:00", programa: "Programa Viernes" },
                            { hora: "05:00", programa: "Programa Viernes" },
                            { hora: "06:00", programa: "Programa Viernes" },
                            { hora: "07:00", programa: "Programa Viernes" },
                            { hora: "08:00", programa: "Programa Viernes" },
                            { hora: "09:00", programa: "Programa Viernes" },
                            { hora: "10:00", programa: "Programa Viernes" },
                            { hora: "11:00", programa: "Programa Viernes" },



                        ]
                    },
                    sab: {
                        am: [
                            { hora: "00:00", programa: "Programa Sábado" },
                            { hora: "01:00", programa: "Programa Sábado" },
                            { hora: "02:00", programa: "Programa Sábado" },
                            { hora: "03:00", programa: "Programa Sábado" },
                            { hora: "04:00", programa: "Programa Sábado" },
                            { hora: "05:00", programa: "Programa Sábado" },
                            { hora: "06:00", programa: "Programa Sábado" },
                            { hora: "07:00", programa: "Programa Sábado" },
                            { hora: "08:00", programa: "Programa Sábado" },
                            { hora: "09:00", programa: "Programa Sábado" },
                            { hora: "10:00", programa: "Programa Sábado" },
                            { hora: "11:00", programa: "Programa Sábado" },
                            { hora: "12:00", programa: "Programa Sábado" },


                        ],
                        pm: [
                            { hora: "01:00", programa: "Programa Sábado" },
                            { hora: "02:00", programa: "Programa Sábado" },
                            { hora: "03:00", programa: "Programa Sábado" },
                            { hora: "04:00", programa: "Programa Sábado" },
                            { hora: "05:00", programa: "Programa Sábado" },
                            { hora: "06:00", programa: "Programa Sábado" },
                            { hora: "07:00", programa: "Programa Sábado" },
                            { hora: "08:00", programa: "Programa Sábado" },
                            { hora: "09:00", programa: "Programa Sábado" },
                            { hora: "10:00", programa: "Programa Sábado" },
                            { hora: "11:00", programa: "Programa Sábado" },


                        ]
                    },
                    dom: {
                        am: [
                            { hora: "00:00", programa: "Programa Domingo" },
                            { hora: "01:00", programa: "Programa Domingo" },
                            { hora: "02:00", programa: "Programa Domingo" },
                            { hora: "03:00", programa: "Programa Domingo" },
                            { hora: "04:00", programa: "Programa Domingo" },
                            { hora: "05:00", programa: "Programa Domingo" },
                            { hora: "06:00", programa: "Programa Domingo" },
                            { hora: "07:00", programa: "Programa Domingo" },
                            { hora: "08:00", programa: "Programa Domingo" },
                            { hora: "09:00", programa: "Programa Domingo" },
                            { hora: "10:00", programa: "Programa Domingo" },
                            { hora: "11:00", programa: "Programa Domingo" },
                            { hora: "12:00", programa: "Programa Domingo" },

                        ],
                        pm: [
                            { hora: "01:00", programa: "Programa Domingo" },
                            { hora: "02:00", programa: "Programa Domingo" },
                            { hora: "03:00", programa: "Programa Domingo" },
                            { hora: "04:00", programa: "Programa Domingo" },
                            { hora: "05:00", programa: "Programa Domingo" },
                            { hora: "06:00", programa: "Programa Domingo" },
                            { hora: "07:00", programa: "Programa Domingo" },
                            { hora: "08:00", programa: "Programa Domingo" },
                            { hora: "09:00", programa: "Programa Domingo" },
                            { hora: "10:00", programa: "Programa Domingo" },
                            { hora: "11:00", programa: "Programa Domingo" },
                        ]
                    }
                }
                let dia_programacion = programacion[dia];

                let actual = new Date();


                let hora = actual.getHours();
                let dia_actual = actual.getDay();
                let dia_actual_activo = false;
                console.log("dia actual" + dia_actual)
                console.log("dia seleccionado" + numdia)
                if (dia_actual == numdia) {
                    console.log("marcado");
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
                        }
                    }

                    ele_pm = ele_pm + `<li class="${activo}"><span class="hora">${item.hora}</span><span>${item.programa}</span>${ele_activo}</li>`;

                    ind_n++;
                }

                $("#programas-am").html(ele_am);
                $("#programas-pm").html(ele_pm);*/
        /*console.log(programacion[dia]);*/
    })




})

function detectandodiaactual() {
    let actual = new Date();
    let dia_actual = actual.getDay();

    cargarContenido(dia_actual);

}

function cargarContenido(dia_actual_) {
    console.log("dentro de funcion");
    $(".tab-dias-programacion li").removeClass("activado");
    $(`li[data-numdia="${dia_actual_}"]`).addClass("activado");


    let dia = $(`li[data-numdia="${dia_actual_}"]`).attr("data-dia");
    let numdia = dia_actual_;


    let programacion = {
        lun: {
            am: [
                { hora: "00:00", programa: "Comando alfa" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "El profe" },
                { hora: "04:00", programa: "El Wasap de JB " },
                { hora: "05:00", programa: "Despierta 90 matinal" },
                { hora: "06:00", programa: "90 Matinal nacional" },
                { hora: "07:00", programa: "90 Matinal" },
                { hora: "08:00", programa: "90 Matinal" },
                { hora: "09:00", programa: "Mujeres al mando" },
                { hora: "10:00", programa: "Mujeres al mando" },
                { hora: "11:00", programa: "Aprendo en casa" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Modo espectaculos" },
                { hora: "03:00", programa: "Tengo algo que decirte" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "Caso cerrado" },
                { hora: "06:00", programa: "La ruta del amor" },
                { hora: "07:00", programa: "90 Central" },
                { hora: "08:00", programa: "Yo soy" },
                { hora: "09:00", programa: "Yo soy" },
                { hora: "10:00", programa: "Moisés" },
                { hora: "11:00", programa: "90 Noche" },


            ]
        },
        mar: {
            am: [
                { hora: "00:00", programa: "Contigo Selección" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos azules" },
                { hora: "04:00", programa: "El Wasap de JB " },
                { hora: "05:00", programa: "Despierta 90 matinal" },
                { hora: "06:00", programa: "90 Matinal nacional" },
                { hora: "07:00", programa: "90 Matinal" },
                { hora: "08:00", programa: "90 Matinal" },
                { hora: "09:00", programa: "Mujeres al mando" },
                { hora: "10:00", programa: "Mujeres al mando" },
                { hora: "11:00", programa: "Aprendo en casa" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Modo espectaculos" },
                { hora: "03:00", programa: "Tengo algo que decirte" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "Caso cerrado" },
                { hora: "06:00", programa: "La ruta del amor" },
                { hora: "07:00", programa: "90 Central" },
                { hora: "08:00", programa: "Yo soy" },
                { hora: "09:00", programa: "Yo soy" },
                { hora: "10:00", programa: "Moisés" },
                { hora: "11:00", programa: "90 Noche" },


            ]
        },
        mie: {
            am: [
                { hora: "00:00", programa: "Contigo Selección" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos azules" },
                { hora: "04:00", programa: "El Wasap de JB " },
                { hora: "05:00", programa: "Despierta 90 matinal" },
                { hora: "06:00", programa: "90 Matinal nacional" },
                { hora: "07:00", programa: "90 Matinal" },
                { hora: "08:00", programa: "90 Matinal" },
                { hora: "09:00", programa: "Mujeres al mando" },
                { hora: "10:00", programa: "Mujeres al mando" },
                { hora: "11:00", programa: "Aprendo en casa" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Modo espectaculos" },
                { hora: "03:00", programa: "Tengo algo que decirte" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "Caso cerrado" },
                { hora: "06:00", programa: "La ruta del amor" },
                { hora: "07:00", programa: "90 Central" },
                { hora: "08:00", programa: "Yo soy" },
                { hora: "09:00", programa: "Yo soy" },
                { hora: "10:00", programa: "Moisés" },
                { hora: "11:00", programa: "90 Noche" },


            ]
        },
        jue: {
            am: [
                { hora: "00:00", programa: "Contigo Selección" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos azules" },
                { hora: "04:00", programa: "El Wasap de JB " },
                { hora: "05:00", programa: "Despierta 90 matinal" },
                { hora: "06:00", programa: "90 Matinal nacional" },
                { hora: "07:00", programa: "90 Matinal" },
                { hora: "08:00", programa: "90 Matinal" },
                { hora: "09:00", programa: "Mujeres al mando" },
                { hora: "10:00", programa: "Mujeres al mando" },
                { hora: "11:00", programa: "Aprendo en casa" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Modo espectaculos" },
                { hora: "03:00", programa: "Tengo algo que decirte" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "Caso cerrado" },
                { hora: "06:00", programa: "La ruta del amor" },
                { hora: "07:00", programa: "90 Central" },
                { hora: "08:00", programa: "Yo soy" },
                { hora: "09:00", programa: "Yo soy" },
                { hora: "10:00", programa: "Moisés" },
                { hora: "11:00", programa: "90 Noche" },


            ]
        },
        vie: {
            am: [
                { hora: "00:00", programa: "Contigo Selección" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos azules" },
                { hora: "04:00", programa: "El Wasap de JB " },
                { hora: "05:00", programa: "Despierta 90 matinal" },
                { hora: "06:00", programa: "90 Matinal nacional" },
                { hora: "07:00", programa: "90 Matinal" },
                { hora: "08:00", programa: "90 Matinal" },
                { hora: "09:00", programa: "Mujeres al mando" },
                { hora: "10:00", programa: "Mujeres al mando" },
                { hora: "11:00", programa: "Aprendo en casa" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Modo espectaculos" },
                { hora: "03:00", programa: "Tengo algo que decirte" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "Caso cerrado" },
                { hora: "06:00", programa: "La ruta del amor" },
                { hora: "07:00", programa: "90 Central" },
                { hora: "08:00", programa: "Yo soy" },
                { hora: "09:00", programa: "Yo soy" },
                { hora: "10:00", programa: "Moisés" },
                { hora: "11:00", programa: "Noche de patas" },


            ]
        },
        sab: {
            am: [
                { hora: "00:00", programa: "Contigo Selección" },
                { hora: "01:00", programa: "La Pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos azules" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "El Wasap de JB" },
                { hora: "06:00", programa: "90 Sábados" },
                { hora: "07:00", programa: "90 Sábados" },
                { hora: "08:00", programa: "90 Sábados" },
                { hora: "09:00", programa: "Chapa tus tabas" },
                { hora: "10:00", programa: "Mascotas" },
                { hora: "11:00", programa: "Experimentores" },
                { hora: "12:00", programa: "90 Mediodia" },


            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Cine sábado" },
                { hora: "03:00", programa: "Cine sábado" },
                { hora: "04:00", programa: "Cine sábado" },
                { hora: "05:00", programa: "Clásicos Animados" },
                { hora: "06:00", programa: "Clásicos Animados" },
                { hora: "07:00", programa: "Funcion estelear" },
                { hora: "08:00", programa: "El wasap de JB" },
                { hora: "09:00", programa: "El wasap de JB" },
                { hora: "10:00", programa: "Yo soy" },
                { hora: "11:00", programa: "Yo soy" },


            ]
        },
        dom: {
            am: [
                { hora: "00:00", programa: "Misterio" },
                { hora: "01:00", programa: "La pre" },
                { hora: "02:00", programa: "Nectar en el cielo" },
                { hora: "03:00", programa: "Diablos Azules" },
                { hora: "04:00", programa: "Tengo algo que decirte" },
                { hora: "05:00", programa: "El Wasap de JB" },
                { hora: "06:00", programa: "90 Dominical" },
                { hora: "07:00", programa: "90 Dominical" },
                { hora: "08:00", programa: "Reporte Semanal" },
                { hora: "09:00", programa: "Reporte Semanal" },
                { hora: "10:00", programa: "Reporte Semanal" },
                { hora: "11:00", programa: "Reporte Semanal" },
                { hora: "12:00", programa: "90 Mediodia" },

            ],
            pm: [
                { hora: "01:00", programa: "90 Mediodia" },
                { hora: "02:00", programa: "Huella Digital" },
                { hora: "03:00", programa: "Cineplus" },
                { hora: "04:00", programa: "Cineplus" },
                { hora: "05:00", programa: "Cine Millonario" },
                { hora: "06:00", programa: "El Wasap de JB" },
                { hora: "07:00", programa: "90 central" },
                { hora: "08:00", programa: "Punto final" },
                { hora: "09:00", programa: "Punto final" },
                { hora: "10:00", programa: "Latina deportes" },
                { hora: "11:00", programa: "Programa Domingo" },
            ]
        }
    }
    let dia_programacion = programacion[dia];

    let actual = new Date();


    let hora = actual.getHours();
    let dia_actual = actual.getDay();
    let dia_actual_activo = false;
    console.log("dia actual" + dia_actual)
    console.log("dia seleccionado" + numdia)
    if (dia_actual == numdia) {
        console.log("marcado");
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
            }
        }

        ele_pm = ele_pm + `<li class="${activo}"><span class="hora">${item.hora}</span><span>${item.programa}</span>${ele_activo}</li>`;

        ind_n++;
    }

    $("#programas-am").html(ele_am);
    $("#programas-pm").html(ele_pm);






}


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