// Parallax Hero image
// -------------------------------------
const heroImg = document.querySelector('.hero-background-img');
// la possition de l'image au chargement (media queries css top change )
let topImageOrigin;
if(heroImg){    
  topImageOrigin = heroImg.offsetTop;
  // heroImg.style.top = topImageOrigin + "px"
}



function parallax() {

    heroImg.style.top = (-(window.scrollY / 4) + topImageOrigin) + "px";
};

window.addEventListener("scroll", (parallax));