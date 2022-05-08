<section id="bootstrap" class="doc-section">
<h2 class="section-title">Bootstrap 4</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<p>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp" target="_blank">W3Schools Bootstrap 4 Tutorial</a><br><br>
<a href="https://getbootstrap.com/" target="_blank">Bootstrap 4 Official Website</a>
<br><br>
</p>

<p>

</p>



















</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Code a 3-page Bootstrap Website.  Can be about anything you want. DUE MONDAY.</li>
	<li>Create the homepage for our new client Bistros
	<ul><li>Part A: 
				 <ul>
				 <li>Layout should follow their <a href="lessons/images/bistroswireframe.jpg" target="_blank">wireframe</a> (also called a PSD).</li>
				 <li>Use Bootstrap 4.</li>
				 <li>The entire page should be in a div with class="container".</li>
				 <li>Create a folder on Web Faction called 'bistros' and put the home page and associated files in that folder.</li>
				 <li>You can <a href="https://startbootstrap.com/template-overviews/bare/" target="_blank">download the starter template</a> to use as a skeleton.</li>
				 <li>Must render correctly on all devices: Phone, Tablet, Computer.</li>
				</ul>
		</li>
		<li>Part B: 
				<ul>
<li>Apply a fancy font to BISTROS, OUR CHEF, and REVIEWS using Google fonts. <a href="https://designshack.net/articles/css/the-10-best-script-and-handwritten-google-web-fonts/" target="_blank">Fancy Fonts Tutorial</a> | <a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
	<li>Apply a background image to the web page. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
	<li>Apply a background image to the container with the ORDER ONLINE button. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
		<li>Apply a background color to the following containers: NAVBAR, MENUS, FOOTER. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
		<li>Use <a href="https://fontawesome.com/?from=io" target="_blank">FontAwesome</a> for the REVIEW STARS. (See my <a href="http://lesson.jaxcode.webfactional.com/bistros/" target="_blank">demo</a>)</li>
	<li>	Use the <a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a> and my <a href="http://lesson.jaxcode.webfactional.com/bistros/" target="_blank">demo</a> as a guide.</li>
	
				</ul>
		
		</li>
		
		</ul>

	</li>
	<li>Build an In/Out Board with the following funcionality
	<ul>
	<li>Create a folder and name it 'inout'</li>
	<li>	Inside the inout folder create a folder named 'images'</li>
	<li>	Copy these images to the images folder: <img src="http://lesson.jaxcode.webfactional.com/io/images/circle_green.png"> <img src="http://lesson.jaxcode.webfactional.com/io/images/circle_red.png"></li>
	<li>	Build your page(s) with Bootstrap</li>
	<li>	Navigation should have the app name 'In Out', and 2 links 'Admin' and 'Refresh'</li>
	<li>	Add a table to display the following data: Employee, In, Out, Message.</li>
	<li>Add the class table-bordered to the table tag.</li>
		<li>A green or red button should display for each employee, the one not displayed should appear when you move over it.</li>
	<li>	When you click a hidden button the app should update the employees status.</li>
	<li>	An icon in the message box should display an input form when clicked.</li>
	<li>	Message box should update when submitted.</li>
	<li>	Build a database table with the following fields: userid, user, io, message.  The io field should be type enum with the choices either 0 or 1. 0 is for out and 1 is for in.</li>
	<li>Include the FontAwesome Libraries in the HEAD of your webpage.
	
	

	<div class="code-block">
<pre><code class="language-markup">&lt;link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"&gt;</code></pre>

</div><!--//code-block-->

	
	
		<li>Create folder 'css'</li>
	
	<li>Create a file named 'inout.css'</li>
	<li>Paste this code into it:</li>
	<div class="code-block">
<pre><code class="language-markup">.hidden {
  opacity: 0;
  transition: opacity 0.0s ease;
}

.hidden:hover {
  opacity: 1;
}</code></pre>
</div><!--//code-block-->

<li>Include inout.css in the HEAD section of your webpage (<a href="https://www.w3schools.com/css/css_howto.asp" target="_blank">W3 Schools: External Style Sheet</a>)</li>

<li>Replace the TBODY with this code:</li>
	
		<div class="code-block">
<pre><code class="language-markup">  &#x3C;tbody&#x3E;

&#x3C;?php
$servername = &#x22;localhost&#x22;;
$username = &#x22;username&#x22;;
$password = &#x22;password&#x22;;
$dbname = &#x22;database&#x22;;

// Change Message

