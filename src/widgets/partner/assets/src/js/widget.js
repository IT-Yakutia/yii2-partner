
$(document).ready(function(){
    $(".partner-owl-carousel").owlCarousel({
        loop: true,
        rewind: true,
        margin: 10,
        responsiveClass: true,
        center: true,
        responsive:{
            0:{
                items:3,
                nav:false
            },
            500:{
                items:4,
                nav:false
            },
            600:{
                items:6,
                nav:false
            },
            1000:{
                items:7,
                nav:false,
                loop:true,
            },
            1200:{
                items:8,
                nav:false,
                loop:true,
            },
            1400:{
                items:9,
                nav:false,
                loop:true,
            },
            1600:{
                items:10,
                nav:false,
                loop:true,
            },
            1800:{
                items:11,
                nav:false,
                loop:true,
            }
        }
    });
});