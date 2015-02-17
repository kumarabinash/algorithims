<!-- 
THIS ONE IS FOR YOU TO FIX
1. IN THE OPENING <form> add appropriate attributes
2. the login algorithm part, keep it simple
$query = "SELECT * FROM electricals_tbl WHERE email='{$email}' AND pass='{$pass}' ";
$result = mysql_query($query);
if(!$result){
	echo "error" . mysql_error();
} else {
	$row = mysql_fetch_assoc($result);
	echo "Hello " . $row['name'];
}
 

 this should work, if this works then slowly improve that to add other features.
 Good Luck!

 -->


<?php require "home.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body> 
<?php 
	require 'connection.php';
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];

		$query = "SELECT id FROM electricals_tbl WHERE email= '{$email}' ";
		$result = mysql_query($query);

		if($result){
			if(mysql_num_rows($result) == 1){

				$query1 = "SELECT * FROM electricals_tbl WHERE email= '{$email}' AND pass = '{$pass}' ";
				$result1 = mysql_query($query1);

				if($result1){
					if(mysql_num_rows($result1) == 1){
						echo "Hello " . "'{$email}' .";
					}
				}
			}
		}
	}
 ?>
<h3>Login to drive your car.</h3>
	<form>
		<table>
			<tr>
				<td><label>Email</label></td>
				<td><input name="email" type="text" id="user_email" placeholder="Your Email"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input name="password" type="password" id="pass" placeholder="Your Password" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input name="login" type="submit" value="Login" ></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="reset.php">Forgot Password? Click here.</a><td>
			</tr>
		</table>
	</form>
</body>
</html>