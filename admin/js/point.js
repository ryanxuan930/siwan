$("#section_select").on("change",function(){
	$.ajax({
		type: "POST",
		url: "../module/point/section.php" ,
		data: $("#section_select").serialize(),
		success: function(result){
			alert(result);
		},
		error: function(){
			alert("error");
		}
	});
});
