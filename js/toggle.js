$('document').ready(function() {

     /*$("body").css("position", "relative"); */

    function show_popup() {

    }

    window.setTimeout( show_popup, 5000 );  
    $("body").css("transition", "all 3s ease-in-out");
    $("body").css("opacity", "1");
   
    let variable = false;
    $('#toggle-menu').click(function(){
        $('#lista').slideToggle();  
        variable = !variable;  
    });

    $(".item-header").click(function(){
        if($( window ).width() < 768) {
            if(variable) {
                $('#lista').slideToggle();
                variable = !variable;  
            };
        }
        
    });

});