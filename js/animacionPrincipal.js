let heroUserBg = document.querySelector(".c-hero-user-switch__bg");
let heroLeft = document.querySelector(".c-hero-user-switch__left");
let heroRight = document.querySelector(".c-hero-user-switch__right");
let organizacionesText = document.querySelector(".c-hero-user-switch__org");
let individualText = document.querySelector(".c-hero-user-switch__ind");

let textos = document.querySelectorAll(".c-hero-user-switch__title");
let textoIzq = textos[0];
let textoDer = textos[1];
let parrafos = document.querySelectorAll(".c-hero-user-switch__txt");
let botonIzq = document.querySelectorAll(".c-hero-user-switch__cta")[0];
let botonDir = document.querySelectorAll(".c-hero-user-switch__cta")[1];
let iconoDerecha = document.getElementsByClassName("c-hero-user-switch__icon")[1];
let colorVioleta = "#4f185a";
/*escuchadores*/
let rowSelector = document.querySelectorAll(".row")[2];
let organizaciones = document.querySelector(".c-hero-user-switch__left-image");
let individual = document.querySelector(".c-hero-user-switch__right-image");

organizacionesText.addEventListener("mouseenter",function(){
heroLeft.style.backgroundColor = "#4f185a";
individual.style.opacity = 1;
individualText.style.zIndex = -1;
textoIzq.style.color = "white" ;
parrafos[0].style.color = "white";
heroLeft.classList.remove("u-background--lines--hidden");
botonIzq.style.transform = "translateX(0)";
botonDir.style.transition = "all 1s ease";
individual.style.transform = "scale(1.1)";
});

organizacionesText.addEventListener("mouseleave",function(){
    heroLeft.style.backgroundColor = "initial" ;
    individual.style.opacity = 0;
    individualText.style.zIndex = 99;
    textoIzq.style.color = "#4f185a";
    parrafos[0].style.color = "black";
    heroLeft.classList.add("u-background--lines--hidden");
    botonIzq.style.transform = "translateX(-100%)";
    individual.style.transform = "scale(1.0)";
});

individualText.addEventListener("mouseenter",function(){
    heroRight.style.backgroundColor = "#ffc79d";
    iconoDerecha.setAttribute('data-class', "before");
    organizaciones.style.opacity = 1;
    organizacionesText.style.zIndex = -1;
    heroRight.classList.remove("u-background--lines--hidden");
    botonDir.style.transform = "translateX(0)";
    botonDir.style.transition = "all 1s ease";
    organizaciones.style.transform = "scale(1.1)";
});
    
individualText.addEventListener("mouseleave",function(){
    heroRight.style.backgroundColor = "initial" ;
    iconoDerecha.setAttribute('data-class', "null");
    organizaciones.style.opacity = 0;
    organizacionesText.style.zIndex = 99;
    heroRight.classList.add("u-background--lines--hidden")
    botonDir.style.transform = "translateX(-100%)";
    organizaciones.style.transform = "scale(1.0)"
});