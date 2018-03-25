<?php
session_start();
echo "this is the homepage"
?>

<html>

<head>
  <title>Twitch Does Town Hall</title>
</head>

<body>



<?php if (array_key_exists('login_user', $_SESSION)) : 
	echo "Welcome, {$_SESSION['login_user']}!";
?>

<p><a href="http://webapp.cs.clemson.edu/~jwk/logout.php">Logout</a></p>

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