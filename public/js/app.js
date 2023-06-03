import 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js';
$(document).ready(function () {
    $(".toggle-slide").toggle(function () {
        $("body").css("position", "absolute");
        $("body").animate({ left: '350px', opacity: 0.5 });
        $("#slide-menu").animate({ left: '-350px' });
        $("#slide-menu").css("display", "block");
        /*$(".container").click(function(){      
          $("body").animate({left: '0px'},function(){
            $("body").css("position","relative");
          });      
          return;
        });
        $(".main").click(function(){      
          $("body").animate({left: '0px',opacity:1},400,function(){
            $("body").css("position","relative");
          });      
          return;
        });*/
    }, function () {
        $("body").animate({ left: '0px' }, function () {
            $("body").css("position", "relative");
        });
    });
});