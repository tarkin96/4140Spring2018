<?
	include("config.php");
	session_start();
	//$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES ('$_SESSION['login_user']', $text);
	//$result = mysqli_query($db,$chat_insert_query);
	//echo "Hello, wade!!!";

	if (isset($_POST['submitmsg'])) { 
		//echo "button has been pressed"; 

		$un = "'" . $_SESSION['login_user'] . "'";
		//print_r($_POST);
		$un2 = "'" . $_POST['usermsg'] . "'";
		$un3 = $_SESSION['Stream_Chat'];
		//echo "INSERT INTO Studio_Day_Chat VALUES ($un, $un2)";
		$chat_insert_query = "INSERT INTO $un3 VALUES ($un, $un2)";
		$result = mysqli_query($db,$chat_insert_query);

	}
	$chat_table = $_SESSION['Stream_Chat'];
	unset($_POST['usermsg']);
	unset($_POST['submitmsg']);
	//if($_SERVER["REQUEST_METHOD"] == "POST") {
	$grab_chat_query = "SELECT * FROM $chat_table";
	$chat_result = mysqli_query($db,$grab_chat_query);
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