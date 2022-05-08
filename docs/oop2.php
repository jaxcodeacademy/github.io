<center><h1>PHP OOP</h1></center>
<?php
class House {
	public $primaryColor = 'blue';
	public $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
	public $hasPool = false;
	public $extra;
}

$myHouse = new House();
$friendHouse = new House();

$myHouse -> primaryColor = 'red';
echo $myHouse -> primaryColor;
echo '<br>';
$friendHouse -> primaryColor = 'green';
echo $friendHouse -> primaryColor;

echo '<br>Bathroom: ';
$myHouse -> secondaryColors['bathroom'] = 'purple';
echo $myHouse -> secondaryColors['bathroom'];

echo '<br>';echo '<br>';
$friendHouse -> hasPool = true;
if($friendHouse -> hasPool == false) { 
echo 'No Pool'; 
} else {
echo 'Yes, there is a pool!'; }

echo '<br>';
echo $friendHouse -> extra = '40 acres and a mule';
echo $friendHouse -> extra;

?>














<?
/*
$myHouse = new House();
$friendHouse = new House();

echo $myHouse -> primaryColor;
echo '<br>';

echo $friendHouse -> primaryColor;
echo '<br>';


$myHouse -> primaryColor = 'red';
$friendHouse -> primaryColor = 'yellow';
echo $myHouse -> primaryColor;
echo '<br>';
echo $friendHouse -> primaryColor;
echo '<br>';
echo $friendHouse -> secondaryColors['bathroom'];
echo '<br>';
echo $friendHouse -> secondaryColors['bedroom'];
echo '<br>';
echo $friendHouse -> secondaryColors['kitch'];
echo '<br>';
if($friendHouse -> hasPool == false) { echo 'No Pool'; }
echo '<br>';
$friendHouse -> extra = '40 acres';
echo $friendHouse -> extra;
*/
?>