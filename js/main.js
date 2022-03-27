const toggleCollapse = document.querySelector('.toggle-collapse div')
const nav = document.querySelector('.nav');

const responsive = {
    0:{
        items:1
    },
    320:{
        items:1
    },
    560:{
        items:2
    },
    960:{
        items:3
    }

}

toggleCollapse.onclick = function(event){
    nav.classList.toggle('collapse');
}

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:false,
    autoplayTimeout:3000,
    dots: false,
    nav: true,
    navText: [$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')],
    responsive:responsive
});


const gallery = document.querySelectorAll(".gallery .image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
shadow = document.querySelector(".shadow");

window.onload = ()=>{
    for(let i = 0; i < gallery.length; i++){
        totalImg.textContent = gallery.length;
        let newIndex = i;
        let clickImgIndex;
        gallery[i].onclick = () =>{
            
            clickImgIndex = newIndex;
            console.log(i);
            function preview(){
                currentImg.textContent = newIndex + 1;
                let selectedImgUrl = gallery[newIndex].querySelector("img").src;
                previewImg.src = selectedImgUrl;
               
            }

            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){
                prevBtn.style.display = "none";
            }
            if(newIndex == gallery.length - 1){
                nextBtn.style.display = "none";
            }
            prevBtn.onclick = ()=>{
                newIndex--;
                if(newIndex == 0){
                    preview();
                    prevBtn.style.display = "none";
                }else{
                    preview();
                    nextBtn.style.display = "block";
                }
                
            }
            nextBtn.onclick = ()=>{
                newIndex++;
                if(newIndex == gallery.length -1){
                    preview();
                    nextBtn.style.display = "none";
                }else{
                    preview();
                    prevBtn.style.display = "block";
                }
                
            }

            preview();
            previewBox.classList.add("show");
            shadow.style.display = "block";
            document.querySelector("body").overflow = "hidden";

            closeIcon.onclick = ()=>{
                newIndex = clickImgIndex ;
                prevBtn.style.display = "block";
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").overflow = "auto";
            }
        }
    }
}
