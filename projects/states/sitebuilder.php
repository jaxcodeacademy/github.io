<!DOCTYPE html>
<html>
<head>
	<title>Website Generator</title>
	<meta name="generator" content="BBEdit 12.1" />
</head>
<body>

<h1>PHP Website Builder</h1>
<a href="sitebuilder.php?run=yes">Build Website</a> | <a href="index.php" target="_blank">Index</a><br><br>

<?

$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District Of Columbia", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");


    
 

if(isset($_GET['run'])) {

foreach ($state_list as $state) {
$statename = $state;
$state = preg_replace('/\s+/', '_', $state);

$myimage = "http://jaxcode.com/stateflags/$state.svg.png";

$state = strtolower($state);

$myfile = fopen("pages/$state.html", "w") or die("Unable to open file!");

$mystring = <<<EOT
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>$statename</title>
  </head>
  <body style="background-color: #e1e1e1;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <a class="navbar-brand" href="#">United States</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Index</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container text-center" style="background-color: #ffffff;">
<div class="row">
<div class="col-lg-12">
    <h1>$statename</h1>
    <img src="$myimage" class="img-thumbnail">
    <br><br>
    <!--Use an HTML iframe to pull in the Wikipedia page-->
    <iframe src="https://en.wikipedia.org/wiki/$state" width="100%" height="10000" frameborder="0"></iframe>
    
<br><br>
</div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
EOT;
    
fwrite($myfile, $mystring);

fclose($myfile);

echo 'File Created: <a href="pages/'.$state.'.html"> '.$state.'.html</a> <br>';

}

}


?>


</body>
</html>
