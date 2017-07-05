<?php include 'config.php';
	session_start();
 ?> 
<?php
		echo $_SESSION["name"];
		if(isset($_POST['submit'])){
			
				$name = $_POST['rec_name'];
				$uname = $_POST['rec_uname'];
				$email = $_POST['rec_email'];
				$pass = $_POST['rec_pass'];
				$mobile = $_POST['rec_mobile'];
				$blood = $_POST['rec_blood'];
				
				mysqli_query($con,"insert into rec_login (rec_name,rec_uname,rec_email,rec_pass,rec_mobile,rec_blood) values('$name','$uname','$email','$pass','$mobile','$blood')");
			
		}
	
	 else{
		echo '
			
			<form action="#" method="post">
				<input type="text" name="rec_name" placeholder="Name">
				<input type="text" name="rec_uname" placeholder="Username">
				<input type="text" name="rec_email" placeholder="Email">
				<input type="password" name="rec_pass" placeholder="Enter Password">
				<input type="text" name="rec_mobile" placeholder="Mobile">
				<input type="text" name="rec_blood" placeholder="Blood Group">
				<input type="submit" name="submit" value="Sign Up">
			</form>
			
			<a href="logout.php">Logout</a>
		';
	 }
	 session_unset();
	
?>