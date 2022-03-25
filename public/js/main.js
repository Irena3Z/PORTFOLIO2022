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

const req = new Request();

req.get('api.php?name=getSubscribers', function (response) {
    for (let subscriber of response.subscribers) {
        printSubscriber(subscriber)
    }
})

document.querySelector('form').onsubmit = function(event) {
    event.preventDefault()
    // if(document.getElementById('subscription_check').checked) {
    //     const url = this.getAttribute('action')
    //     let form = this;
    //     req.post(url, new FormData(this), function (response) {
    //         if (response.hasOwnProperty('entity')) {
    //             printSubscriber(response.entity)
    //             for (let input of form.querySelectorAll('input')) {
    //                 input.value = ''
    //                 input.checked = false
    //             }
    //             document.getElementById('message').textContent = ''
    //         }
    //     })
    // }
    // else {
    //     document.getElementById('message').textContent = "please check the checkbox!"
    // }
}