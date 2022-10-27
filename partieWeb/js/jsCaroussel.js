function activationSlideBTN(){
    var prevBtn = document.querySelector("#past");
    var nextBtn = document.querySelector("#next");
    nextBtn.addEventListener('click',()=>{
        if(counter >=carouselImages.length-1) return;
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter++;
        carouselSlide.style.transform='translateX('+(-size*counter)+'px)';
    });

    prevBtn.addEventListener('click',()=>{
        if(counter <=0) return;
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter--;
        carouselSlide.style.transform='translateX('+(-size*counter)+'px)';
    });      

}
