
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>100 Pages</h1>
<?php

if(isset($_POST['createpages'])) {

    $x = 1; 

    while($x <= 100) {
        

if($x === 1) {
$prev = 'At Beginning';
} else {
$x2 = $x - 1;
$prev = '<a href="page'.$x2.'.html">Prev</a>';
}

$next = $x + 1; 
$byitself = $x * $x;

$myfile = fopen("pages/page".$x.".html", "w") or die("Unable to open file!");
$txt = <<<HELLO
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page $x</h1>

$prev | <a href="../index.php">Home</a> | <a href="page$next.html">Next</a>
<br><br>
$x X $x = $byitself
    
HELLO;

fwrite($myfile, $txt);
fclose($myfile);

$x++;
} 

echo 'Website Created! <br><br><a href="pages/page1.html">Go to page 1</a><br><br>';

} // end of isset
?>

<form action="index.php" method="POST">

<button type="submit" name="createpages">Create Website</button>
</form>

</body>
</html>

