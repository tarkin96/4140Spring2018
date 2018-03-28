<?php
include("templates/page_template.php");
?>

<html>

<head>
	
	<title>Twitch Does Town Hall</title>
  
	<link rel="stylesheet" 
	href="font-awesome.min.css">

	<link rel="stylesheet"
	href="mystyles.css">

</head>

<div class="middle">
  <div class="vertical-menu">
    <a href="#recserv" class="cascade">Recommended Services</a>
    <div class="block">
		<a href="user_page.php">Senate Hearing</a>
		<div class="photo">
			<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Senatefloor.jpg" alt="Senate Hearing" width="100" height="60">
			</img>
		</div>
	</div>
    <div class="block">
		<service href="#townhall">Town Hall<br>Meeting</service>
		<div class="photo">
			<img src="https://media.glassdoor.com/l/44/eb/14/98/town-hall-meeting-in-action.jpg"
				alt="Town Hall Meeting" width="100" height="60">
			</img>
		</div>
	</div>
    <div class="block">
		<service href="#debate">Debate</service>
		<div class="photo">
			<img src="https://media.npr.org/assets/img/2012/10/03/first_debate1-e2ffc0e8d70fdb7120584d533f027326b05e61c0-s900-c85.jpg"
				alt="Debate" width="100" height="60">
			</img>
		</div>
    </div>
    <a class="cascade" href="#pubserv">Other Public Services</a>
    <a class="cascade" href="#groupstreams">Streams by Groups</a>
</div>

</body>

</html>
