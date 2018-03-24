<?php
	include("config.php");
	session_start();
	$error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form's POST
		$inputusername = mysqli_real_escape_string($db,$_POST['username']);
		$inputpassword = mysqli_real_escape_string($db,$_POST['password']); 

		//just the query string
		$find_login_query = "SELECT * FROM users WHERE username = '$inputusername' and password = '$inputpassword'";
		//the actual query, passing in the query string and the db to connect to
		$result = mysqli_query($db,$find_login_query);

		//if there is a result from the query
		if ($result) {
			//get the information in the result
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
			//get info to see if user is active, not currently used
			$active = $row['active'];
			//get number of results from query
			$count = mysqli_num_rows($result);
			if ($count == 1) {
				//session_register("myusername");
				$_SESSION['login_user'] = $inputusername;
				echo "wade sucks";
				header("location: welcome.php");
			}
			else {
				$error = "Your Login Name or Password is invalid";
			}
		}
		else {
			echo "something went horribly wrong";
		}

	}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>