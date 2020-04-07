var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http, {origins: '*:*'}); //enable cors with your domain

app.get('/', function (req, res) {
	//res.json({'/': 'Helo World'});
	res.send("<h1>It works!</h1>");
});

io.on('connection', function(socket){
	console.log('new client connected');
	socket.on('disconnet', function(){
		console.log('a client disconnect');
	})
	socket.on('notif',function(msg){
		console.log('message: '+msg.name+ ': ' + msg.message);
		io.emit('notif', {name: msg.name, message: msg.message});
	})
});

http.listen(3000, function(){
	console.log('listening on *:3000');
});