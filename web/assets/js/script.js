/*
 * Author:
 * Your name here
 */

(function(){

	// Add some default values
	window.S = {
		basePath: document.body.getAttribute('data-base-url'),
		userAgent: navigator.userAgent,
		platform: navigator.platform
	};


	// Set up your functions here





	// On page-ready
	$(document).ready(function(){

		// Add a data-attribute of the user-agent to <html> - very useful and worthwhile
		// Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		var b = document.documentElement;
			b.setAttribute("data-useragent", Site.userAgent);
			b.setAttribute("data-platform", Site.platform);


		// Page is ready, start you stuff!





	});

}());
