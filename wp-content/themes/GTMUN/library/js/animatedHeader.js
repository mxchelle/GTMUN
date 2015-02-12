/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.navbar' ),
		logo = document.querySelector( '.navbar-brand img' ),
		didScroll = false,
		changeHeaderOn = 300,
		atHeader = true;

	

	function init() {
		if( scrollY() > changeHeaderOn){
			atHeader = false;
		}

		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			
			if(atHeader){

					classie.add( header, 'navbar-shrink' );
					atHeader = false;
			}
			
		}
		else {
			
			if(!atHeader){
				classie.remove( header, 'navbar-shrink' );
				//Grow logo
				atHeader = true;
			}
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();