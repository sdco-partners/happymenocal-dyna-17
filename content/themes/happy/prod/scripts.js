"use strict";var $j=jQuery.noConflict();$j(document).ready(function(){$j("body").removeClass("initialize"),$j("#toggle").on("click",function(){var o=$j("#toggle").hasClass("open");$j(".dropdown").children();o?($j(".logo").removeClass("toggle-opacity"),$j("#transparency").removeClass("toggle-opacity"),$j(".drop-down, .drop-down a").removeClass("toggle-opacity"),$j("#toggle").html("Menu"),$j("#toggle").removeClass("open")):($j("#toggle").addClass("open"),$j("#toggle").html("Close"),$j(".drop-down, .drop-down a").addClass("toggle-opacity"),$j("#transparency").addClass("toggle-opacity"),$j(".logo").addClass("toggle-opacity"))});var o=$j("body").attr("class");o&&(o=o.split(" "),inspectPageType(o,function(o,e){var t=o.replace(e,"");$j("#"+t).addClass("toggle-active")},function(o,e){$j("#special-projects").addClass("toggle-active")}));var e=$j(".slider-block").children();e.length>1&&fader(e,e.length-1),$j(".postwp-instructions").length&&$j("div.nav a").on("click",function(o){var e=this.hash;""!==e&&(o.preventDefault(),anchorScroll(e))})});var ajaxDataLoading=function(o){arguments.length>1&&void 0!==arguments[1]?arguments[1]:LOCALIZE;$j.post(LOCALIZE.ajaxurl,o).done(function(o){console.log("success! ",o)}).fail(function(o){console.log("AJAX error: ",o)},"html")},ajaxURLLoading=function(o){$j.get(o,function(){},"html").fail(function(o){console.log("POST failed: ",o)}).success(function(o){console.log("success!");var e=$j(o).find(".root"),t=o.match(/<body.*class=["']([^"'"]*)["'"].*>/),n=t[1].replace("initialize","");$j("body #prime").after('<div class="root inject" style="background-color: #fff"></div>'),$j("div.root.inject").html(e.children()),$j("body").removeAttr("class").attr("class",n),setTimeout(function(){$j("body .root.inject").addClass("slide"),$j("body #prime").remove(),$j("body .root").attr("id","prime").removeClass("inject")},500)})},anchorScroll=function(o){$j("html, body").animate({scrollTop:$j(o).offset().top},900,function(){window.location.hash=o})},fader=function o(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:e.length,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"toggle-opacity",a=arguments.length>3&&void 0!==arguments[3]?arguments[3]:6e3;t<=0?setTimeout(function(){e.removeClass(n),t=e.length-1,o(e,t)}.bind(e,t),a):setTimeout(function(){$j(e[t]).addClass(n),t--,o(e,t)}.bind(e,t),a)},inspectPageType=function(o,e,t){for(var n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"postwp-",a=(arguments.length>4&&void 0!==arguments[4]&&arguments[4],0);a<o.length;a++){var l=o[a];l.indexOf(n)>-1?e(l,n):l.indexOf("single")>-1&&t(l,n)}};