const heroLeft = document.querySelector('.c-hero-user-switch__left');
const heroRight = document.querySelector('.c-hero-user-switch__right');
const organizacionesText = document.querySelector('.c-hero-user-switch__org');
const individualText = document.querySelector('.c-hero-user-switch__ind');

const textos = document.querySelectorAll('.c-hero-user-switch__title');
const textoIzq = textos[0];
const parrafos = document.querySelectorAll('.c-hero-user-switch__txt');
const botonIzq = document.querySelectorAll('.c-hero-user-switch__cta')[0];
const botonDir = document.querySelectorAll('.c-hero-user-switch__cta')[1];
const iconoDerecha = document.getElementsByClassName('c-hero-user-switch__icon')[1];
/* escuchadores */
const organizaciones = document.querySelector('.c-hero-user-switch__left-image');
const individual = document.querySelector('.c-hero-user-switch__right-image');

organizacionesText.addEventListener('mouseenter', () => {
  heroLeft.style.backgroundColor = '#4f185a';
  individual.style.opacity = 1;
  individualText.style.zIndex = -1;
  textoIzq.style.color = 'white';
  parrafos[0].style.color = 'white';
  heroLeft.classList.remove('u-background--lines--hidden');
  botonIzq.style.transform = 'translateX(0)';
  botonDir.style.transition = 'all 1s ease';
  individual.style.transform = 'scale(1.1)';
});

organizacionesText.addEventListener('mouseleave', () => {
  heroLeft.style.backgroundColor = 'initial';
  individual.style.opacity = 0;
  individualText.style.zIndex = 99;
  textoIzq.style.color = '#4f185a';
  parrafos[0].style.color = 'black';
  heroLeft.classList.add('u-background--lines--hidden');
  botonIzq.style.transform = 'translateX(-100%)';
  individual.style.transform = 'scale(1.0)';
});

individualText.addEventListener('mouseenter', () => {
  heroRight.style.backgroundColor = '#ffc79d';
  iconoDerecha.setAttribute('data-class', 'before');
  organizaciones.style.opacity = 1;
  organizacionesText.style.zIndex = -1;
  heroRight.classList.remove('u-background--lines--hidden');
  botonDir.style.transform = 'translateX(0)';
  botonDir.style.transition = 'all 1s ease';
  organizaciones.style.transform = 'scale(1.1)';
});

individualText.addEventListener('mouseleave', () => {
  heroRight.style.backgroundColor = 'initial';
  iconoDerecha.setAttribute('data-class', 'null');
  organizaciones.style.opacity = 0;
  organizacionesText.style.zIndex = 99;
  heroRight.classList.add('u-background--lines--hidden');
  botonDir.style.transform = 'translateX(-100%)';
  organizaciones.style.transform = 'scale(1.0)';
});
