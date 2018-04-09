/*
*
* ajaxDataLoading
*
*/

var ajaxURLLoading = function(params) {
  $j.get(params, function(){
  	// Disabled
  }, 'html')
  .fail(function(err){
    console.log('GET failed: ', err);
  })
  .success(function(resp){
  	console.log('success!');

  	var rootHTML = $j(resp).find('.root');
  	var findBodyClasses = resp.match(/<body.*class=["']([^"'"]*)["'"].*>/);
  	var newBodyClasses = findBodyClasses[1].replace('initialize', '');

    $j('body #prime').after('<div class="root inject" style="background-color: #fff"></div>');
    $j('div.root.inject').html(rootHTML.children());
    $j('body').removeAttr('class').attr('class', newBodyClasses);

    setTimeout(function(){
      $j('body .root.inject').addClass('slide');
      $j('body #prime').remove();
      $j('body .root').attr('id','prime').removeClass('inject')
    }, 500);
    
  });
}