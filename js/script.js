// PRESS THE MENU BUTTON TO TRIGGER ANIMATION
// PRESS PLAY BUTTON TO LISTEN THE DEMO SONG

// As seen on: "https://dribbble.com/shots/2144866-Day-5-Music-Player-Rebound/"
"use strict";

const options = {
  defaultSpeed: '1.00',
  speeds: ['1.25','1.50', '2.00', '0.75'],
  loop: true,
  skipBackInterval: 15,
  jumpForwardInterval: 15,
  features: [
    "playpause",
    "progress",
    "current",
    "duration",
    "skipback",
    "changespeed",
    "volume",
    "jumpforward",
  ]
}

new MediaElementPlayer(
  document.querySelector("audio"),
  options
 );

// Separate the audio controls so I can style them better.
(() => {
	const elementTop = document.createElement('div');
  const elementBottom = document.createElement('div');
	elementTop.classList.add('mejs-prepended-buttons');
  elementBottom.classList.add('mejs-appended-buttons');

	const controls = document.querySelector('.mejs__controls');
	controls.prepend(elementTop);
  controls.append(elementBottom);
  
	const controlsChildren = Array.from(controls.childNodes).filter(v => v.className.startsWith("mejs_"));

  controlsChildren.slice(0, 3).forEach(elem => {
     elementTop.append(elem)
  });
  
  controlsChildren.slice(3, controlsChildren.length).forEach(elem => {
    elementBottom.append(elem)
  })
})()
// THANK YOU!