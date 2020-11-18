$(document).ready(function(){
	$("#section_select").on("change",function(){
		$.ajax({
			type: "POST",
			url: "module/point/section.php" ,
			data: $("#section").serialize(),
			success: function(result){
				alert(result);
			},
			error: function(){
				alert("連線錯誤");
			}
		});
	});
	$("#pass_button").on("click",function(){
		$.ajax({
			type: "POST",
			url: "module/point/pass.php" ,
			data: $("#section").serialize(),
			success: function(result){
				alert(result);
			},
			error: function(){
				alert("連線錯誤");
			}
		});
	});
});	