var mq = window.matchMedia("(max-width: 768px)");

if (mq.matches) {
    $('#myGovernanceTab').removeClass('nav-justified-2')
    $('#blogTab').removeClass('nav-justified');
    $('#myTabJust').removeClass('nav-justified');
    $('#investor_tab').removeClass('nav-justified');
    $('#careerTab').removeClass('nav-justified-career border');
}

$('.active-link').removeClass('px-md-4');


$(document).ready(function() {
    $('.myslid1').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2800,
        pauseOnHover: true,
        arrows: false,
        fade: true,
        cssEase: 'linear'
    });

})
