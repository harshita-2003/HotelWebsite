var imageIndex = 0;
var imagesArray = [
    "url('images/R.jpg') center",
    "url('images/wallpaperflare.com_wallpaper.jpg') center"
];

function changeBackground() {
    var index = imageIndex++ % imagesArray.length;
    document.querySelector(".main-body-section-div").style.background = imagesArray[index];
}

document.addEventListener("DOMContentLoaded", function() {
  document.querySelector(".main-body-section-div").style.background = imagesArray[0];
  setInterval(changeBackground, 2000);
});


var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    autoplay: {
    delay: 3500,
    disableOnInteraction: false,
    },
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    });



    new PureCounter();

    new PureCounter({
      selector: ".purecounter", 
  
      start: 0, 
      end: 100, 
      duration: 5, 
      delay: 10, 
      once: true, 
      pulse: false, 
      decimals: 0, 
      legacy: true, 
      filesizing: false, 
      currency: false, 
      formater: "us-US", 
      separator: false, 
  });


