const navBurgger = document.querySelector('.burger-top-nav');
const navTop = document.querySelector('.nav-top');

// Expand au click pour la version mobiles
navBurgger.addEventListener('click', function () {
    navTop.classList.toggle('expand');
    this.classList.toggle('trigger')
});

// Change la hauteur du logo au scroll
const navLogo = document.querySelector('.nav-logo');

const reduceNav = () => {
    if (window.scrollY >= 200) {
        navLogo.classList.add('nav-logo-sm')
    } else {
        navLogo.classList.remove('nav-logo-sm')
    }
};

window.addEventListener('scroll', reduceNav);