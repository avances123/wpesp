/**
 * --------------------------------------------------------------------
 * jQuery-Plugin "preloadCssImages"
 * by Scott Jehl, scott@filamentgroup.com
 * http://www.filamentgroup.com
 * reference article: http://www.filamentgroup.com/lab/automated_image_preloading/
 * demo page: http://www.filamentgroup.com/examples/preloadImages/
 * 
 * Copyright (c) 2008 Filament Group, Inc
 * Licensed under GPL (http://www.opensource.org/licenses/gpl-license.php)
 *
 * Version: 1.0, 31.05.2007
 * Changelog:
 * 	02.20.2008 initial Version 1.0
 * --------------------------------------------------------------------
 */
$.preloadCssImages = function(settings){
	//overrideable defaults
	settings = jQuery.extend({
		 imgDir: 'images'
	}, settings);

	//dump all the css rules into one string
	var sheets = document.styleSheets;
	var cssPile = '';
	for(var i = 0; i<sheets.length; i++){
		if(!$.browser.msie){
			var thisSheetRules = document.styleSheets[i].cssRules;
			for(var j = 0; j<thisSheetRules.length; j++){
				cssPile+= thisSheetRules[j].cssText;
			}
		}
		else {
			cssPile+= document.styleSheets[i].cssText;
		}
	}
	//parse string for image urls and load them into the DOM
	var allImgs = [];//new array for all the image urls  
	var imgUrls = cssPile.match(/[^\/]+\.(gif|jpg|jpeg|png)/g);//reg ex to get a string of between a "/" and a ".filename"
	if(imgUrls != null && imgUrls.length>0 && imgUrls != ''){//loop array
		var arr = jQuery.makeArray(imgUrls);//create array from regex obj	 
		$(arr).each(function(k){
			allImgs[k] = new Image(); //new img obj
			allImgs[k].src = settings.imgDir +'/'+ this;	
		});
	}
	return allImgs;
}

