/*
* Static Node server
*
**/

//
// Namespacing
// ===================================
var S = {
		listenPort: 8055, // BOSS :)
		listenAddress : '127.0.0.1'
	},

	// required files/modules
	http = require('http'),
	path = require('path'), // file paths
	fs = require('fs'), // filesystem stuff
	connect = require('connect'); // required for using two lines of code, instead of 40
	
	
//
// STATIC FILE SERVER
// ====================================
var server = connect()
	.use(connect.static(__dirname + '/public'))
	
	.listen(S.listenPort, S.listenAddress); // keep the server connection open

console.log('Server running at http://' + S.listenAddress + ':' + S.listenPort + '/');