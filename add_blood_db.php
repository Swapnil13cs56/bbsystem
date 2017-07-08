<?php
  include 'config.php';
   session_start();
   $hosname = $_SESSION["name"];
?>

<?php

  if(isset($_POST['add_blood'])){

      mysqli_query($con,"insert into add_blood (donar_name,blood_group,unit,hosname) values('".$_POST['donar_name']."','".$_POST['blood_group']."','".$_POST['unit']."','$hosname')");
header('Location:add_blood.php');
echo 'Added Successfully';
  }else{

    echo 'Error received';
  }

 ?>