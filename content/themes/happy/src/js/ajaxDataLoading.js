/*
*
*  ajaxDataLoading
*
*  @params      =>      A JS object including a 'post_id' and an 'action' that ties into function.php
*  @localize    =>      Should be specified in functions.php via 'wp_localize_script'
*
*/


var ajaxDataLoading = function(params, localize = LOCALIZE) {
  $j.post(LOCALIZE.ajaxurl, params)
  .done(function(data){
    console.log('success! ', data)
  })
  .fail(function(err){
    console.log('AJAX error: ', err);
  }, 'html');
}