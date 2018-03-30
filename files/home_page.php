<?php
include("templates/page_template.php");
include("config.php");

//function add_to_chat() {
	//include("config.php");
	//$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES ('$_SESSION['login_user']', $text);
	//$result = mysqli_query($db,$chat_insert_query);
//}
?>

<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
</script>
<head>

</head>
<body>
<div class="middle">
	<div class="vertical-menu">
		<a href="#recserv" class="cascade">Recommended Services</a>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page.php">Senate Hearing</a>
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
		<a class="cascade" href="#pubserv">Other Public Services</a>
		<a class="cascade" href="#groupstreams">Streams by Groups</a>
	</div>

	<div class="stream">
		<iframe 
			src="http://player.twitch.tv/?channel=Ninja"  
			frameborder="0" 
			scrolling="no"
			allowfullscreen="true">
		</iframe>
		<div class="label">Senate Judiciary Committee on FaceBook Privacy</div>
	</div>

	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Stream Chat</p>
			<div style="clear:both"></div>
		</div>

		<div id="chatbox" action="">
			<?php
			if (isset($_POST['submitmsg'])) { 
				//echo "button has been pressed"; 
			
			$un = "'" . $_SESSION['login_user'] . "'";
			//print_r($_POST);
			$un2 = "'" . $_POST['usermsg'] . "'";
			//echo "INSERT INTO Studio_Day_Chat VALUES ($un, $un2)";
			$chat_insert_query = "INSERT INTO `Studio_Day_Chat` VALUES (0, $un, $un2)";
			$result = mysqli_query($db,$chat_insert_query);
			}
			//if($_SERVER["REQUEST_METHOD"] == "POST") {
				$grab_chat_query = "SELECT * FROM `Studio_Day_Chat`";
				$chat_result = mysqli_query($db,$grab_chat_query);
				//$chat_rows = mysqli_fetch_array($chat_result,MYSQLI_ASSOC);	
				//if ($chat_rows) {
					//foreach($chat_rows as $row) {
						//echo $row;
					//}
				//}
				while($chat_rows = mysqli_fetch_array($chat_result,MYSQLI_ASSOC))	
				{
					echo "<strong>";
					echo $chat_rows['User_Name'] . " : ";
					echo "</strong>";
					echo $chat_rows['Message'];
					echo "<br>";
				}
			//}//end of if
			?>
		</div>
		
	
	
		<form name="message" method="POST" action="">
			<div id="in"> 
				<input name="usermsg" type="text" class="usermsg" />
				<input name="submitmsg" type="submit"  class="submitmsg" value="Send" />
			</div>
		</form>
	</div>

</div>

<div class="bott">

	<div class="eventdesc">
		<desc>The Senate interrogates Mark Zuckerberg in regards to recent data breaches
		and the nature of user privacy on Facebook. This follows the recent news that Facebook released data on millions of its users 
		to firms that target swing voters in political campaigns. CEO Mark Zuckerberg defends his innocence, pointing out that users signed away their data
		rights during signup.</desc>
	</div>

	<div class="botmiddle">
		<div class="agenda">
			<desc>Agenda</desc>
			<desc>Right now: Review of timeline of events</desc>
			<desc>Next: Mark Zuckerberg interrogation</desc>
		</div>
	</div>

	<div class="poll">
	  <form method="post" action="https://poll.pollcode.com/17834677"><div style="background-color:#999;padding:2px;width:175px;font-family:Arial;font-size:small;color:#000;"><div style="padding:2px 0px 4px 2px;"><strong>Do you like pie?</strong></div><input type="radio" name="answer" value="1" id="answer178346771" style="float:left;" /><label for="answer178346771" style="float:left;width:150px;">Yes</label><div style="clear:both;height:2px;"></div><input type="radio" name="answer" value="2" id="answer178346772" style="float:left;" /><label for="answer178346772" style="float:left;width:150px;">No</label><div style="clear:both;height:2px;"></div><div align="center" style="padding:3px;"><input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></div><div align="right" style="font-size:10px">pollcode.com <a href="https://pollcode.com/">free polls</a></div></div></form>
	</div>
</div>

</body>

</html>
