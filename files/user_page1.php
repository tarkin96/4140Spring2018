<?php
include("templates/page_template.php");
include("config.php");
//if (!array_key_exists('login_user', $_SESSION)) {
	//header("Location: login.php");
//}
$_SESSION['Streamer'] = "`Plaue_4140_S2018`";
$_SESSION['Stream'] = "`Studio_Day`";
$_SESSION['Stream_Chat'] = "`Studio_Day_Chat`";
?>

<html>

<head>

</head>
<body onload="chat();">
<div class="middle">
	<div class="vertical-menu">
		<a href="#recserv" class="cascade">Recommended Services</a>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page1.php">Senate Hearing</a>
				<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Senatefloor.jpg" alt="Senate Hearing" width="100" height="60">
				</img>
			</div>
		</div>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page2.php">Town Hall<br>Meeting</a>
				<img src="https://media.glassdoor.com/l/44/eb/14/98/town-hall-meeting-in-action.jpg"
					alt="Town Hall Meeting" width="100" height="60">
				</img>
			</div>
		</div>
		<div class="block">
			<div class="photo">
				<a class="recstream" href="user_page3.php">Debate</a>
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

	<?php include("templates/chat_template.php"); ?>

</div>

<div class="bott">

	<div style="display: block;">
		<div class="eventdesc">
			<desc>The Senate interrogates Mark Zuckerberg in regards to recent data breaches
			and the nature of user privacy on Facebook. This follows the recent news that Facebook released data on millions of its users 
			to firms that target swing voters in political campaigns. CEO Mark Zuckerberg defends his innocence, pointing out that users signed away their data
			rights during signup.</desc>
		</div>
		
		<div class="poll">
			<form method="post" action="https://poll.pollcode.com/17834677"><div style="background-color:#999;padding:2px;width:175px;font-family:Arial;font-size:small;color:#000;"><div style="padding:2px 0px 4px 2px;"><strong>Do you like pie?</strong></div><input type="radio" name="answer" value="1" id="answer178346771" style="float:left;" /><label for="answer178346771" style="float:left;width:150px;">Yes</label><div style="clear:both;height:2px;"></div><input type="radio" name="answer" value="2" id="answer178346772" style="float:left;" /><label for="answer178346772" style="float:left;width:150px;">No</label><div style="clear:both;height:2px;"></div><div align="center" style="padding:3px;"><input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></div><div align="right" style="font-size:10px">pollcode.com <a href="https://pollcode.com/">free polls</a></div></div></form>
		</div>
		
		<div class="questions">
			<desc><b>Top Viewer Concerns</b><br></desc>
			<desc>What charges are being considered against Zuckerberg?<br><br></desc>
			<desc>We need to address online privacy concerns.  What is congress going to do about it?</desc>
		</div>

	</div>

</div>

<span class="botmiddle">
	<div class="box" style="width:40%; vertical-align:top;">
		<div class="label" style="display: inline-block">
			Agenda
		</div>
		<div class="agenda">
			<desc>Right now: Review of timeline of events</desc>
			<desc>Next: Mark Zuckerberg interrogation</desc>
		</div>
	</div>

	<div class ="box" style="width: 40%" name="questionbox">
		<div class="label" style="display: inline-block">
			Submit Your Own Question
		</div>
		<div class="questsubmit" name="questsubmit">
			<textarea name="questtext" type="text" class="questtext" id="questtext"></textarea>
			<input name="submitquest" type="button"  class="submitquest" value="Send" onclick="submitQuest();"/>
		</div>
	</div>
</span>

</body>

</html>
