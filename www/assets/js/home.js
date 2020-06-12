(function(){
    $('.slider').slick({
        infinite: true,
        prevArrow: '<span class="prev"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></span>',
    });

    $('.slide-projetos').slick({
        infinite: true,
        prevArrow: '<span class="prev"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></span>',
        slidesToShow: 4,
    });
})()