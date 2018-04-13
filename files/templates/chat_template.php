<html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	function chat() {
		
		$.ajax({type:'POST', url: 'chat.php', data:$("[name='message']").serialize(), success: function(response) {
			//$('#ContactForm').find('.form_result').html(response);
			$("#chatbox").empty();
			$("#chatbox").append(response);
			if (response != "") {
				$("#chatbox").scrollTop($("#chatbox")[0].scrollHeight);
				//$(document).scrollTop();
			}
			//$("#chatbox").append($("#chatbox").scrollHeight);
		}});
		

		//$(document).on('submit', '#my-form', function() {
			// do your things
			//return false;
		//});
		document.getElementsByName("usermsg")[0].value = "";
		return false;
	}

	setInterval(function(){
	  	$.ajax({type:'POST', url: 'chat_check.php', data:"", success: function(response) {
			//$('#ContactForm').find('.form_result').html(response);
			//$("#chatbox").empty();
			$("#chatbox").append(response);
			//$("#chatbox").append($("#chatbox").scrollHeight);
		}});
	}, 2000);
</script>

<body>
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Stream Chat</p>
			<div style="clear:both"></div>
		</div>

		<form name="message" method="POST" action="" onsubmit="event.preventDefault(); chat();">
			<div id="chatbox" action="">

			</div>
		<?php if (array_key_exists('login_user', $_SESSION)) { ?>			
			<div id="in"> 
				<input name="usermsg" type="text" class="usermsg" />
				<input name="submitmsg" type="button"  class="submitmsg" value="Send" onclick="chat();"/>
			</div>
		<?php } else { ?>
				You must login to submit to the chat. 

		<?php } ?>
		</form>
	</div>
</body>
</html>