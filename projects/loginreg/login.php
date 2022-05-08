<?php 
  include_once 'header.php';
?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Patient Keto</h1>
  <p>Login</p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-5">
      
    </div>
    <div class="col-sm-3">
      <form action="includes/login.inc.php" method="POST">
      
      <input type="text" name="name" placeholder="Email or Username"><br>
      <input type="password" name="pwd" placeholder="Enter Password"><br><br>
      <button type="submit" name="login" class="btn btn-success">Login</button>

      </form>
    </div>
    <div class="col-sm-2">
      
    </div>
  </div>
</div>

<?php 
  include_once 'footer.php';
?>