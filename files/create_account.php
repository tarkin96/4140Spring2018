<?php
include("config.php");
include("templates/page_template.php");

	$error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form's POST
		

		$inputusername = mysqli_real_escape_string($db,$_POST['username']);
		$inputpassword = mysqli_real_escape_string($db,$_POST['password']); 
		$inputpasswordconf = mysqli_real_escape_string($db,$_POST['password2']);
		
		if ($inputpassword == "" or $inputpasswordconf == "" or $inputusername == "") {
			$error = "You must fill every field to continue.";
		}
		elseif($inputpassword != $inputpasswordconf) {
				//$inputusername = mysqli_real_escape_string($db,$_POST['username']);
				//$inputpassword = mysqli_real_escape_string($db,$_POST['password']); 
				//$inputpasswordconf = mysqli_real_escape_string($db,$_POST['password2']);
				
				$error = "Passwords do not match! Try again.";
				
		}
		else {
			//just the query string
			$find_login_query = "SELECT * FROM users WHERE username = '$inputusername'";
			
			//the actual query, passing in the query string and the db to connect to
			$result = mysqli_query($db,$find_login_query);

			//if there is a result from the query
			if ($result) {
				//get the information in the result
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
				//get number of results from query
				$count = mysqli_num_rows($result);
				if ($count == 0) {
					$add_login_query = "INSERT INTO users VALUES ('$inputusername', '$inputpassword')";
					$add_account_result = mysqli_query($db,$add_login_query);
					if ($add_account_result) {
						//echo "account added";
						header("Location: login.php");
					}
					
				}
				else {
					$error = "This username already exists! Try again.";
					
				}
			}
			else {
				$error = "something went horribly wrong";
				
			}
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Create Account</b></div>
				
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
