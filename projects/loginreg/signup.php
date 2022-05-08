<?php 
  include_once 'header.php';
?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Patient Keto</h1>
  <p>Signup</p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-5">
      
    </div>
    <div class="col-sm-3">
      <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="firstname" placeholder="First Name"><br>
      <input type="text" name="lastname" placeholder="Last Name"><br>
      <input type="text" name="email" placeholder="Email"><br>
      <input type="password" name="pwd" placeholder="Password at leat 8 characters"><br>
      <input type="password" name="pwdrepeat" placeholder="Reenter Password"><br><br>
      <button type="submit" name="signup" class="btn btn-success">Signup</button>

      </form>
      <?php
      if(isset($_GET['error'])) {
        echo 'Error: '.$_GET['error'];
      }
      ?>
    </div>
    <div class="col-sm-2">
      
    </div>
  </div>
</div>

<?php 
  include_once 'footer.php';
?>