
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

function onLoad() {
  document.querySelector('nav .toggle').addEventListener('click', toggleNavBar);
}

if (document.readyState !== 'loading') {
  onLoad();
} else {
  document.addEventListener('DOMContentLoaded', onLoad);
}
