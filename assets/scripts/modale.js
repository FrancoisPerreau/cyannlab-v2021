// Modale Mentions légales
// -------------------------------------
const overlay = document.querySelector('#mentions-container');
const modale = document.querySelector('.mentions-wrapper');
const btnClose = document.querySelector('#mentions-close');
const btnOpen = document.querySelector('.btn-mentions')

if (btnOpen) {
    // ouverture modale
    btnOpen.addEventListener('click', () => {
        overlay.style.display = "flex";

        setTimeout(() => {
            overlay.classList.add('in');
            modale.classList.add('in');
        }, 100);

    });
}

if (overlay) {
    // fermeture modale
    overlay.addEventListener('click', () => {
        overlay.classList.remove('in');
        modale.classList.remove('in');

        setTimeout(() => {
            overlay.style.display = "none";
        }, 400);
    });
}