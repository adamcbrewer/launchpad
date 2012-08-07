// Setup our namespace
var S = {
		listenPort: 8055, // BOSS :)
		listenAddress : '127.0.0.1',



		//
		// CUSTOM FILE SERVER SETTINGS
		// ====================================

		// Server functions
		getFile: function (localPath, mimeType, res) {
			// read the file and return it, otherwise
			// return a 500 as it can't be read
			fs.readFile(localPath, function (err, contents) {
				if (!err) {
					// set our headers
					res.writeHead(200, {
						"Content-Type": mimeType,
						"Content-Length": contents.length
					});
					// write the contents and end the connection
					res.end(contents);
				} else {
					res.writeHead(500);
					res.end();
				}
			});
		}


	},

// required files
	http = require('http'),
	path = require('path'), // file paths
	fs = require('fs'), // filesystem stuff
	connect = require('connect'); // if we want a file-server in two lines, instead of 40 :P
	
	//
	// CUSTOM FILE SERVER SETTINGS
	// ====================================
	
	// these are the allowed extensions
	extensions = {
		".html": "text/html",
		".css": "text/css",
		".js": "application/javascript",
		".json": "application/json",
		".png": "image/png",
		".gif": "image/gif",
		".jpg": "image/jpeg"
	};


//
// CUSTOM FILE SERVER
// ====================================
/*
http.createServer(function (req, res) {
	
	var filename = path.basename(req.url) || 'index.html', // look for a filename in the URL, otherwise default to index.html
		ext = path.extname(filename),
		dir = path.dirname(req.url).substring(1), // the current directory we're trying to access
		localPath = __dirname + '/public/'; // built-in method - contains path where code is running

	if (extensions[ext]) {
		localPath += ( dir ? dir + '/' : '' ) + filename; // setup the requested file location, including if dir is specified

		path.exists(localPath, function (exists) {
			if (exists) {
				S.getFile(localPath, extensions[ext], res);
			} else {
				res.writeHead(404);
				res.end();
			}
		});

	}


	res.writeHead(200, {
		'Content-Type': 'text/html'
	});

}).listen(S.listenPort, S.listenAddress); // open the server connection
*/


//
// STATIC FILE SERVER
// ====================================
connect()
	.use(connect.static(__dirname + '/public'))
	.listen(S.listenPort, S.listenAddress);

console.log('Server running at http://' + S.listenAddress + ':' + S.listenPort + '/');