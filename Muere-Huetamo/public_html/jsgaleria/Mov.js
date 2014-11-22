var imagen=1;
$(document).on("ready", inicio);

function inicio() {
    setInterval("galeria_movi()",2500);
}

function galeria_movi(){   
    
    if(imagen == $(".caminar").size()){
    imagen=0;
    }
    $("#Lista").animate({
    marginLeft: (-1*imagen*$(".caminar").eq(0).width())
    },700);
    imagen++;
}

