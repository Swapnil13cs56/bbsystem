<?php
include 'views/header.php';
include 'views/navbar.php';
session_start();
include 'config.php';

//request btn functioning
     if(isset($_POST['request'])){

        echo '<script>alert("Request Sent");</script>';
    }else{

      echo 'Sorry!';
    }
   //  end of request btn
   ?>
<a href="req_blood.php"><button type="button" class="btn btn-primary" >Click to go back</button></a>