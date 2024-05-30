$(document).ready(function(){
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        // Ajoute la classe "shrink" lorsque le scroll dépasse une certaine valeur (par exemple, 100 pixels)
        if (scroll > 100) {
            $(".w3l-header").addClass("shrink");
        } else {
            $(".w3l-header").removeClass("shrink");
        }
    });
});
