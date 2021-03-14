const headerBlock = document.querySelector('.header');
const mainBurger = document.querySelector('.menu-burger');
const mainMenu = document.querySelector('.main-menu');

document.addEventListener('click', event => {
  if (event.target.closest('.menu-burger')) {
    mainBurger.classList.toggle('menu-burger--active');
    mainMenu.classList.toggle('main-menu--visible');
  }
});
