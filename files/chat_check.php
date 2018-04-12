<?
	include("config.php");
	session_start();
	
	//$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES ('$_SESSION['login_user']', $text);
	//$result = mysqli_query($db,$chat_insert_query);
	//echo "Hello, wade!!!";
	//print_r($_POST);
	//echo $_SERVER['REQUEST_METHOD'];
	/*if (isset($_POST['usermsg']) and $_POST['usermsg'] != "") { 
		//echo "button has been pressed"; 

		$un = "'" . $_SESSION['login_user'] . "'";
		//print_r($_POST);
		$un2 = "'" . $_POST['usermsg'] . "'";
		$un3 = $_SESSION['Stream_Chat'];
		//echo "INSERT INTO Studio_Day_Chat VALUES ($un, $un2)";
		$chat_insert_query = "INSERT INTO $un3 VALUES ($un, $un2, NOW())";
		$result = mysqli_query($db,$chat_insert_query);
		unset($_POST['usermsg']);
		unset($_POST['submitmsg']);
	}*/
	$chat_table = $_SESSION['Stream_Chat'];
	
	if (!array_key_exists('last_check', $_SESSION)) {
		$grab_chat_query = "SELECT * FROM $chat_table";
		//$_SESSION['last_check'] = date("Y-m-d H:i:s");
	}
	else {
		$check_time = $_SESSION['last_check'];
		$grab_chat_query = "SELECT * FROM $chat_table WHERE Time_Stamp >= $check_time";
		
	}
	
	//if($_SERVER["REQUEST_METHOD"] == "POST") {
	


	$chat_result = mysqli_query($db,$grab_chat_query);
	$_SESSION['last_check'] = date("Y-m-d H:i:s");
	//$chat_rows = mysqli_fetch_array($chat_result,MYSQLI_ASSOC);	
	//if ($chat_rows) {
	//foreach($chat_rows as $row) {
	//echo $row;
	//}
	//}
	if ($chat_result) {
		while($chat_rows = mysqli_fetch_array($chat_result,MYSQLI_ASSOC)) {
			echo "<strong>";
			echo $chat_rows['User_Name'] . " : ";
			echo "</strong>";
			echo $chat_rows['Message'];
			echo "<br>";
		}
	}

	
	//}//end of if
?>