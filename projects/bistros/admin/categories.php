<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="generator" content="BBEdit 12.6" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bistros</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li class="active"><a href="categories.php">Categories</a></li>
      <li><a href="menuitems.php">Menu Items</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">

<?
include 'db.php';

//////////////////////
// Update a Category
if(isset($_POST['update'])) {
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE bistros_categories SET cat_name='{$_POST['cat_name']}' WHERE cat_id='{$_POST['cat_id']}'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

} // end of if update


//////////////////////
// Delete a Category

if(isset($_POST['delete'])) {
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM bistros_categories WHERE cat_id='{$_POST['cat_id']}'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

} // end of if Delete


///////////////////
// Add a Category
if(isset($_POST['addcategory'])) {
echo $_POST['cat_name'];
echo '<br>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO bistros_categories (cat_name)
VALUES ('{$_POST['cat_name']}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} // end of if addcategore

?>


<form class="form-inline" action="categories.php" method="POST">
<div class="form-group">
<label for="email">New Category:</label>
<input type="text" name="cat_name" value="<? if(isset($_POST['updatecategory'])) { echo $_POST['cat_name'];} ?>">
</div>
<? if(isset($_POST['updatecategory'])) { ?>
<input type="hidden" name="cat_id" value="<?=$_POST['cat_id']?>">
<input type="submit" name="update" value="Update Category">
<? } else { ?>
<input type="submit" name="addcategory" value="Add Category">
<? } ?>

</form>

<h3>Categories</h3>

<div class="table-repsonsive">
<table class="table table-hover table-striped">
<tr>
<th>ID</th>
<th>Category</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bistros_categories";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        ?>
        <tr>
        <td><?=$row["cat_id"]?></td>
        <td><?=$row["cat_name"]?></td>
        <td><form action="categories.php" method="POST">
    <input type="hidden" name="cat_id" value="<?=$row["cat_id"]?>">
    <input type="hidden" name="cat_name" value="<?=$row["cat_name"]?>">
    <input type="hidden" name="updatecategory" value="yes">
    <button type="submit" class="btn btn-default">Update</button>
    </form></td>
        <td><form action="categories.php" method="POST">
    <input type="hidden" name="cat_id" value="<?=$row["cat_id"]?>">
    <input type="hidden" name="delete" value="yes">
    <button type="submit" class="btn btn-default">Delete</button>
    </form></td>
        </tr>
        <?
        
    }
    
    echo '</table></div>';
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</div><!--/col-->
</div><!--/row-->
</div><!--/container-->
</body>
</html>
