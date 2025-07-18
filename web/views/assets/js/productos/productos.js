/*CUADROS Y LISTAS */

$(document).on("click", ".btnView", function(){

    var type = $(this).attr("type");

    if(type == "list"){

        $(".grid-1").hide();
        $(".grid-1").show();

    }

    if(type == "grid"){

        $(".grid-1").show();
        $(".grid-1").hide();

    }



})