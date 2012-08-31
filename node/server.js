var http = require('http'),
	https = require('https'),
	fs = require('fs'),
	express = require('express'),
	handlebars = require('handlebars'),

	config = require(__dirname + '/config.js'),
	Client = require(__dirname + '/models/client.js'),
	server = express(),

	serverInst = http.createServer(server),
	io = require('socket.io').listen(serverInst),


	Server = {

		//
		// SETTINGS AND CONFIGS
		//
		// =========================================
		//
		clients: [],

		init: function () {

		},

		//
		// createClient
		//
		// Push the connected client to the stack.
		// Each one should have it's own socket with which to connect to.
		// =========================================
		//
		createClient: function (client) {

			this.clients.push(client);
			console.log('-- LOG: The connected clients are: ' + this.clients.length);
			this.broadcast({ message: 'hello you!'} , client, true);

		},


		//
		// destroyClient
		//
		// Takes an ID and removes the client from the stack.
		// =========================================
		//
		destroyClient: function (id) {
			var that = this;
			this.clients.forEach(function (client, i) {
				if (id === client._key) {
					that.clients.splice(i, 1);
					console.log('-- LOG: The connected clients are: ' + that.clients.length);
					return;
				} else {
					console.log('-- LOG: Couldn\'t find client with id: ' + id);
				}
			});

		},


		//
		// broadcast
		//
		// Takes the client object to use for emitting socket
		// messages to all the clients connected.
		//
		// Socket.io can either send to just one client, or all, so 'includeOrigin'
		// can be specified to include the client in on the message we want to send.
		// =========================================
		//
		broadcast: function (data, client, includeOrigin) {

			includeOrigin = includeOrigin || false; // send the message to the original client as well?
			data = data || {}; // the data we're sending to each of the clients
			client = client || this.clients[0] || false; // if client isn't specified then grab the first one

			if (client) {
				// Send to the original client
				if (includeOrigin) {
					// We can send the default 'all' data to eveybody if we don't
					// specify anything specifically for the original client
					var dataClient = data.client || data.all;
					client.socket.emit('broadcast', { results: data });
				}

				// Send to everyone
				client.socket.broadcast.emit('broadcast', { results: data });
			}

		},


		//
		// loadTemplate
		//
		// Will read any template file when requested.
		// =========================================
		//
		loadTemplate: function (templateFile) {

			var source = fs.readFileSync(__dirname + '/view/'+ templateFile, 'utf8', function (err, html) {
				if (err) throw err;
				return html;
			});
			return source;

		}

	};


// This code sets up the HTML server where we want users to visit.
//
// When a user lands on this page, a new http request should be fired
// to retreive the account changeset.
serverInst.listen(config.serverPort);

var publicDir = __dirname + '/public',
	assetsDir = publicDir + '/assets';

console.log(assetsDir);

// Route all our requested assets to the public assets directory
server.use('/assets', express.static(assetsDir));

server.get('/*', function (req, res) {

	var source = Server.loadTemplate('layout.tmpl'),
		template = handlebars.compile(source),
		view = template({
			basePath: config.basePath,
			siteurl: config.basePath + ':' + config.serverPort
		});

	res.send(view);

});


io.sockets.on('connection', function (socket) {
	console.log('-- LOG: New client connection - ' + socket.id);

	// Adding a client to the connected stack
	Server.createClient(new Client({ socket: socket}));

	// Remove the client from the server conection stack
	socket.on('disconnect', function () {
		Server.destroyClient(socket.id);
	});

});
