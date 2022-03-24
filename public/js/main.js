const toggleCollapse = document.querySelector('.toggle-collapse div')
const nav = document.querySelector('.nav');


toggleCollapse.onclick = function(event){
    nav.classList.toggle('collapse');
}

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:false,
    autoplayTimeout:3000,
    dots: false,
    nav: true,
    navText: [$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')]
});