
$(document).ready(function(){
    
    $(".slider-active").owlCarousel({
        trl: true,
        loop: true,
        margin: 10,
        nav: true,
         autoplay:true,
         autoplayTimeout:1000,
         navText: [
        //     '<i class="fa fa-angle-left">',
        //     '<i class="fa fa-angle-right">'
         ],
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
        }

    });

});