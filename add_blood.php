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
<!-- adding blood samples -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        Add blood samples
      </div>
      <div class="card-block">
        <h4 class="card-title">Enter Details below</h4>
        <p class="card-text">
          <form action="add_blood_db.php" method="post">
            <table>
              <tr><td><input type="text" name="donar_name" class="cust_input" placeholder="Enter the donar name"></td>
              <td><input type="text" name="blood_group" class="cust_input" placeholder="Enter the blood group"></td></tr>
              <tr><td><input type="number" name="unit" class="cust_input" placeholder="Enter unit"></td>
              <td><input type="submit" name="add_blood" value="Add" class="btn btn-success cust_sub_btn"></td></tr>
            </table>
          </form>
        </p>
      </div>
    </div>
</br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full_list_modal">See full list</button>
    <!-- Modal for full list -->
    <div class="modal fade" id="full_list_modal" tabindex="-1" role="dialog" aria-labelledby="full_list_modal_" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="full_list_modal_title">Full List</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!-- code to fetch details -->
        <table border="1">

          <tr><th class="cust_input" style="">Donar name</th><th class="cust_input">Blood group</th><th class="cust_input">Unit</th></tr>
          <?php
            $hosname = $_SESSION["name"];
            $query = mysqli_query($con,"select * from add_blood where hosname = '$hosname'");

            $row = mysqli_num_rows($query);
            if(!$row > 0 ){
              echo '<tr>Nothin here!</tr>';
            }else{


              while($row = mysqli_fetch_array($query)){


              echo'<tr><td class="cust_input">'.$row['donar_name'].'</td><td "cust_input">'.$row['blood_group'].'</td><td "cust_input">'.$row['unit'].'</td></tr>';

              }
            }
          ?>
        </table>
        <!-- endofcode -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
      </div>
    </div>
    </div>
    <!-- End of modal -->
    <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>


  </div>
<!--  listing blood samples -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
      Recently added blood samples
      </div>
      <div class="card-block">
        <h4 class="card-title">Recent ones</h4>
        <p class="card-text">
          <table border="1">

            <tr><th class="cust_input" style="">Donar name</th><th class="cust_input">Blood group</th><th class="cust_input">Unit</th></tr>
            <?php
              // $hosname = $_SESSION["name"];
              $query = mysqli_query($con,"select * from add_blood where hosname='$hosname' ORDER BY rec_id DESC LIMIT 3 ");

              $row = mysqli_num_rows($query);
              if(!$row > 0 ){
                echo '<tr>Nothin here!</tr>';
              }else{


            		while($row = mysqli_fetch_array($query)){


            			echo'<tr><td class="cust_input">'.$row['donar_name'].'</td><td "cust_input">'.$row['blood_group'].'</td><td "cust_input">'.$row['unit'].'</td></tr>';

            		}
              }
            ?>
          </table>
        </p>
      </div>
    </div>
  </div>

</div>