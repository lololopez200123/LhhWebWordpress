(function (document, window) {
  window.onload = function () {
    // const containerShare = document.querySelector('.c-sms__container');
    // btn share up
    const boton = document.querySelector('.o-btn');
    const cMsj = document.querySelector('.c-sms__container');
    const btnCopy = document.querySelector('.c-sms__copy-link-icon');
    const msj = document.querySelector('.c-sms__copy-link-txt');
    const msjHeading = document.querySelector('.c-sms__copy-link-heading');

    // btn share article
    const btnCopyArticle = document.querySelector('#btn-copy--article');
    const msjArticle = document.querySelector('.js-sms-copy__txt2');
    const contenedorTooltip = document.querySelector('.js-sms-copy__tooltip2');

    // function copy to Clipboard
    function copyToClipBoard(elemento) {
      const inputOculto = document.createElement('input');
      inputOculto.setAttribute('value', elemento.innerText);
      document.body.appendChild(inputOculto);
      inputOculto.select();
      document.execCommand('copy');
      document.body.removeChild(inputOculto);
    }
    // function & eventListener share top header
    boton.addEventListener('click', (e) => {
      e.stopPropagation();
      e.preventDefault();
      cMsj.classList.toggle('c-sms__container--active');
      msj.innerHTML = window.location.href;
      if (cMsj.getAttribute('aria-hidden') === 'true') {
        cMsj.setAttribute('aria-hidden', false);
      } else {
        cMsj.setAttribute('aria-hidden', true);
      }
    });

    btnCopy.addEventListener('click', (e) => {
      e.stopPropagation();
      e.preventDefault();
      copyToClipBoard(msj);
      msjHeading.innerHTML = msjHeading.getAttribute('data-msg');
      msjHeading.style.cssText = 'color:#fe6294';
      setTimeout(() => {
        msjHeading.innerHTML = 'Copy link';
        msjHeading.style.cssText = 'color:#2e2e2e; transition: .5s ease all';
      }, 2000);
    });

    // function share article
    btnCopyArticle.addEventListener('click', (e) => {
      e.preventDefault();
      msjArticle.innerHTML = window.location.href;
      contenedorTooltip.style = 'display:block';
      copyToClipBoard(msjArticle);
      setTimeout(() => { contenedorTooltip.style = 'display:none'; }, 2000);
    });
  };
}(document, window));
