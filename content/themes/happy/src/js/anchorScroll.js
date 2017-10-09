var anchorScroll = function(hash){
  $j('html, body').animate({
  	scrollTop: $j(hash).offset().top
  }, 900, function(){
  	window.location.hash = hash;
  });
}
