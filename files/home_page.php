<?php
include("templates/page_template.php");
include("config.php");

//function add_to_chat() {
	//include("config.php");
	//$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES ('$_SESSION['login_user']', $text);
	//$result = mysqli_query($db,$chat_insert_query);
//}
?>

<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
</script>
<head>

</head>
<body>
<div class="middle">
	<div class="vertical-menu">
		<a href="#recserv" class="cascade">Recommended Services</a>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page1.php">Senate Hearing</a>
				<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Senatefloor.jpg" alt="Senate Hearing" width="100" height="60">
				</img>
			</div>
		</div>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page2.php">Town Hall<br>Meeting</a>
				<img src="https://media.glassdoor.com/l/44/eb/14/98/town-hall-meeting-in-action.jpg"
					alt="Town Hall Meeting" width="100" height="60">
				</img>
			</div>
		</div>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page3.php">Debate</a>
				<img src="https://media.npr.org/assets/img/2012/10/03/first_debate1-e2ffc0e8d70fdb7120584d533f027326b05e61c0-s900-c85.jpg"
					alt="Debate" width="100" height="60">
				</img>
			</div>
		</div>
		<a class="cascade" href="#pubserv">Other Public Services</a>
		<a class="cascade" href="#groupstreams">Streams by Groups</a>
	</div>
</div>




</body>

</html>
