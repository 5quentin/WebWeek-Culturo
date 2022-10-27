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

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("cadreImageEV");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
  
    slides[slideIndex-1].style.display = "block";  
  
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }