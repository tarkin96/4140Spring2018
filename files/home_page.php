<?php
session_start();
echo "this is the homepage"
?>

<html>

<head>
	<title>Twitch Does Town Hall</title>
  
	<link rel="stylesheet" 
	href="font-awesome.min.css">

	<link rel="stylesheet"
	href="mystyles.css">
</head>

<body style="background-color:#444">
	

<div class="topnav">
	<a class="active" href="home_page.php">Home</a>
	<a href="#news">Browse</a>
	<a href="#archive">Archive</a>
	<a href="#officials">Officials</a>
	<a href="#constituencies">Constituencies</a>
	<a href="#account">Account</a>
	<a href="#help">Help</a>
	<?php
		if (array_key_exists('login_user', $_SESSION)) {
			//echo "Welcome, {$_SESSION['login_user']}!";
	?>
			<a class="link" href="logout.php">Logout</a>
	<?php
		}
		else {
	?>
			<a class="link" href="login.php">Login, or Create an Account</a>
	<?php
		}
	?>
	
	<input type="text" placeholder="Search">
	<button type="submit"><i class="fa fa-search"></i></button>
</div>

<div class="middle">
  <div class="vertical-menu">
    <a href="#recserv" class="listed">Recommended Services</a>
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
    <a class="listed" href="#pubserv">Other Public Services</a>
    <a class="listed" href="#groupstreams">Streams by Groups</a>
</div>

</body>

</html>
