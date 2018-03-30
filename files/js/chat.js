	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("chat.php", {text: clientmsg}, function(data){ console.log(data);});				
		$("#usermsg").attr("value", "");
		return false;
	});