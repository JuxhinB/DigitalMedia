$(function() { 
    jQuery.scrollSpeed(150, 800);
});

$("#mobile-menu-btn").on('click',function () {

    $("#mobile-menu-body").toggleClass("fade-top");
    $("#mobile-menu-btn > .fa").toggleClass("color-dark");
    $("#main-menu").toggleClass("transparent-bcg");
    $("body").toggleClass("vertical-scroll-disabled");

    if( $("#menu-logo").attr("src").includes("white") ){
        $("#menu-logo").attr("src", "./src/img/ecronex-black.png");
    }
    else if( $("#menu-logo").attr("src").includes("black") ){
        $("#menu-logo").attr("src", "./src/img/ecronex-white.png");
    }
});

$('.clients-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
          }
        }
    ]
});

$( document ).ready(function() {

	var pathStr = window.location.pathname;
	if(pathStr.includes("services")){
        $(".main-sp-container").addClass("services-bcg");
        $("#active-sp-title").html('Our Services');
        $("#active-sp").html('Our Services');
	}
	if(pathStr.includes("about")){
        $(".main-sp-container").addClass("about-bcg");
        $("#active-sp-title").html('About Us');
        $("#active-sp").html('About Us');
	}
	else if(pathStr.includes("contact")){
        $(".main-sp-container").addClass("contact-bcg");
        $("#active-sp-title").html('Contact Us');
        $("#active-sp").html('Contact Us');
    }
    
    var bodyWidth = $( "body" ).width();
    var imgWidth = $( "#menu-logo" ).width();
    if(bodyWidth < 768){
        $("#menu-logo").css({
            "position": "absolute",
            "left": ((bodyWidth-30)/2)-(imgWidth/2)+"px"
            });
    }
});

$( document ).on("scroll",function(){
    var scrolledDistance = $(document).scrollTop()+20;
    var heightHome = $("#home-main").height();
    var heightSp = $("#main-sp").height();
    if(scrolledDistance > heightHome || scrolledDistance > heightSp){
        $("#main-menu").addClass("menu-dark");
        $("#desktop-nav").removeClass("mt-2");
    }
    else if(scrolledDistance < heightHome || scrolledDistance < heightSp){
        $("#main-menu").removeClass("menu-dark");
        $("#desktop-nav").addClass("mt-2");
    }
});

$( window ).resize(function() {
    var bodyWidth = $( "body" ).width();
    var imgWidth = $( "#menu-logo" ).width();
    if(bodyWidth < 768){
        $("#menu-logo").css({
            "position": "absolute",
            "left": ((bodyWidth-30)/2)-(imgWidth/2)+"px"
        });
    }
    else if(bodyWidth > 768){
        $("#menu-logo").css({
            "position": "static",
            "left": "auto"
        });
    }
});