

<section id="ajax" class="doc-section">
<h2 class="section-title">PHP Associative Arrays</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


Associative arrays are arrays that use named keys that you assign to them.<br>

<br>

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>


<div class="code-block">
<pre><code class="language-markup">&lt;?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?&gt;</code></pre>
</div><!--//code-block-->



<strong>Loop Through an Associative Array</strong><br>

To loop through and print all the values of an associative array, you could use a foreach loop, like this:<br>


<div class="code-block">
<pre><code class="language-markup">&lt;?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
} ?&gt;</code></pre>
</div><!--//code-block-->



</div>
</div>
</section><!--//doc-section-->



<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h3>Assignment 1</h3>
<br>
Create an Associate Array and loop through it so that it displays the following output:
<br><br>
Drew likes the color Purple<br>
Emelia likes the color Green<br>
Rachel likes the color Blue<br>
Stephen likes the color Orange<br>
<br><br>
<h3>Assignment 2</h3>
<br>Create a drop-down list with the following array where the KEY is the option value and the VALUE is the displayed choice. Also, lowercase the KEY and VALUE but capitalize the first letter of each VALUE: &lt;option value="al"&gt;Alabama&lt;/option&gt;
<br><br>
$us_state = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AS'=>'AMERICAN SAMOA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PW'=>'PALAU',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
	'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
	'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
	'AP'=>'ARMED FORCES PACIFIC'
);



<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->






