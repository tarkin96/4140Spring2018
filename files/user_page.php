<?php
	session_start();
	if (!array_key_exists('login_user', $_SESSION)) : 
		header("Location: http://webapp.cs.clemson.edu/~jwk/login.php");
	else :
		echo "Welcome, {$_SESSION['login_user']}!";
	endif;
?>
<html>
<head>

<link rel="stylesheet" 
href="font-awesome.min.css">

<link rel="stylesheet"
href="mystyles.css">

<style>


</style>
</head>

<body>

<div class="topnav">
  <a class="active" href="http://webapp.cs.clemson.edu/~jwk/home_page.php">Home</a>
  <a href="#news">Browse</a>
  <a href="#archive">Archive</a>
  <a href="#officials">Officials</a>
  <a href="#constituencies">Constituencies</a>
  <a href="#account">Account</a>
  <a href="#help">Help</a>
  <a href="logout.php">Logout</a>
  <input type="text" placeholder="Search">
  <button type="submit"><i class="fa fa-search"></i></button>
</div>

<div class="middle">
  <div class="vertical-menu">
    <a href="#recserv" class="label">Recommended Services</a>
    <div class="block">
	<service href="#senate">Senate Hearing</service>
	<div class="photo">
	<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Senatefloor.jpg" alt="Senate Hearing" width="100" height="60"></div>
    </div>
    <div class="block">
	<service href="#townhall">Town Hall<br>Meeting</service>
	<div class="photo">
    <img src="https://media.glassdoor.com/l/44/eb/14/98/town-hall-meeting-in-action.jpg"
alt="Town Hall Meeting" width="100" height="60""></div>
    </div>
    <div class="block">
	<service href="#debate">Debate</service>
	<div class="photo">
    <img src="https://media.npr.org/assets/img/2012/10/03/first_debate1-e2ffc0e8d70fdb7120584d533f027326b05e61c0-s900-c85.jpg"
alt="Debate" width="100" height="60""></div>
    </div>
    <a href="#pubserv">Other Public Services</a>
    <a href="#groupstreams">Streams by Groups</a>
  </div>
    
  <div class="stream">
    <iframe 
        src="http://player.twitch.tv/?channel=Ninja" 
        height="432" 
        width="768" 
        frameborder="0" 
        scrolling="no"
        allowfullscreen="true">
    </iframe>
  </div>

  <div class="chat">

  </div>
</div>

<div class="bottom">
  <div class="poll">

  </div>
</div>

</body>

</html>
