function toggleNavBar() {
  const isShowing = document.querySelector('nav').classList.toggle('show');
  blurWholeSite(isShowing);
}

function blurWholeSite(turnOn = true) {
  const body = document.querySelector('body')
  if(turnOn) {
    body.classList.add('blur');
  } else {
    body.classList.remove('blur');
  }
}

function toggleCardFlip(card){
  card.classList.toggle('flip');
}

function onLoad() {
  /**
   * Menu Hamburger Click Listener
   */
  document.querySelector('nav .toggle').addEventListener('click', toggleNavBar);

  /**
   * Card Flip Click Listeners
   */
  document.querySelectorAll('.card.course').forEach( card => {
    card.querySelectorAll('.cta').forEach( cta => {
      cta.addEventListener('click', () => {
        toggleCardFlip(card);
      });
    });
  })
}

if (document.readyState !== 'loading') {
  onLoad();
} else {
  document.addEventListener('DOMContentLoaded', onLoad);
}
