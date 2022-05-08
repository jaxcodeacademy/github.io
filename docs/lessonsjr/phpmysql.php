<section id="phpandmysql" class="doc-section">
<h2 class="section-title">PHP & MySQL</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<h4>SELECT statement</h4>
<div class="code-block">
<pre><code class="language-markup">&#x3C;?php
$servername = &#x22;localhost&#x22;;
$username = &#x22;username&#x22;;
$password = &#x22;password&#x22;;
$dbname = &#x22;myDB&#x22;;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&#x3E;connect_error) {
    die(&#x22;Connection failed: &#x22; . $conn-&#x3E;connect_error);
} 

$sql = &#x22;SELECT id, firstname, lastname, email, reg_date FROM MyGuests&#x22;;
$result = $conn-&#x3E;query($sql);

if ($result-&#x3E;num_rows &#x3E; 0) {
    // output data of each row
    while($row = $result-&#x3E;fetch_assoc()) {
        echo &#x22;id: &#x22; . $row[&#x22;id&#x22;]. &#x22; - Name: &#x22; . $row[&#x22;firstname&#x22;]. &#x22; &#x22; . $row[&#x22;lastname&#x22;]. &#x22;&#x3C;br&#x3E;&#x22;;
    }
} else {
    echo &#x22;0 results&#x22;;
}
$conn-&#x3E;close();
?&#x3E;</code></pre>
</div><!--//code-block-->


<h4>INSERT statement</h4>
<div class="code-block">
<pre><code class="language-markup">&#x3C;?php
$servername = &#x22;localhost&#x22;;
$username = &#x22;username&#x22;;
$password = &#x22;password&#x22;;
$dbname = &#x22;myDB&#x22;;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die(&#x22;Connection failed: &#x22; . mysqli_connect_error());
}

$sql = &#x22;INSERT INTO MyGuests (firstname, lastname, email)
VALUES (&#x27;John&#x27;, &#x27;Doe&#x27;, &#x27;john@example.com&#x27;)&#x22;;

if (mysqli_query($conn, $sql)) {
    echo &#x22;New record created successfully&#x22;;
} else {
    echo &#x22;Error: &#x22; . $sql . &#x22;&#x3C;br&#x3E;&#x22; . mysqli_error($conn);
}

mysqli_close($conn);
?&#x3E;</code></pre>
</div><!--//code-block-->



</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Display the data (id, firstname, lastname, email, reg_date) from MyGuests using PHP and SQL</li>
	<li>Create a webpage about the planets in our solar system.
	<ul>
	<li>Use the data here: <a href="https://www.google.com/search?q=planets" target="_blank">https://www.google.com/search?q=planets</a></li>
	<li>	Create a database table with these fields: Planet Name, Description, Distance from Sun, Radius, Mass, Length of Day, Orbital Period, and link to Google Maps.</li>
	<li>Input the planet data into your planet table</li>
	<li>	Create a web page that pulls the data out of your planets table and displays the information.  Each link to Google Maps should open in a new tab.</li>
</ul>

	</li>
	<li>Download my code and open the file planetscode.php.  Change database credentials and database field names to match yours. Upload the whole PLANETS folder to Web Faction. Send me the link once you have it working. <a href="http://lesson.jaxcode.webfactional.com/planets.zip">Download Planets Code</a></li>
</ol>


</div>
</div>
</section><!--//doc-section-->


