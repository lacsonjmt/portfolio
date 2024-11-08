import './bootstrap';
import anime from 'animejs/lib/anime.es.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var mPlayer = document.querySelector('#m-player')
var navButton = document.querySelector('#nav-button');
var aboutSection = document.querySelector('#nav-button');

onresize = (e) => {
  console.log(window.innerWidth, window.innerHeight);
}

mPlayer.addEventListener('mouseover', function (e) {
  anime({
    targets: '#m-player',
    width: '20vw',
    duration: 1000,
    easing: 'easeOutExpo',
  });
});

mPlayer.addEventListener('mouseout', function (e) {
  anime({
    targets: '#m-player',
    width: '5vw',
    duration: 1000,
    easing: 'easeOutExpo',
  })
});

// navButton.onclick = (function (e) {
//   anime({
//     targets: '.b2',
//     d: {

//       // M1440 289.666C1440 289.666 1090.9 540 693.257 540C295.612 540 0 289.666 0 289.666L693.257 540L1440 289.666Z

//       value: [ 'M1440,-0.00081h1440v22.695865L790.374676,31.90299c.048036.189341,0,66.648137-70.374676,66.648137v0v0c-69.774041,0-69.555301-66.462947-69.774041-540L1440,31.90299v 289.666Z' , 'M0,-0.00081h1440v22.695865L790.374676,31.90299c.048036.189341,0,66.648137-70.374676,66.648137v0v0c-69.774041,0-69.555301-66.462947-69.774041-66.648137L0,31.90299v-31.9038Z' ],
//       duration: 600,
//       easing: 'easeOutQuad',
//       loop: true,
//       direction: 'alternate'
//     },
//     offset: 0
//   });
//   anime({
//     targets: '.b1',
//     d: {
//       value: [,],
//       duration: 600,
//       easing: 'easeOutQuad'
//     },
//     offset: 0
//   })
//   alert('asd');
// });
