<?

$existingNames = array("Stephen", "Stan", "Stevie", "Sam", "Lilly", "Tomtom", "Sarah", "Felicia");

if(isset($_POST['suggestion'])) {
	$name = $_POST['suggestion'];
	
	if(!empty($name)) {
	
	
	
	foreach ($existingNames as $existingName) {
		if(strpos($existingName, $name) !== false) {
		 echo $existingName;
		 echo '<br>';
			}
		}
	
	}
}

?>