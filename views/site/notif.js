var socket = io.connect('https://chatserver.dutainformasi.net');
socket.on('notif', function (data) {
	$( "#notifikasi" ).prepend( "<p><strong>" + data.name + "</strong>: " + data.message + "</p>" );
	//$.notify("<strong>" + data.name + "</strong>: " + data.message);
	$.notify({
		message: "<strong>" + data.name + "</strong>: " + data.message,
		
	}, {
		type: 'success',
		placement: {
			from: "bottom",
			align: "left"
		},
	})
});

$('#chat-form').submit(function() {
	var nama = $("#nick_name").val();
	var msg = $("#message-field").val();
	if ((nama != '') && (msg != '')){
		socket.emit('notif',{ name: nama, message: msg});
		$("#message-field").val("");
	}
	return false;
});