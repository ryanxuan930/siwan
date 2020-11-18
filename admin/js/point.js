$(document).ready(function(){
	$("#section_select").on("change",function(){
		alert("change");
		$.ajax({
			type: "POST",
			url: "module/point/section.php" ,
			data: $("#section").serialize(),
			success: function(result){
				alert("ok");
			},
			error: function(){
				alert("error");
			}
		});
	});
});	