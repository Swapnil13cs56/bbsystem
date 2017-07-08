<?php
                 session_start();
		 include 'config.php';

		if(isset($_POST['rec_signup_submit'])){
     
				mysqli_query($con,"insert into recreg (recname, rec_uname,rec_email,rec_pass,rec_mobile,rec_blood) values('".$_POST["rec_name"]."','".$_POST["rec_uname"]."','".$_POST["rec_email"]."','".$_POST["rec_pass"]."','".$_POST["rec_mobile"]."','".$_POST["rec_blood"]."')");
header('Location:login_new.php');
		}
		else if(isset($_POST['rec_login_submit'])){

      $query_result = mysqli_query($con,"select recname from recreg where rec_uname = '".$_POST["rec_uname"]."' and rec_pass = '".$_POST["rec_pass"]."'");
			
			
			$row = mysqli_num_rows($query_result);
			if($row > 0){
                                $row = mysqli_fetch_array($query_result);
				$_SESSION["name"] = $row['recname'];
				header('Location:req_blood.php');

			}
			else{

				echo 'Login failed!';
			}

    }
		else{

			echo 'Error reported!';
		}
  ?>