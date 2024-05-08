document.addEventListener( "DOMContentLoaded", function () {
    const swiper = new Swiper( ".categorySwiper", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            // dynamicBullets: true,
            clickable: true,
        },
        slidesPerView: 1,
        spaceBetween: 15,
        speed: 5000,
        cache: true,
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        breakpoints: {
            400: {
                slidesPerView: 2,
            },

            768: {
                slidesPerView: 3,
            },
            1336: {
                slidesPerView: 5,
            },
            1520: {
                slidesPerView: 7,
            },
        },
    } )
} )
