<?php include 'config.php';
session_start();?>
<?php

		// $con = mysqli_connect("localhost","root","","bbsystem");
		if(isset($_POST['hos_signup_submit'])){

				$name = $_POST["hos_name"];
				// echo $name;
				$id = $_POST['hos_id'];
					// echo $id;
				$key = $_POST['hos_key'];
					// echo $key;
				$add = $_POST["hos_address"];
					// echo $add;
				$mobile = $_POST['hos_mobile'];


				mysqli_query($con,"insert into hos_reg values('$name','$id','$key','$add','$mobile')");
header('Location:login_new.php');
}

    else if(isset($_POST['hos_login_submit'])){

      $query_result = mysqli_query($con,"select hosname from hos_reg where hos_key = '".$_POST["hos_key"]."' and hos_unique_id = '".$_POST["hos_id"]."'");
//$query = mysqli_query($con,"SELECT hosname FROM hos_reg");
//$row1 = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query_result);
			if($row > 0){
        $row = mysqli_fetch_array($query_result);
				$_SESSION["name"] = $row['hosname'];
				header('Location:add_blood.php');

			}
			else{

				echo 'Login failed!';
			}

    }
		else{

			echo 'Error reported!';
		}
  ?>