
$(document).ready(function(){
    $('#gTaste-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                smartSpeed:1000
            },
            576:{
                items:1
            }
        }
    });
    $('#popuProd-carousel').owlCarousel({
        margin:30,
        loop:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });
    $('#recipe-carouselI').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2,
                margin:10

            },
            992:{
                items:3
            }
        }
    });
    $('#recipe-carouselI').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        smartSpeed:450,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2,
                margin:10

            },
            992:{
                items:3
            }
        }
    });
    $('#insta-carousel').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        smartSpeed:450,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    $('#recipe-carouselY').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        smartSpeed:450,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    $('#recipe-carouselT').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        smartSpeed:450,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    $('#test-carousel').owlCarousel({
        nav:true,
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        smartSpeed:450,
        responsive:{
            0:{
                items:1,
                margin:0
            },
            576:{
                items:1,
                margin:20
            },
            768:{
                items:2.4,
                margin:10
            },
            992:{
                items:2.4
            }
        }
    });
    $('#seller-carousel').owlCarousel({
        margin:30,
        loop:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                margin:10,
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });
    $("#pankajCnt").css('display','none');
    $("#pankajBtn").click(function(){
        $("#pankajCnt").slideToggle("slow");
    });
    $("#manishaCnt").css('display','none');
    $("#manishaBtn").click(function(){
        $("#manishaCnt").slideToggle("slow");
    });
    $("#sankalpCnt").css('display','none');
    $("#sankalpBtn").click(function(){
        $("#sankalpCnt").slideToggle("slow");
    });
    if($(window).width()<768){
        $('.launchSec .text-end').removeClass('text-end').addClass('text-center');
        $('.launchSec .text-start').removeClass('text-start').addClass('text-center')
    }
    if($(window).width()<576){
        $('.hdngGatih+img').attr('src','images/line.png');
        $('.prodBnrSec img').attr('src','images/productBanner0.jpg')
    }
    $('.numberonly').keypress(function (e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });
});
$(document).ready(function(){
    let scrolTop = document.getElementById('scTop')
    scrolTop.addEventListener('click',function(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
});