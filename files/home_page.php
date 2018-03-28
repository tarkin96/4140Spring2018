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

<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">Browse</a>
  <a href="#archive">Archive</a>
  <a href="#officials">Officials</a>
  <a href="#constituencies">Constituencies</a>
  <a href="#account">Account</a>
  <a href="#help">Help</a>
  <input type="text" placeholder="Search">
  <button type="submit"><i class="fa fa-search"></i></button>
</div>

<div class="middle">
  <div class="vertical-menu">
    <a href="#recserv" class="label">Recommended Services</a>
    <div class="block">
		<service href="#senate">Senate Hearing</service>
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
    <a href="#pubserv">Other Public Services</a>
    <a href="#groupstreams">Streams by Groups</a>
</div>

<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b></b></p>
		<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
		<div style="clear:both"></div>
	</div>
</div>


<?php if (array_key_exists('login_user', $_SESSION)) : 
	echo "Welcome, {$_SESSION['login_user']}!";
?>

<p><a href="http://webapp.cs.clemson.edu/~jwk/logout.php">Logout</a></p>

<p><a href="http://webapp.cs.clemson.edu/~jwk/user_page.php">Here is a link to a stream</a></p>

<?php else : ?>
<p><a href="http://webapp.cs.clemson.edu/~jwk/login.php">Login as a Viewer</a></p>
or
<p><a href="http://webapp.cs.clemson.edu/~jwk/login.php">Login as a Streamer</a></p>
or
<p><a href="http://webapp.cs.clemson.edu/~jwk/create_account.php">Create a Viewer Account</a></p>
or
<p><a href="http://webapp.cs.clemson.edu/~jwk/create_account.php">Create a Streamer Account</a></p>
<?php endif; ?>

</body>

</html>
