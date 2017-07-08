<?php
  include 'views/header.php';
  include 'views/navbar.php';
include 'config.php';
?>
<?php
	session_start();
	echo 'Welcome <strong>'.$_SESSION["name"].'</strong>';

	echo '<a href="logout.php" style="margin-left:50%;" class="btn btn-primary">Logout</a></br></br><hr>';
?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Blood Samples
      </div>
      <div class="card-block">
        <h4 class="card-title">List of available blood samples</h4>
        <p class="card-text">
          <form action="request.php" method="post">
            <table border="1" style="width:100%;">
                <tr><th class="cust_input">Hospital name</th><th class="cust_input">Blood group</th><th class="cust_input">Unit remaining</th><th class="cust_input">Required Unit</th><th class="cust_input">Click to add</th></tr>
          <?php
            $hosname = $_SESSION["name"];
            $query = mysqli_query($con,"select * from add_blood");

            $row = mysqli_num_rows($query);
            if(!$row > 0 ){
              echo '<tr>Nothin here!</tr>';
            }else{


              while($row = mysqli_fetch_array($query)){

               $total_unit = $row["unit"];
              echo'<tr><td class="cust_input">'.$row['hosname'].'</td><td "cust_input">'.$row['blood_group'].'</td><td "cust_input">'.$row['unit'].'</td>'.'<td><input type="number" name="required_unit" required value="0"></td>'.'<td><input type="submit" name="request" value="Request" class="btn btn-success"></td></tr>';


              }
            }
          ?>
            </table>
          </form>


        </p>
      </div>
    </div>
  </div>
</div>