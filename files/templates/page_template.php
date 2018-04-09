<?php
session_start();
?>
<html style="width:100%; height:200%; overflow: scroll">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	function chat() {
		
		$.ajax({type:'POST', url: 'chat.php', data:$("[name='message']").serialize(), success: function(response) {
			//$('#ContactForm').find('.form_result').html(response);
			$("#chatbox").empty();
			$("#chatbox").append(response);
			$("#chatbox").scrollTop = $("#chatbox").scrollHeight;
		}});
		

		//$(document).on('submit', '#my-form', function() {
			// do your things
			//return false;
		//});
		document.getElementsByName("usermsg")[0].value = "";
		return false;
	}

	function submitQuest() {
		$.ajax({type:'POST', url: 'submitQuest.php', data:$("[name='questsubmit']").serialize(), success: function(response) {
			//$('#ContactForm').find('.form_result').html(response);
			document.getElementsByName("questsubmit")[0].append(response);
			document.getElementById("questtext").value = "";
		}});
	}

	//setInterval(function(){
	  //chat();
	//}, 1000);
</script>

<head>
	<title>Twitch Does Town Hall</title>
  
	<link rel="stylesheet" 
	href="font-awesome.min.css">

	<link rel="stylesheet"
	href="mystyles(wade).css">
</head>

<body style="background-color:#444">

<div class="topnav">
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "home_page.php")) {?>active<?php }?>" href="home_page.php">Home</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "browse.php") or strpos($_SERVER['REQUEST_URI'], "user_page"))
		{?>active<?php }?>" href="browse.php">Browse</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "archive.php")) {?>active<?php }?>" href="archive.php">Archive</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "officials.php")) {?>active<?php }?>" href="officials.php">Officials</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "constituencies.php")) {?>active<?php }?>" href="constituencies.php">Constituencies</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "account_info.php")) {?>active<?php }?>" href="account_info.php">Account</a>
	<a class="<?php if (strpos($_SERVER['REQUEST_URI'], "help.php")) {?>active<?php }?>" href="help.php">Help</a>
	<?php
		if (array_key_exists('login_user', $_SESSION)) {
			//echo "Welcome, {$_SESSION['login_user']}!";
	?>
			<a class="righty" href="logout.php">Logout</a>
	<?php
		}
		else {
	?>
			<a class="righty" href="login.php">Login, or Create an Account</a>
	<?php
		}
	?>
	
	<input type="text" placeholder="Search">
	<button type="submit"><i class="fa fa-search"></i></button>
</div>

</body>

</html>
