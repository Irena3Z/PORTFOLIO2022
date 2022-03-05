const toggleCollapse = document.querySelector('.toggle-collapse div')
const nav = document.querySelector('.nav');


toggleCollapse.onclick = function(event){
    nav.classList.toggle('collapse');
}