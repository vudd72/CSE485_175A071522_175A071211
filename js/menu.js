$(document).ready(function(){
    $('.bar1').click(function(){
        if($('#menuLayer').css("display") == "block" ){
            $('#menuLayer').css("display","none");
        }
        else $('#menuLayer').css("display","block");
    });
    $('.btn-gnav').click(function(){
        if($('#menu-bot-layer').css("display") == "block" ){
            $('#menu-bot-layer').css("display","none");
        }
        else $('#menu-bot-layer').css("display","block");
    });
    $('.bar2').click(function(){
        if($('#menu-bot-layer').css("display") == "block" ){
            $('#menu-bot-layer').css("display","none");
        }
        else $('#menu-bot-layer').css("display","block");
    });   
});