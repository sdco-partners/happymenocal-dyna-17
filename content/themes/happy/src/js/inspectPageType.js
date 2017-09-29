/*
*
* INSPECT PAGE TYPE
*
*/

var inspectPageType = function(pageClasses, pageCallback, postCallback, prefix = 'postwp-', single = 'single'){
	for (var i = 0; i < pageClasses.length; i++){
    var thisClass = pageClasses[i];
    // If a PAGE 
    if(thisClass.indexOf(prefix) > -1) {
      pageCallback(thisClass, prefix);
    // else if a POST
    } else if(thisClass.indexOf('single') > -1) {
			postCallback(thisClass, prefix);
    }
	}
}

