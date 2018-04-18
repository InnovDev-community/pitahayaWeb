$('document').ready(function() {
    let variable = false;
    $('#toggle-menu').click(function(){
        $('#lista').slideToggle();
        if(!variable){
            $('#cabecera').css("position","fixed");
        }else{
            $('#cabecera').css("position","absolute");
        }
        variable=!variable;        
    });
});