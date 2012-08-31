(function (App) {

	App = App || {};

	//
	// Socket.io Listeners
	//
	// =========================================
	//
	App.socket.on('broadcast', function (data) {

		console.log(data);

	});

}(App));
