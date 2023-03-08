$(document).ready(function () {
    // Swiper Slider js
    var swiper = new Swiper(".hero-list-slider", {
        slidesPerView: 4,
        freeMode: true,
        breakpoints: {
            1024: {
                slidesPerView: 15,
            },
            992: {
                slidesPerView: 12,
            },
            768: {
                slidesPerView: 10,
            },
            576: {
                slidesPerView: 7,
            },
        },
    });

    // Offcanvas js
    function screenClass() {
        if ($(window).innerWidth() > 991) {
            $(".offcanvas").removeClass("show");
        }
    }
    screenClass();
})