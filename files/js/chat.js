	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("chat.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});