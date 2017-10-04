/*
*
* FUNCTION FADER
*
*/

var fader = function(slides, current = slides.length, toggle = 'toggle-opacity', timer = 6000){
	// base step
  if(current <= 0){
  	setTimeout(function(){
	    slides.removeClass(toggle);
	    current = slides.length-1;
	    fader(slides, current);
  	}.bind(slides, current), timer);
  // recursive step
  } else {
  	setTimeout(function(){
	  	$j(slides[current]).addClass(toggle);
	  	current--;
	  	fader(slides, current);
  	}.bind(slides, current), timer);
  }
}