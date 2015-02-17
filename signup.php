<?php 
	require_once "connection.php";
	require "home.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register With Us</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobno = $_POST['phone'];
			$pass1 = $_POST['password'];
			$pass = $_POST['confpassword'];

			if($pass1 == $pass){
				$register = "INSERT INTO electricals_tbl(name, email, mobno, pass) VALUES ('{$name}','{$email}','{$mobno}','{$pass}')";
				$result = mysql_query($register);
				if(!$result){
					// YOU HAD DONE if($result) that means if successful, you should have shown the message when it was not successful
					die('could not inserted into table.' . mysql_error());
				} else {
					echo "successful";
				}
				// The next line(line 30)was supposed to be within else clause(line 27), 
				// echo 'inserted to table.';
			} else {
				// Same here, you're suppose to put everything within else clause, if you put them outside, they will simply print, whether the condition
				// matches or not
				echo "Password Doesn't match! Try again";
			}
			// Your line
			// echo "password does not match. Try again.";
		}
	?>
 <h3>Add details.</h3>
 <!-- You had forgotten method="post" and action="signup.php" -->
 <form method="post" action="signup.php">
 <table>
	 	<tr>
		 	<td><label>Name</label></td>
		 	<td><input name="name" type="text" id="user_name" ></td>
	 	</tr>
	 	<tr>
		 	<td><label>Email</label></td>
		 	<td><input name="email" type="text" id="user_email" ></td>
	 	</tr>
	 	<tr>
		 	<td><label>Phone</label></td>
		 	<td><input name="phone" type="text" id="user_phone" ></td>
	 	</tr>
	 	<tr>
	 		<td><label>Password</label></td>
	 		<td><input name="password" type="password" id="pass" ></td>
	 	</tr>
	 	<tr>
	 		<td><label>Confirm Password</label></td>
	 		<td><input name="confpassword" type="password" id="conf_pass" ></td>
	 	</tr>
	 	<tr>
		 	<td></td>
		 	<td><input name="submit" type="submit" value="Signup" ></td>
	 	</tr>
 	</table>
 </form>
</body>
</html>