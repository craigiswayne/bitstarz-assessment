function toggleNavBar() {
  const isShowing = document.querySelector('nav').classList.toggle('show');
  blurWholeSite(isShowing);
}

function blurWholeSite(turnOn = true) {
  document.querySelector('body').classList.toggle('blur', turnOn);
}

function toggleCardFlip(card){
  card.classList.toggle('flip');
}

function addCardFlipListeners(){
  document.querySelectorAll('.card.course').forEach( card => {
    card.querySelectorAll('.cta').forEach( cta => {
      cta.addEventListener('click', () => {
        toggleCardFlip(card);
      });
    });
  })
}

function addSubscribeFormListeners() {
  // Validity Listeners
  document.querySelectorAll('.modal form input').forEach( input => {
    input.addEventListener('keyup', (keyboardEvent) => {
      const input = keyboardEvent.target;
      const isValid = input.checkValidity();
      input.classList.toggle('invalid', !isValid);
      input.classList.toggle('valid', isValid);
    })
  })

  document.querySelector('#field-card-number').addEventListener('keyup', (keyboardEvent) => {
    const input = keyboardEvent.target;
    let result = 'unknown';
    result = input.value.indexOf('45') === 0 ? 'visa' : result;
    result = input.value.indexOf('54') === 0 ? 'mastercard' : result;
    input.setAttribute('card-type', result);
  })

  const submitButton = document.querySelector('.modal .button')
  submitButton.addEventListener('click', () => {
    const form = document.querySelector('.modal form');
     const isValid = form.checkValidity();
     submitButton.classList.toggle('shake', !isValid);
  })
}

function toggleModal(showModal = true){
  blurWholeSite(showModal);
  document.querySelector('.modal').classList.toggle('show', showModal);
}

function onLoad() {
  /**
   * Menu Hamburger Click Listener
   */
  document.querySelector('nav .toggle').addEventListener('click', toggleNavBar);
  document.querySelectorAll('.launch-modal').forEach(el =>  el.addEventListener('click', toggleModal));
  document.querySelector('.modal .icon.close').addEventListener('click', () => { toggleModal(false)});
  document.querySelector('.modal .overlay').addEventListener('click', () => { toggleModal(false)});
  addCardFlipListeners();
  addSubscribeFormListeners();
}

if (document.readyState !== 'loading') {
  onLoad();
} else {
  document.addEventListener('DOMContentLoaded', onLoad);
}
