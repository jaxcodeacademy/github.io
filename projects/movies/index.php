<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<h1>Movie Database</h1>

<?php

require_once('db.inc.php');

// Delete

if(isset($_POST['deletemovie'])) {

// sql to delete a record
$sql = "DELETE FROM movies WHERE movies_id='{$_POST['movies_id']}'";

if ($conn->query($sql) === TRUE) {
  $_SESSION['message'] = "moviedeleted";
} else {
  echo "Error deleting record: " . $conn->error;
}

}

if(isset($_SESSION['message'])) {

    if($_SESSION['message'] == 'movieaddedok') {
    echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Movie added.
  </div>';
    }

    if($_SESSION['message'] == 'moviedeleted') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Movie deleted.
      </div>';
        }


  unset($_SESSION['message']);
}

?>

<form action="process.php" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" id="movies_title" name="movies_title" placeholder="Enter Movie Title">
    </div>
    <div class="col">
    <div class="form-group">
        <select name="movies_genre" class="form-control">
      <?php

      $genres = array("Action","Comedy","Kids and Family", "Drama","Fantasy","Horror","Mystery","Romance","Thriller","Western");

      foreach($genres as $genre) {
          echo '<option value="'.$genre.'">'.$genre.'</option>';
      }
      ?>
      </select>
    </div>
    </div>
  </div><br>
  <div class="text-right">
  <button type="submit" name="addmovie" class="btn btn-primary mb-2">Add Movie</button>
</div>
</form>
<br><br>
<table class="table table-striped table-hover">
<tr>
<th>ID</th>
<th>Movie</th>
<th>Genre</th>
<th></th>
</tr>
<?php




// Select

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
<tr>
<td><?=$row['movies_id']?></td>
<td><?=$row['movies_title']?></td>
<td><?=$row['movies_genre']?></td>
<td>
<form action="index.php" method="POST">
<input type="hidden" name="movies_id" value="<?=$row['movies_id']?>">
<button type="submit" name="deletemovie" class="btn btn-xs btn-danger">X</button>
</form>
</td>
</tr>
    
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>

</div></div></div>

</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>