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
  
  <body>
  <div class="container"><div class="row"><div class="col-md-12">
<div class="text-center"><h1 style="color:#000000;">The United States</h1></div>
<table class="table table-striped table-hover"><tr>
<?
$counter = 0;
$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

foreach($state_list as $state) {

echo '<td>';
$alllower = strtolower($state);
$underscoresCAPS = preg_replace('/\s+/', '_', $state);
$alllowerwithunderscores = preg_replace('/\s+/', '_', $alllower);

echo '<a href="pages/'.$alllowerwithunderscores.'.html"><img src="http://lesson.jaxcode.webfactional.com/stateflags/'.$underscoresCAPS.'.svg.png"><br>';
echo $state.'</a><br>';

echo '</td>';

$counter++;
		if($counter == 5) {
		echo '</tr><tr>';
		$counter = 0;
		}
}


?>
</tr>
</table>
</div></div></div>
  </body>
</html>