<?php include 'config.php'; ?>
<?php
		if(isset($_POST['hos_signup_submit'])){

				$name = $_POST['hos_name'];
				$id = $_POST['hos_id'];
				$key = $_POST['hos_key'];
				$add = $_POST['hosaddress'];
				$mobile = $_POST['hos_mobile'];


				$sql = mysqli_query($con,"insert into hos_reg (hos_name,hos_unique_id,hos_key,hos_address,hos_mobile) values('$name','$id','$key','$add','$mobile')");
        if($sql){
        echo 'Done';
      }
		}
    else{
      echo 'Error reported!';
    }
  ?>
