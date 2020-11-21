function announceSubmit(){
	var value = $("#announcement").val();
	$.post("../admin/module/config/announce.php",{content: value},function(data){
		alert(data);
		configpage();
	})
}