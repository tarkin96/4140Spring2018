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
