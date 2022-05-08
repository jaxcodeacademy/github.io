<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>States</title>
  </head>
  
  <body style="background-color:#dddddd;">
<div class="text-center"><h1 style="color:#000000;">The United States</h1></div>
<table class="table table-bordered">
<?
$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

$x = 1;
echo '<tr>';
foreach ($state_list as $state) {
$state = preg_replace('/\s+/', '_', $state);
$myimage = "http://jaxcode.com/stateflags/$state.svg.png";
$stateupper = $state;
$statespaceupper = preg_replace('/\_/', ' ', $stateupper);
$state = strtolower($state);

$mystring = <<<EOT
<a href="pages/$state.html"><img src="$myimage"><br>$statespaceupper</a>
EOT;

echo '<td class="text-center">';
echo $mystring;
echo '</td>';
$x++;
if($x == '6') {
echo '</tr><tr>';
$x = 1;
}

}
echo '</tr>';

?>
</table>

  </body>
</html>