
// NAVIGATION MENU //

// classList - shows/gets all classes
// contains - checks classList for specific class
// add - add class
// remove - remove class
// toggle - toggles class

const navToggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.links');

navToggle.addEventListener('click', function () {
    // console.log(links.classList);
    // console.log(links.classList.contains('random'));
    // console.log(links.classList.contains('links'));
    // if(links.classList.contains('links')){
    //     links.classList.remove('show-links');
    // } else {
    //     links.classList.add('show-links');
    // }
    links.classList.toggle('show-links');
    if (navToggle) {
        // Not called
        navToggle.addEventListener('click', () => {
          alert('You clicked the button');
        });
      }
});


//

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.toggle('show', entry.isIntersecting);
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));


//
const trailer = document.getElementById('trailer');

window.onmousemove = e => {
    const x = e.clientX - trailer.offsetWidth / 1,
          y = e.clientY - trailer.offsetHeight / 1;

    const keyframe = {
        transform: `translate(${x}px, ${y}px)` 
    };

    trailer.animate(keyframe, {
        duration: 800,
        fill: 'forwards'
    });
}
// 

// COOKIES //
// gsap.to('.cookies-text', {y: 50, duration: 1})
// gsap.fromTo('.cookie-container', {opacity:0, y:20}, {opacity:1, y:0, duration: 2})

const tl = gsap.timeline({
    default: {duration:0.75, ease: "power1.out"}
});

tl.fromTo('.cookie-container', {scale: 0 }, {scale: 1, ease: "elastic.out(1, 0.4)", duration:1.5 });
tl.fromTo('.cookie', 2, {opacity:0, rotation:"0"}, {opacity:1, rotation:"-360"}, '<');
tl.fromTo('.crams', {scale: 0 }, {scale: 2 }, '<');

// cookies banner out of window
const buttonCookie = document.querySelector('.cookie-button');
buttonCookie.addEventListener('click', () => {
    gsap.to('.cookie-container', {opacity:0, y:100, duration: 0.75, ease: "power1.out"})
});



//about section background 
var c = document.getElementById('canv');
var $ = c.getContext('2d');

var col = function(x, y, r, g, b) {
  $.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
  $.fillRect(x, y, 1,1);
}
var R = function(x, y, t) {
  return( Math.floor(192 + 64*Math.cos( (x*x-y*y)/300 + t )) );
}

var G = function(x, y, t) {
  return( Math.floor(192 + 64*Math.sin( (x*x*Math.cos(t/4)+y*y*Math.sin(t/3))/300 ) ) );
}

var B = function(x, y, t) {
  return( Math.floor(192 + 64*Math.sin( 5*Math.sin(t/9) + ((x-100)*(x-100)+(y-100)*(y-100))/1100) ));
}

var t = 0;
var x;
var y;

var run = function() {
  for(x=0;x<=35;x++) {
    for(y=0;y<=35;y++) {
      col(x, y, R(x,y,t), G(x,y,t), B(x,y,t));
    }
  }
  t = t + 0.01;
  window.requestAnimationFrame(run);
}

run();


//about section illustration - gallery

const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel__button--right');
const prevButton = document.querySelector('.carousel__button--left');

// const dotsNav = document.querySelector('.carousel__nav');
// const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width;

const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);


nextButton.addEventListener('click', e => {
  const currentSlide = track.document.querySelector('.current-slide');
  const nextSlide = currentSlide.nextElementSibling;
  const amountToMove = nextSlide.style.left;
});


// Section Moving text