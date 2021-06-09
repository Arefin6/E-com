$(document).ready(function(){
        $('.slider').slick({
    dots: true,
    infinite: false,
    speed: 100,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true
    }
    },
    {
    breakpoint: 800,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1
    }
    },
    {
    breakpoint: 576,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
    });
    })