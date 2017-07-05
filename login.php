<?php
  include 'views/header.php';
  include 'views/navbar.php';
?>
<div class="row">
  <div class="col-md-6">
      <h3 class="heading">Hospital</h3>
<div id="registration_panel">
  <!-- Nav tabs -->

      <ul class="nav nav-pills" role="tablist" style="margin-left:30%;">
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#hos_sign" role="tab">SignUp</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#hos_login" role="tab">Login</a>
            </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active" id="hos_sign" role="tabpanel">
          </br>
            <form method="post" action="hos_reg.php">
              <input type="text" name="hos_name" placeholder="Name" class="cust_input" required>
              <input type="text" name="hos_id" placeholder="Enter unique id" class="cust_input" required>
              <input type="text" name="hos_key" placeholder="Key" class="cust_input" required>
              <input type="text" name="hosaddress" placeholder="Address" class="cust_input" required>
              <input type="tel" name="hos_mobile" placeholder="Enter Contact number" class="cust_input" required>
            </br>
            <hr>
              <input type="submit" name="hos_signup_submit" class="btn btn-success cust_sub_btn" value="Sign Up">
            </form>

          </div>

          <div class="tab-pane" id="hos_login" role="tabpanel">
          </br>
            <form method="post" action="hos_reg.php">
              <input type="text" name="hos_id" placeholder="Enter unique id" class="cust_input" required>
              <input type="text" name="hos_key" placeholder="Username" class="cust_input" required>
            </br>
            <hr>
              <input type="submit" name="hos_login_submit" class="btn btn-success cust_sub_btn" value="Login">
            </form>
          </div>
      </div>

</div>
</div>


<div class="col-md-6">
<h3 class="heading">Receiver</h3>
<!-- Login section -->
<div id="login_panel">
  <!-- Nav tabs -->
      <ul class="nav nav-pills" role="tablist"  style="margin-left:30%;">
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#rec_signup" role="tab">SignUp</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#rec_login" role="tab">Login</a>
            </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active" id="rec_signup" role="tabpanel">

          </br>
          <form method="post" action="rec_reg.php">
            <input type="text" name="rec_name" placeholder="Name of Hospital" class="cust_input" required>
            <input type="text" name="rec_uname" placeholder="Enter username" class="cust_input" required>
            <input type="email" name="rec_email" placeholder="Enter email" class="cust_input" required>
            <input type="text" name="rec_password" placeholder="Unique key" class="cust_input" required>
            <input type="text" name="rec_mobile" placeholder="Mobile" class="cust_input" required>
            <input type="text" name="rec_blood" placeholder="Blood Group" class="cust_input" required>
          </br>
          <hr>
            <input type="submit" name="rec_signup_submit" class="btn btn-success cust_sub_btn" value="Sign Up">
          </form>

          </div>

          <div class="tab-pane" id="rec_login" role="tabpanel">
          </br>
            <form method="post" action="rec_reg.php">
              <input type="text" name="rec_uname" placeholder="Enter username" class="cust_input" required>
              <input type="text" name="rec_password" placeholder="Unique key" class="cust_input" required>
            </br>
            <hr>
              <input type="submit" name="rec_login_submit" class="btn btn-success cust_sub_btn" value="Login">
            </form>
          </div>
      </div>

</div>
</div>
<div id="home_btn"><a href="./index.php">Home</a></div>
