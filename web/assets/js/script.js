/**
 * Author:
 *
 */

// Semi-colon for concatenation safety
;(function(M, window, document, undefined){

	/**
	 * Name-spacing
	 *
	 * Here we have to specifially define which
	 * objects belong in the global object
	 *
	 */
	window.S = {
		basePath: document.body.getAttribute('data-base-url'),
		userAgent: navigator.userAgent,
		platform: navigator.platform
	};


	/**
	 * User-agenct data-attributes
	 *
	 * Add a data-attribute of the user-agent to <html> - very useful and worthwhile
	 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"]
	 *
	 */
	var b = document.documentElement;
	b.setAttribute("data-useragent", S.userAgent);
	b.setAttribute("data-platform", S.platform);


	/**
	 * Your functions here
	 *
	 */


	/**
	 * Async script loading
	 */
	Modernizr.load({
		load: [
			S.basePath + '/assets/js/libs/jquery-1.8.2.js'
		],
		complete: function () {

			// do stuff

		}
	});

}(Modernizr, window, document));
