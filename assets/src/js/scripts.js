import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
import { CSSRulePlugin } from "gsap/dist/CSSRulePlugin";
// import { Flip } from "gsap/dist/Flip";


//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", function() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

$(".current_page_item a").addClass("active");


function animateFrom(elem, direction) {
  direction = direction || 1;
  // var x = 0,
  //     y = direction * 100;

  if(elem.classList.contains("gs_reveal_fromLeft")) {
    revealFrom(elem, -100, 0);
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
    revealFrom(elem, 100, 0); 
  } else if (elem.classList.contains("gs_reveal_fromBottom")) {
    revealFrom(elem, 0, 100);
  } else if (elem.classList.contains("gs_reveal_fromTop")) {
    revealFrom(elem, -0, -100); 
  } else if (elem.classList.contains("gs_bounce_fromTop")) {
    bounceFrom(elem, 0, -200); 
  } else if (elem.classList.contains("gs_bounce_fromBottom")) {
    bounceFrom(elem, 0, 200); 
  } else if (elem.classList.contains("gs_elastic_fromTop")) {
    elasticFrom(elem, 0, -200); 
  } else if (elem.classList.contains("gs_elastic_fromBottom")) {
    elasticFrom(elem, 0, 200); 
  } 
}

function bounceFrom(elem, x, y) {
    elem.style.opacity = "0";
    gsap.fromTo(elem, { x: x, y: y, autoAlpha: 0 }, {
      duration: 1,
      autoAlpha: 1,    
      ease: "bounce.out",
      y: 0,
      overwrite: "auto"
    });
}
 
function elasticFrom(elem, x, y) {
  elem.style.opacity = "0";
  gsap.fromTo(elem, { x: x, y: y, autoAlpha: 0 }, {
    duration: 1.50,
    autoAlpha: 1,    
    ease: "elastic.out(1. 0.3)",
    y: 0,
    overwrite: "auto"
  });
}

function revealFrom(elem, x, y) {

  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  document.body.style.overflowX = "hidden";
  elem.style.opacity = "0";

  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
    duration: 1.25, 
    x: 0,
    y: 0,
    autoAlpha: 1, 
    ease: "expo", 
    overwrite: "auto"
  });

}

function hide(elem) {
  gsap.set(elem, {autoAlpha: 0});
}

document.addEventListener("DOMContentLoaded", function() {

  // gsap.registerPlugin(Flip);
  // gsap.registerPlugin(CSSRulePlugin);
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
    hide(elem); // assure that the element is hidden when scrolled into view
    
    ScrollTrigger.create({
      trigger: elem,
      onEnter: function() { animateFrom(elem) }, 
      onEnterBack: function() { animateFrom(elem, -1) },
      onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
    });
  }); 
});


 