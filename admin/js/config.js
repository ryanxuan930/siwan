function announceSubmit(){
	var value = $("#announcement").val();
	$.post("../module/config/announce.php",{content: value},function(data){
		alert(data);
		configpage();
	})
}