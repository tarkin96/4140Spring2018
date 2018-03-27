<?php
include("config.php");
session_start();

	$error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form's POST
		$inputusername = mysqli_real_escape_string($db,$_POST['username']);
		$inputpassword = mysqli_real_escape_string($db,$_POST['password']); 
		$inputpasswordconf = mysqli_real_escape_string($db,$_POST['password2']);

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
			if ($count == 0) {
				//session_register("myusername");
				//$_SESSION['login_user'] = $inputusername;
				//echo "wade sucks";
				$add_login_query = "INSERT INTO users VALUES ('$inputusername', '$inputpassword')";
				$add_account_result = mysqli_query($db,$add_login_query);
				if ($add_account_result) {
					//$add_account_result_row = mysqli_fetch_array($add_account_result,MYSQLI_ASSOC);
					//$row_count = mysqli_num_rows($add_account_result);
					
					//if ($row_count == 1) {
						echo "account added";
						//header("location: login.php");
					//} 
				}
				
			}
			else {
				//$error = "Your Login Name or Password is invalid";
				
			}
		}
		else {
			echo "something went horribly wrong";
			
		}

	}

?>

<html>
   
   <head>
      <title>Create Account</title>
      
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
                  <label>Enter Username: </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Enter Password: </label><input type = "text" name = "password" class = "box" /><br/><br />
                  <label>Re-Enter Password: </label><input type = "text" name = "password2" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
