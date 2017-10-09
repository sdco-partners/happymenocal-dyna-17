/**
*
* A is for Airplane
*
*/

var $j = jQuery.noConflict();

$j(document).ready(function(){

	// Fade in
	$j('body').removeClass('initialize');

	// Menu Toggle Functionality
	$j('#toggle').on('click', function(){
		var isOpen = $j('#toggle').hasClass('open');
		var links = $j('.dropdown').children();
		if(!isOpen) {
			$j('#toggle').addClass('open');
			$j('#toggle').html('Close');
      $j('.drop-down, .drop-down a').addClass('toggle-opacity');
      $j('#transparency').addClass('toggle-opacity');
      $j('.logo').addClass('toggle-opacity');
		} else {
			$j('.logo').removeClass('toggle-opacity');
			$j('#transparency').removeClass('toggle-opacity');
			$j('.drop-down, .drop-down a').removeClass('toggle-opacity');
			$j('#toggle').html('Menu');
      $j('#toggle').removeClass('open');
		}
	});


	// AJAX LOADING
	// $j('body .right-link a').on('click', function(e){
 //    e.preventDefault();
 //    var params = $j(this).attr('href');
 //    ajaxURLLoading(params);

	// });


	// Toggle styles based on page type
	var pageClasses = $j('body').attr('class');
	if (pageClasses) {
		pageClasses = pageClasses.split(' ');
	  inspectPageType(pageClasses, function(thisClass, prefix){
	    var pageName = thisClass.replace(prefix, '');
	    $j('#' + pageName).addClass('toggle-active');
	  }, function(thisClass, prefix){
			$j('#special-projects').addClass('toggle-active');
	  });
	}



	// Trigger Slider if Has Children
	var slides = $j('.slider-block').children();
	if(slides.length > 1){
    fader(slides, slides.length-1); 
	}


	// Trigger Animations
	if($j('.single').length){	
		$j(window).scroll(function(){ 
			var scroll = $j(window).scrollTop();
			var mutator = 15;
			var mutate =  scroll/mutator;
      
      if ($j('body.postwp-marion').length) {
        console.log('animation disabled');
      } else if($j('body .image_2').length){
				$j('body .image_2').css({'transform': 'translateX(0) translateY(-' + mutate + 'px)'});
			} else if ($j('.icon').length) {
				$j('body .icon').css({'transform': 'translateX(0) translateY(' + mutate + 'px)'});
			}
	  });
	}

	// Smooth Hash Scrolling
	if($j('.postwp-instructions').length) {
	  $j('div.nav a').on('click', function(e){
	  	var hash = this.hash;
	  	if (hash !== "") {
		  	e.preventDefault();
		    anchorScroll(hash);
	  	}
	  });		
	}




});


