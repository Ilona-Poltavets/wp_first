jQuery(document).ready(function () {
    jQuery('.slider').slick({
        arrows: false,
        fade: true,
        speed: 500,
        cssEase: 'linear',
    });

    jQuery('[data-slide]').on('click', function handleClick(e) {
        e.preventDefault();
        var slideNumber = jQuery(this).data('slide');
        jQuery('.slider').slick('slickGoTo', slideNumber);

        // var newText = jQuery(this).text();
        // jQuery('.p-big').text(newText);

        jQuery('[data-slide]').removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery('[data-slide="0"]').trigger('click');

    jQuery('.slider-about').slick({
        arrows: true,
        fade: true,
        speed: 500,
        cssEase: 'linear',
        prevArrow: '<button class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next text-uppercase">Next Photo <i class="fa-solid fa-arrow-right"></i></button>'
    });

    jQuery('.what-say__slider').slick({
        infinite: true,
        slidesToShow: 3,
        speed: 500,
        cssEase: 'linear',
        arrows: true,

        prevArrow: '<button class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next text-uppercase"><i class="fa-solid fa-arrow-right"></i></button>',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }],
    });
});