if(isset($_POST[&#x27;message&#x27;])) {
function scrub($string) {
$string = htmlspecialchars(trim(strip_tags(addslashes($string))));
return $string;
}

$_POST[&#x27;message&#x27;] = scrub($_POST[&#x27;message&#x27;]);
$_POST[&#x27;message&#x27;] = filter_input(INPUT_POST, &#x27;message&#x27;);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die(&#x22;Connection failed: &#x22; . mysqli_connect_error());
}

$_POST[&#x27;message&#x27;] = preg_replace(&#x27;/\&#x27;/&#x27;, &#x27;&#x27;&#x27;, $_POST[&#x27;message&#x27;]);
$sql = &#x22;UPDATE io_employees SET message =&#x27;{$_POST[&#x27;message&#x27;]}&#x27; WHERE userid={$_POST[&#x27;userid&#x27;]}&#x22;;

if (mysqli_query($conn, $sql)) {
   
} else {
    echo &#x22;Error updating record: &#x22; . mysqli_error($conn);
}
}


// Change In Out Status

if(isset($_GET[&#x27;io&#x27;])) {
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die(&#x22;Connection failed: &#x22; . mysqli_connect_error());
}

$sql = &#x22;UPDATE io_employees SET io =&#x27;{$_GET[&#x27;io&#x27;]}&#x27; WHERE userid={$_GET[&#x27;userid&#x27;]}&#x22;;

if (mysqli_query($conn, $sql)) {
   
} else {
    echo &#x22;Error updating record: &#x22; . mysqli_error($conn);
}
}




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die(&#x22;Connection failed: &#x22; . mysqli_connect_error());
}

$sql = &#x22;SELECT * FROM io_employees&#x22;;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) &#x3E; 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?&#x3E;
 &#x3C;tr&#x3E;
      &#x3C;td class=&#x22;align-middle lead&#x22;&#x3E;&#x3C;?=$row[&#x27;user&#x27;]?&#x3E;&#x3C;/td&#x3E;
      &#x3C;? if($row[&#x27;io&#x27;] == &#x27;0&#x27;) { ?&#x3E;
      &#x3C;td class=&#x22;text-center&#x22;&#x3E;&#x3C;a href=&#x22;index.php?userid=&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x26;io=1&#x22;&#x3E;&#x3C;img src=&#x22;images/circle_green.png&#x22; class=&#x22;hidden&#x22;&#x3E;&#x3C;/a&#x3E;&#x3C;/td&#x3E;
      &#x3C;td class=&#x22;text-center&#x22;&#x3E;&#x3C;img src=&#x22;images/circle_red.png&#x22;&#x3E;&#x3C;/td&#x3E;
      &#x3C;? } else { ?&#x3E;
      &#x3C;td class=&#x22;text-center&#x22;&#x3E;&#x3C;img src=&#x22;images/circle_green.png&#x22;&#x3E;&#x3C;/td&#x3E;
      &#x3C;td class=&#x22;text-center&#x22;&#x3E;&#x3C;a href=&#x22;index.php?userid=&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x26;io=0&#x22;&#x3E;&#x3C;img src=&#x22;images/circle_red.png&#x22; class=&#x22;hidden&#x22;&#x3E;&#x3C;/a&#x3E;&#x3C;/td&#x3E;
      &#x3C;? } ?&#x3E;
      &#x3C;td&#x3E;
      &#x3C;? if($row[&#x27;message&#x27;] != &#x27;&#x27;) { ?&#x3E;
      &#x3C;a data-toggle=&#x22;collapse&#x22; href=&#x22;#collapse&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;collapse&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22; style=&#x22;color:#000000;&#x22;&#x3E;
      &#x3C;?=$row[&#x27;message&#x27;]?&#x3E;
      &#x3C;/a&#x3E;
      &#x3C;? } else {?&#x3E;
      &#x3C;a data-toggle=&#x22;collapse&#x22; href=&#x22;#collapse&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;collapse&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22; class=&#x22;text-muted float-right&#x22; style=&#x22;text-decoration-style: dashed;font-style: italic;font-size:12px;text-decoration: underline;&#x22;&#x3E;&#x3C;i class=&#x22;far fa-edit&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;
      &#x3C;? } ?&#x3E;
      
  
&#x3C;/p&#x3E;
&#x3C;div class=&#x22;collapse&#x22; id=&#x22;collapse&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22;&#x3E;
  &#x3C;div&#x3E;
&#x9;&#x3C;form action=&#x22;index.php&#x22; method=&#x22;POST&#x22;&#x3E;
&#x9;&#x3C;input type=&#x22;text&#x22; name=&#x22;message&#x22; value=&#x22;&#x3C;?=$row[&#x27;message&#x27;]?&#x3E;&#x22;&#x3E;
&#x9;&#x3C;input type=&#x22;hidden&#x22; name=&#x22;userid&#x22; value=&#x22;&#x3C;?=$row[&#x27;userid&#x27;]?&#x3E;&#x22;&#x3E;
&#x9;&#x3C;input class=&#x22;btn btn-secondary btn-md&#x22; style=&#x22;padding:0 4px;&#x22; type=&#x22;submit&#x22; value=&#x22;Submit&#x22;&#x3E;
&#x9;&#x3C;/form&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
      
      

      &#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
&#x3C;?
    }
} else {
    echo &#x22;0 results&#x22;;
}

mysqli_close($conn);
?&#x3E;
  

  &#x3C;/tbody&#x3E;</code></pre>
</div><!--//code-block-->
	
</ul>

	</li>
</ol>
</div>
</div>
</section><!--//doc-section-->


