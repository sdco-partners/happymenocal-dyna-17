/*
*
* FUNCTION FADER
*
*/

var fader = function(slides, current = slides.length, toggle = 'toggle-opacity', timer = 3000){
	// base step
  if(current <= 0){
  	setTimeout(function(){
	    slides.addClass(toggle);
	    current = slides.length-1;
	    fader(slides, current);
  	}.bind(slides, current), timer);
  // recursive step
  } else {
  	setTimeout(function(){
	  	$j(slides[current]).removeClass(toggle);
	  	current--;
	  	fader(slides, current);
  	}.bind(slides, current), timer);
  }
}