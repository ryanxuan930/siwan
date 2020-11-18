$("#section_select").on("change",function(){
	$.ajax({
		type: "POST",
		url: "../module/point/section.php" ,
		data: $("#section").serialize(),
		success: function(result){
			alert(result);
		},
		error: function(){
			alert("error");
		}
	});
});
