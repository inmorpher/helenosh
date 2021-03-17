const headerBlock = document.querySelector('.header');
const mainBurger = document.querySelector('.menu-burger');
const mainMenu = document.querySelector('.main-menu');
const btns = document.querySelectorAll('a.action-btn');
const modalWindow = document.querySelector('.modal');
const wpcf7Elm = document.querySelector('.wpcf7');
const agrement = document.querySelector('.agrement');

if (
  !localStorage.agree ||
  (localStorage.agree && Date.now() - localStorage.agree > 360000)
) {
  agrement.classList.add('agrement__visible');
}

// TOOGLE MODAL FUNCTION
const toogleModal = arg => {
  if (arg == 'open') {
    document.body.style = 'overflow: hidden';
    modalWindow.classList.add('modal__visible');
  } else if (arg == 'close') {
    document.body.style = 'overflow: auto';
    modalWindow.classList.remove('modal__visible');
  } else console.log('Error type');
};

// GLOBAL CLICK LISTENER
document.addEventListener('click', event => {
  // TOOGLE SHOW/HIDE MENU
  if (event.target.closest('.menu-burger')) {
    mainBurger.classList.toggle('menu-burger--active');
    mainMenu.classList.toggle('main-menu--visible');
  }

  // SHOW MODAL
  if (
    event.target.closest('a.action-btn') &&
    !event.target.classList.contains('agrement-btn')
  ) {
    event.preventDefault();
    toogleModal('open');
  }
  // SHOW/CLOSE AGREEMNT FORM
  if (event.target.classList.contains('agrement-btn')) {
    event.preventDefault();
    localStorage.setItem('agree', Date.now());
    agrement.classList.remove('agrement__visible');
  }

  // CLOSE MODAL
  if (
    event.target.closest('.close') ||
    event.target.classList.contains('modal')
  ) {
    event.preventDefault();
    toogleModal('close');
  }

  // LINK BEHAVIOUR
  if (event.target.classList.contains('main-menu__link')) {
    event.preventDefault();
    const elem = event.target.getAttribute('href').replace('#', '');
    document.getElementById(elem).scrollIntoView();

    // IF MENU IS OPEN (MOBILE VIEW) CLOSE AFRET CLICK
    if (mainMenu.classList.contains('main-menu--visible')) {
      mainMenu.classList.remove('main-menu--visible');
      mainBurger.classList.toggle('menu-burger--active');
    }
  }
});

// ON SUCCESS SUBMIT FORM HANDLER
wpcf7Elm.addEventListener(
  'wpcf7mailsent',
  event => {
    setTimeout(() => {
      location.reload();
    }, 3000);
  },
  false,
);
