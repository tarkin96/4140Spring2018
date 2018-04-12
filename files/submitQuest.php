<?php
	include("config.php");
	session_start();
	//$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES ('$_SESSION['login_user']', $text);
	//$result = mysqli_query($db,$chat_insert_query);
	//echo "Hello, wade!!!";
	//print_r($_POST);
	//echo $_SERVER['REQUEST_METHOD'];
	if (isset($_POST['questtext']) and $_POST['questtext'] != "") { 
		//echo "button has been pressed"; 

		//$un = "'" . $_SESSION['login_user'] . "'";
		//print_r($_POST);
		//$un2 = "'" . $_POST['usermsg'] . "'";
		//$un3 = $_SESSION['Stream_Chat'];
		//echo "INSERT INTO Studio_Day_Chat VALUES ($un, $un2)";
		//$chat_insert_query = "INSERT INTO $un3 VALUES ($un, $un2, NOW())";
		//$result = mysqli_query($db,$chat_insert_query);
		//unset($_POST['usermsg']);
		//unset($_POST['submitmsg']);
		echo $_POST['questtext'];
	}
?>