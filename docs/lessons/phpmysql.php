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
	<li>Display the data (id, firstname, lastname, email, reg_date) from MyGuests using PHP and SQL</li><br>
	<li>Creat a webpage that lists your favorite Movies by Genre and uses a modal to provide an input form for entering new Movies.
	<br>
	<ul>
	<li>Create the folder 'movies'</li>
	<li>Use Bootstrap 4</li>
	<li>Create a 'movies' database table with movie_id, movie_title, movie_genre</li>
	<li>Genre array: "Action","Comedy","Kids and Family", "Drama","Fantasy","Horror","Mystery","Romance","Thriller","Western". Use an array and foreach loop to create the dropdown.</li>
	<li><strike>Use a Modal for the form.</strike></li>
	<li><strike>Use PHP SESSIONs.</strike></li>
</ul>

	
	</li><br>
	<li>A medical clinic hires you to create a checkin form for new patients that works on all devices, especially tablets. They want to be able to hand the patient a tablet so they can enter their info and submit the form. The data should be stored in a database table and display the message <em>"Thank you for signing in. Please return the tablet, take a seat, and you will be called as soon as possible."</em>
<br><br>
<strong>Form fields to collect (all fields are requred)</strong>:<br>

First and last name<br>
Home address (street, unit number if any, city, state, zip)<br>
Email and Telephone (text input should accept numbers only)<br>
Date of Birth (use 3 drops downs for month, day, and year by using arrays)<br>
Gender (Female, Male, Other)<br>
Ethnicity (Hispanic, Not Hispanic)<br>
Race (dropdown built from an array: African American, American Indian, Alaskan Native, Asian, Caucasian, Native Hawaiian, Pacific Islander)<br>
Marital Status (Married, Single, Divorced, Separated, Widowed)<br>
Number of Children (text input should accept numbers only from 0 to 10)<br>


<div class="code-block">States Array
<pre><code class="language-markup">$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
</code></pre>
</div><!--//code-block-->


<strong>Non-form data</strong>:<br>
Database table name: checkin<br>
Timestamp (date/time data was entered into database)<br>
Status (No Show, Checked In, Discharged)<br><br>
</li>
	<li>Create a webpage about the planets in our solar system.
	<ul>
	<li>Use the data here: <a href="https://www.google.com/search?q=planets" target="_blank">https://www.google.com/search?q=planets</a> (click on the planet image to view the planet data; right hand side of page)</li>
	<li>Create a database table with these fields: Planet Name, Description, Distance from Sun, Radius, Mass, Length of Day, Orbital Period, and link to Google Maps.</li>
	<li>Input the planet data into your planet table</li>
	<li>Create a web page that pulls the data out of your planets table and displays the information.  Each link to Google Maps should open in a new tab.</li>
</ul>

	</li>
	<!--li>Download my code and open the file planetscode.php.  Change database credentials and database field names to match yours. Upload the whole PLANETS folder to Web Faction. Send me the link once you have it working. <a href="http://lesson.jaxcode.webfactional.com/planets.zip">Download Planets Code</a> </li-->
	
<li>Group Assignment (due Sunday)
	<ul>
	<li>2 or 3 per group</li>
	<li>Create a competitor to Twitter called Chirper</li>
	<li>Put project on your Opalstack account</li>
	<li>Register and Login with Forgot Password and Remember Me</li>
	<li>User can create their own password</li>
	<li>Verify registration by email</li>
	<li>Let user add a "Chirp" (140 characters max)</li>
	<li>User can delete a Chirp</li>
	<li>User can follow another Chirper account</li>
	<li>User can "like" a Chirp</li>
	<li>User can "re-Chirp" a Chirp</li>
	<li>Logout</li>
	
	
</ul>

	
</li>	
</ol>


</div>
</div>
</section><!--//doc-section-->


