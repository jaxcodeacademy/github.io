<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<h4>PHP</h4> 
<?
$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

foreach($states as $state) {
$statename = $state;
echo $statename; 
echo ' ';
$state = preg_replace('/\s+/', '_', $state);
echo $state; 
echo ' ';
$imagelink = '<img src="http://lesson.jaxcode.webfactional.com/stateflags/'.$state.'.svg.png">';
$state = strtolower($state).'.html';
echo $state;
echo $imagelink;
echo '<br>';
}

?>
</body>
</html>
