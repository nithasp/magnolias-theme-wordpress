/**
 * Theme Name: Mono
 * Version: 1.1.0
 * Theme URL: http://sequencejs.com/themes/mono/
 *
 * A minimal but colorful slider for showcasing one large product per slide
 *
 * This theme is powered by Sequence.js - The
 * responsive CSS animation framework for creating unique sliders,
 * presentations, banners, and other step-based applications.
 *
 * Author: Ian Lunn
 * Author URL: http://ianlunn.co.uk/
 *
 * Theme License: http://sequencejs.com/licenses/#free-theme
 * Sequence.js Licenses: http://sequencejs.com/licenses/
 *
 * Copyright © 2015 Ian Lunn Design Limited unless otherwise stated.
 */

// Get the Sequence.js element
var sequenceElement = document.getElementById("sequence");

// Place your Sequence options here to override defaults
// See: http://sequencejs.com/documentation/#options
var options = {  
  phaseThreshold: true,
  reverseWhenNavigatingBackwards: false,
  preloader: false,
  autoPlay: true,
  autoPlayPauseOnHover:false,
  autoPlayInterval: 7000
}

// Launch Sequence on the element, and with the options we specified above
if($('#sequence').length){
var mySequence = sequence(sequenceElement, options);



mySequence.animationEnded=function(){
	//console.log('animate done');
	$('.seq-in').children('.word').addClass('show');
}
mySequence.currentPhaseStarted=function(){
	//console.log('animate done');
	$('.seq-in').children('.word').toggleClass('show');
}
mySequence.preloadProgress = function(progress, length) { alert('check');
  console.log("progress: " + progress + " of " + length);
}

}
