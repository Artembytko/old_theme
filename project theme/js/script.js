// jQuery{
//     jQuery(document).ready(function($){
//         $('.menu-body').hide();
//         $('.menu-title').click(function(){$(this).next().toggle()});
//     });
// }

jQuery(document).ready(function($){
    $('.menu-body').hide();
    $('.menu-title').click(function(){$(this).next().toggle()});

    $('.slider').slick({
        infinite: true,
        autoplaySpeed: 2000,
        centerMode: true,
        adaptiveHeight: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        arrows: false,
    });
});

