function menuOnClick() {
    document.getElementById("menu-bar").classList.toggle("change");
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu-bg").classList.toggle("change-bg");
}

function scrolll(scrollingcontainer){
    var container = scrollingcontainer;
    if(container.scrollWidth > container.clientWidth || container.scrollWidth > container.clientWidth){
        alert('sddsds');
    };
    var left = document.getElementById(container);
    left.scrollBy(-500,0)
}
function scrollr(scrollingcontainer){
    var container = scrollingcontainer;
    var right = document.getElementById(container);
    right.scrollBy(500,0)
}

//HEADER SHRINKING


function scrolled(){

    if(document.body.scrollTop > 400||document.documentElement.scrollTop > 300){

        document.getElementById("moveUpBtn").classList.add("moveUpBtnVisible");

    }else{

        document.getElementById("moveUpBtn").classList.remove("moveUpBtnVisible");

    }

}

// PORTFOLO

var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 3,
      slideShadows: true
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    breakpoints: {
      640: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      },
      1024: {
        slidesPerView: 2
      },
      1560: {
        slidesPerView: 3
      }
    }
  });

// GALLERY

var canvas = document.getElementById('gallery_canvas');
var image = document.getElementById('gallery_canvas_img');
var image_desc = document.getElementById('gallery_canvas_img_desc');
function openGallery(loc){
    var location = loc.src;
    var image_desc_val = loc.alt;
    image_desc.innerHTML = image_desc_val;
    image.src = location;
    canvas.classList.remove('closed');
    canvas.classList.add('opened');
}

function closeGallery(){
    canvas.classList.remove('opened');
    canvas.classList.add('closed');
}

///SCROLL

function scrolll(scrollingcontainer){
  var container = scrollingcontainer;
  if(container.scrollWidth > container.clientWidth || container.scrollWidth > container.clientWidth){
      alert('sddsds');
  };
  var left = document.getElementById(container);
  left.scrollBy(-300,0)
}
function scrollr(scrollingcontainer){
  var container = scrollingcontainer;
  var right = document.getElementById(container);
  right.scrollBy(300,0)
}
