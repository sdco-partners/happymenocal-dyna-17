/**
*
* A is for Airplane
*
*/

var $j = jQuery.noConflict();

$j(document).ready(function(){

	// Menu Toggle Functionality
	$j('#toggle').on('click', function(){
		var isOpen = $j('#toggle').hasClass('open');
		var links = $j('.dropdown').children();
		if(!isOpen) {
			$j('#toggle').addClass('open');
      $j('.drop-down a').addClass('toggle-opacity');
		} else {
			$j('.drop-down a').removeClass('toggle-opacity');
      $j('#toggle').removeClass('open');
		}
	});



	// Toggle styles based on page type
	var pageClasses = $j('body').attr('class');
	pageClasses = pageClasses.split(' ');

  inspectPageType(pageClasses, function(thisClass, prefix){
    var pageName = thisClass.replace(prefix, '');
    $j('#' + pageName).addClass('toggle-active');
  }, function(thisClass, prefix){
		$j('#special-projects').addClass('toggle-active');
  });



	// Trigger Slider if Has Children
	var slides = $j('.slider-block').children();
	if(slides.length > 1){
    fader(slides, slides.length-1);
	}


});


