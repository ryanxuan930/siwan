$(document).ready(function () {

	Webcam.attach('#scan_display');

	$('#scan').click(function () {
		take_snapshot();
	});

	qrcode.callback = showInfo;

});

function take_snapshot() {
	Webcam.snap(function (dataUrl) {
		qrCodeDecoder(dataUrl);
	});
}

// decode the img
function qrCodeDecoder(dataUrl) {
	qrcode.decode(dataUrl);
}

// show info from qr code
function showInfo(data) {
	
	alert('學號'+data+'成功過關');
}
