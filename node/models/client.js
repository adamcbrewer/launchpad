/*
* Client.js
*
* A new instance of this should be created each time a new client connect to the server
*
**/
module.exports = function (params) {

	var socket = params.socket || false;

	client = {

		_init: function () {

			this.socket = socket;
			this._key = socket.id;

		}

	};

	client._init();

	return client;

};
