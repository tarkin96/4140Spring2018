<?php
include("templates/page_template.php");
include("config.php");
if (!array_key_exists('login_user', $_SESSION)) {
	header("Location: login.php");
}
echo "This site is currently under construction!"
?>