var express = require('express'),
app = express(),
http = require('http').Server(app),
io = require('socket.io')(http),
port = 3000;

app.get('/', function(req, res){
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

http.listen(port, function(){
	console.log("Node server listening on port " + port);
});