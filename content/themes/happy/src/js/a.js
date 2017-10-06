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
		} else {
			$j('#transparency').removeClass('toggle-opacity');
			$j('.drop-down, .drop-down a').removeClass('toggle-opacity');
			$j('#toggle').html('Menu');
      $j('#toggle').removeClass('open');
		}
	});

	// AJAX LOADING
	$j('.right-link a').on('click', function(e){
    e.preventDefault();

    var routerPath = 'http://' + window.location.host;
    routerPath += '/happymenocal-dyna-17';
    routerPath += '/content/themes/happy/router.php';


    // var params = {
    // 	'post_id': 12,
    // 	'action': 'f711_get_post_content'
    // };

    // $j.post(STANDARD.ajaxurl, params)
    // .done(function(data){
    //   console.log('success! ', data)
    // })
    // .fail(function(err){
    //   console.log('AJAX error: ', err);
    // }, 'html');

    var params = $j(this).attr('href');

    $j.get(params,function(){},'html')
    .fail(function(err){
      console.log('POST failed: ', err);
    })
    .success(function(resp){
    	console.log('success!');
    	var rootHTML = $j(resp).find('.root');
    	var findBodyClasses = resp.match(/<body.*class=["']([^"'"]*)["'"].*>/);
    	var newBodyClasses = findBodyClasses[1].replace('initialize', '');

      $j('body #prime').after('<div class="root" id="inject"></div>');
      $j('div.root#inject').html(rootHTML.children());
      $j('body #prime').fadeOut().remove();
      $j('body').removeAttr('class').attr('class', newBodyClasses);
      $j('body .root').removeAttr('id').attr('id', 'prime');

    })

	});


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

			if($j('.image_2').length){
				$j('.image_2').css({'transform': 'translateX(0) translateY(-' + mutate + 'px)'});
			} else if ($j('.icon').length) {
				$j('.icon').css({'transform': 'translateX(0) translateY(' + mutate + 'px)'});
			}
	  });
	}


});


