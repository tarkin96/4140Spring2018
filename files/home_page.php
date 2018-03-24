<?php

echo "this is the homepage"
?>

<html>

<head>
  <title>Twitch Does Town Hall</title>
</head>

<body>



<?php if (array_key_exists('login_user', $_SESSION)) : 
	echo "Welcome, {$SESSION['login_user']}!";
?>

<p><a href="http://webapp.cs.clemson.edu/~jwk/logout.php">Logout</a></p>

<?php else : ?>
<p><a href="http://webapp.cs.clemson.edu/~jwk/login.php">Login</a></p>
or
<p><a href="http://webapp.cs.clemson.edu/~jwk/create_account.php">Create Account</a></p>
<?php endif; ?>

</body>

</html>