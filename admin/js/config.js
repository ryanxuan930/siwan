function announceAdmin(){
	var value = $("#admin_announcement").val();
	$.post("../admin/module/config/admin_announce.php",{content: value},function(data){
		alert(data);
		configpage();
	})
}
function announceAdmin(){
	var value = $("#front_announcement").val();
	$.post("../admin/module/config/front_announce.php",{content: value},function(data){
		alert(data);
		configpage();
	})
}
function alertSubmit(){
	var value = $("#alert").val();
	$.post("../admin/module/config/alert.php",{content: value},function(data){
		alert(data);
		configpage();
	})
}