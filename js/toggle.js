$('document').ready(function() {
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