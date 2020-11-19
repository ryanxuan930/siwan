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
	$("#pass_button").click(function(){
		var input = $("#pass").val();
		$.post("module/point/pass.php",{id: input, host: "'.$_SESSION['account'].'"},function(e){
			alert(e);
		});
	});
});	
function query(input){
	$.post("module/point/pass.php",{id: input, host: "'.$_SESSION['account'].'"},function(e){
		alert(e);
	});
}