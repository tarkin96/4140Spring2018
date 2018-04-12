<?php
   session_start();
   session_destroy();
   //if(session_destroy()) {
    //  header("Location: home_page.php");
  // }

	if(isset($_SERVER['HTTP_REFERER'])) {
		header('Location: '.$_SERVER['HTTP_REFERER']);  
	} 
	else {
		header('Location: home_page.php');  
	}
	exit;
?>