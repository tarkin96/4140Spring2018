<?php
	session_start();
	if (!array_key_exists('login_user', $_SESSION)) : 
		header("Location: http://webapp.cs.clemson.edu/~jwk/login.php");
	else :
		//echo "Welcome, {$_SESSION['login_user']}!";
	endif;
?>
<html>
<head>

<link rel="stylesheet" 
href="font-awesome.min.css">

<link rel="stylesheet"
href="mystyles.css">

<style>


</style>
</head>

<body style="background-color:#444">

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">Browse</a>
  <a href="#archive">Archive</a>
  <a href="#officials">Officials</a>
  <a href="#constituencies">Constituencies</a>
  <a href="#account">Account</a>
  <a href="#help">Help</a>
  <a class="logout">Logout</a>
  <input type="text" placeholder="Search">
  <button type="submit"><i class="fa fa-search"></i></button>
</div>

<div class="middle">
  <div class="vertical-menu">
    <a href="#recserv" class="listed">Recommended Services</a>
    <div class="block">
	<service href="#senate">Senate Hearing</service>
	<div class="photo">
	<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Senatefloor.jpg" alt="Senate Hearing" width="100" height="60"></div>
    </div>
    <div class="block">
	<service href="#townhall">Town Hall<br>Meeting</service>
	<div class="photo">
    <img src="https://media.glassdoor.com/l/44/eb/14/98/town-hall-meeting-in-action.jpg"
alt="Town Hall Meeting" width="100" height="60""></div>
    </div>
    <div class="block">
	<service href="#debate">Debate</service>
	<div class="photo">
    <img src="https://media.npr.org/assets/img/2012/10/03/first_debate1-e2ffc0e8d70fdb7120584d533f027326b05e61c0-s900-c85.jpg"
alt="Debate" width="100" height="60""></div>
    </div>
    <a class="listed" href="#pubserv">Other Public Services</a>
    <a class="listed" href="#groupstreams">Streams by Groups</a>
  </div>
    
  <div class="stream">
    <iframe 
        src="http://player.twitch.tv/?channel=Ninja" 
        height="432" 
        width="768" 
        frameborder="0" 
        scrolling="no"
        allowfullscreen="true">
    </iframe>
  </div>

  <div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"></div>
     
    <form name="message" action="">
	<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        <input name="usermsg" type="text" id="usermsg" size="63" />
        
    </form>
    
    
  </div>
</div>

<div id="streamlabel"><h3>Senate Judiciary Committee on Facebook Privacy </h3></div>

<div class="eventdesc">
    <desc>The Senate interrogates Mark Zuckerberg in regards to recent data breaches
	and the nature of user privacy on Facebook.</desc>
    <desc>This follows the recent news that Facebook released data on millions of its users 
	to firms that target swing voters in political campaigns. </desc>
    <desc>CEO Mark Zuckerberg defends his innocence, pointing out that users signed away their data
	rights during signup.</desc>
</div>

<div class="botmiddle">
    <div class="agenda">
	<desc><b>Agenda</b><br><br></desc>
	<desc>Right now: Review of timeline of events<br></desc>
	<desc>Next:      Mark Zuckerberg interrogation</desc>
    </div>

</div>

<div class="poll">
  <form method="post" action="https://poll.pollcode.com/17834677"><div style="background-color:#999;padding:2px;width:175px;font-family:Arial;font-size:small;color:#000;"><div style="padding:2px 0px 4px 2px;"><strong>Do you like pie?</strong></div><input type="radio" name="answer" value="1" id="answer178346771" style="float:left;" /><label for="answer178346771" style="float:left;width:150px;">Yes</label><div style="clear:both;height:2px;"></div><input type="radio" name="answer" value="2" id="answer178346772" style="float:left;" /><label for="answer178346772" style="float:left;width:150px;">No</label><div style="clear:both;height:2px;"></div><div align="center" style="padding:3px;"><input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></div><div align="right" style="font-size:10px">pollcode.com <a href="https://pollcode.com/">free polls</a></div></div></form>
</div>

</body>

</html>
