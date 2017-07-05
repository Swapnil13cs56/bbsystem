<?php
	include 'config.php';
	session_start();
	
	
?>

<!DOCTYPE html>
<html>
<body>

<?php



	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pass  = $_POST['pass'];
		
		$query = mysqli_query($con,"select * from rec_login where rec_uname = '$uname' and rec_pass = '$pass'");
		$row = mysqli_num_rows($query);
		if($row > 0){
			
			$_SESSION["name"] = $uname;
			header('Location:welcome.php');
			
		}
		else{
			
			echo 'Login failed!';
		}
		
		
	}else{
		
		echo '<form action="#" method="post">
			<input type="text" name="uname" placeholder="Enter username">
			<input type="password" name="pass" placeholder="Enter Password">
			<input type="submit" name="submit" value="login">
			</form>
		';
	}
?>