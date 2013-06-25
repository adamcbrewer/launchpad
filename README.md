# Launchpad
![Launchpad](http://images2.wikia.nocookie.net/__cb20111103182547/poohadventures/images/3/3b/LaunchpadMcQuack.gif)

### Web Boilerplate

This ain't no [H5BP](https://github.com/h5bp/html5-boilerplate). Rather it's meant as a rapid, lightweight place from which to start a new project. Mostly everything I use in my daily workflow is included, with a few optimisations and useful helpers collected from around the web. Attributions are given where relevant/possible.

##### Getting started:

1. Clone this project
2. Run ```bower install``` to install the latest versions or the required components
3. Run ```grunt``` to get up and running (install bower components to the ```assets/js/libs``` directory)

##### Building:

+ ```grunt reset``` - return the application to its pre-install state
+ ```grunt build``` - Create a **development** ready build version of all JS files in ```assets/js/min/script.dev.min.js```. Comments and whitespace preserved. Less files compiled to ```assets/css/core.css``` with line-numbers preserved.
+ ```grunt build:release``` - Create a minified **release/production** ready build ```assets/js/min/script.release.min.js```. Compressed and minified. Less files compiled and compressed to ```assets/css/core.css```.
+ ```grunt reset```

Consult ```Gruntfile.js``` for calling any specific tasks.

##### Testing:

If you've having a poke around and need a clean app, run ```grunt reset``` to remove all of the following files:

+ ```bower_components/*```
+ ```assets/js/libs/*```
+ ```assets/js/plugins.js```
+ ```assets/js/min/```

##### From around the web

* HTML5BP
* Modernizr
* LESS
* Facebook Open Graph meta stuff
* Basic namespacing
* .htaccess file in /assets for delivering gziped css/js files, if apache is configured to handle gzipping
