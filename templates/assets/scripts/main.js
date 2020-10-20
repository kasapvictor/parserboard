/* открыте адаптивного меню */
const navBtn = document.querySelector('.menu-button');
const navMenu = document.querySelector('.nav-menu');

navBtn.addEventListener('click', openMenu);

function openMenu () {
	navMenu.classList.toggle('nav-mobile');
	this.classList.toggle('menu-button-inverse');
}