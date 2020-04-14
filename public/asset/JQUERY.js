$(document).ready(function(){

    $("#siginup_btn").click(function(){

        $("#main").animate({left:"22.5%"},400);
        $("#main").animate({left:"30%"},500);
        $("#loginform").css("visibility","hidden");
        $("#loginform").animate({left:"25%"},400);

        $("#siginupform").animate({left:"17%"},400);
        $("#siginupform").animate({left:"30%"},500);
        $("#siginupform").css("visibility","visible");
    });

    $("#login_btn").click(function(){

        $("#main").animate({left:"77.5%"},400);
        $("#main").animate({left:"70%"},500);

        $("#siginupform").css("visibility","hidden");
        $("#siginupform").animate({left:"75%"},400);


        $("#loginform").animate({left:"83.5%"},400);
        $("#loginform").animate({left:"70%"},500);
        $("#loginform").css("visibility","visible");

    });

});