<section id="bootstrap" class="doc-section">
<h2 class="section-title">Bootstrap</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<p>
<a href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp" target="_blank">W3Schools Bootstrap Tutorial</a><br><br>


<a href="https://getbootstrap.com/docs/3.3/" target="_blank">Bootstrap 3 Official Website</a><br>
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
<li>Create a folder called 'mysite'. Code a 3-page Bootstrap Website.  Can be about anything you want.</li><br>
<li>You have just been hired by a Web Design and Development Company. On your first day they ask you to build a home page (index.html) from a wireframe. The company is a home-services business, called <strong>Home Bodies</strong>, that offers 4 services: cleaning, closet organizing, laundry, and handyman services. The page must be responsive and display correctly on all devices. <a href="lessons/images/wireframe1.png" target="_blank">View Wireframe</a></li><br>
<li>Create the homepage for our new client Bistros
<ul><li>Part A: 
	<ul>
	<li>Layout should follow their <a href="lessons/images/bistroswireframe.jpg" target="_blank">wireframe</a> (also called a PSD).</li>
	<li>Use Bootstrap 3.</li>
	<li>Create a folder on Web Faction called 'bistros' and put the home page and associated files in that folder.</li>
	
	<li>Must render correctly on all devices: Phone, Tablet, Computer.</li>
   </ul>
</li>
<li>Part B: 
   <ul>
<li>Apply a fancy font to BISTROS, OUR CHEF, and REVIEWS using Google fonts. <a href="https://designshack.net/articles/css/the-10-best-script-and-handwritten-google-web-fonts/" target="_blank">Fancy Fonts Tutorial</a> | <a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
<li>Apply a background image to the web page. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
<li>Apply a background image to the container with the ORDER ONLINE button. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
<li>Apply a background color to the following containers: NAVBAR, MENUS, FOOTER. (<a href="lesson.php?lessonslug=css" target="_blank">CSS in lesson 13</a>)</li>
<li>Use <a href="https://fontawesome.com/?from=io" target="_blank">FontAwesome</a> for the REVIEW STARS. (See my <a href="http://jaxcode.com/projects/bistros/" target="_blank">demo</a>)</li>


   </ul><br>

</li>
<li>Part C: Create Menus and Ordering System. 
   <ul>
<li>Bistros Group Project<br><br>

Work in groups of 2 or 3. Solo is ok.<br><br>

Build a menu for each button BREAKFAST, LUNCH, AND DINNER.<br><br>

User should be able to click on a button and be taken to that menu.<br><br>

Menu items should be in a database table.<br><br>

menu_item_id<br>
enum('breakfast','lunch','dinner')<br>
item_name (ie., Pancakes)<br>
item_blurb (description of the food)<br>
item_price<br>
item_image (optional)<br><br>

MENU PAGE<br>
Display all items on each menu, for example the Breakfast Menu should look like this:<br>
<br>
Breakfast Menu<br>
<br>
<div class="responsive">
<table class="table">
<tr>

<th></th>
<th>Item</th>
<th>Description</th>
<th>Price</th>
<th>Quantity</th>
</tr>
<tr>

<td><img src="lessons/images/pancakes.jpg" class="img-responsive"></td>
<td>Pancakes</td>
<td>Large stack of pancakes served with butter and syrup.</td>
<td>$5.00</td>
<td><input type="number" value="2"></td>
</tr>
<tr>
<td><img src="lessons/images/waffles.jpg" class="img-responsive"></td>
<td>Waffles</td>
<td>Belgian served with fresh fruit, butter, and syrup.</td>
<td>$6.00</td>
<td><input type="number" value="1"></td>
</tr>
<tr>
<td colspan="6" class="text-right"><input type="submit" value="Review Order"></td>

</tr>
</table>
</div>
<br>
ORDER REVIEW PAGE<br>
<br>
Display order (each item with price X how many ordered)<br>
Display price total<br>
Let the user select Pickup or Delivery<br>
If they pick Delivery then the address form should slide in.
<br><br>
<div class="well">
<p>Check radio buttons to toggle between hiding and showing the DIV element:</p>
<input type="radio" name="hello" onclick="pickup()" value="pickup"> Pickup<br>
<input type="radio" name="hello" onclick="delivery()" value="deliver"> Delivery

<div id="myDIV" style="display:none;">
This is my DIV element for my form.
</div>
</div>

<script>
function pickup() {
  var x = document.getElementById("myDIV");
    x.style.display = "none";
}
function delivery() {
  var x = document.getElementById("myDIV");
    x.style.display = "block";
}
</script>
<br>
<br>
ORDER PROCESS PAGE<br>
<br>
Send an email to yourself with the new order<br>
Send an email to the customer verifying order with one:<br>
	<ol>
	<li>for pickup: Your order will be ready for pickup in 30 minutes.<br></li>
	<li>for deliver: Your order will be delivered in 45 minutes.<br></li>
</ol>
<br>
	
Display a thanks for ordering message and display order, delivery method (pickup or delivery), with pricing.<br>
<br>
Once your program is working copy the code to your version of Bistros and hook it up.<br>
<br>

</li>



   </ul><br>

</li>

<li>Part D: Add Orders to the Database and build an admin backend that can do the following:
<ul>
	<li>Has a dashbord page that displays active orders and a graph that shows revenue to date.</li>
	<li>Uses an <a href="https://getbootstrap.com/docs/4.0/examples/" target="_blank">admin template</a>.</li>
	<li>Has a <a href="https://getbootstrap.com/docs/4.0/examples/" target="_blank">user login</a></li>
		
	<li>	Allows admin to mark each order as completed</li>
	<li>	Allows admin to click on any order and see the details and edit or delete order items or customer info.</li>
</ul>
</li>

</ul>

</li>
<br><br>
<li>Blog from a Wireframe
<ul>
<li>You've been given a <a href="lessons/images/blogwireframe.png" target="_blank">blog wireframe</a> and asked to build a database driven website.</li>
<li>Create a folder in your PROJECTS folder and label it 'blog'.
<li>The topic of the blog can be anything you want.</li>
<li>Build the webpage first using Bootstrap and Latin Filler as placeholder text. </li>
<li>After the page is done build a database table that holds the database articles. The table should have fields for: article id (auto incremented),Article Title, Date Created, Author, Blurb (article), Category, Tags, and Published (indicates if the articles should be live or not). Each article should not have Comments.</li>
<li>Select all the blog articles from the table and have them display on your webpage.</li>

</ul>
</li> 



<li>Build an In/Out Board with the following funcionality
<ul>
<li>Create a folder and name it 'inout'</li>
<li>	Inside the inout folder create a folder named 'images'</li>
<li>	Copy these images to the images folder: <img src="lessons/images/circle_green.png"> <img src="lessons/images/circle_red.png"></li>
<li>	Build your page(s) with <mark style="background-color:yellow;">Bootstrap 4</mark> </li>
<li>	Navigation should have the app name 'In Out', and 2 links 'Admin' and 'Refresh'</li>
<li>	Add a table to display the following data: Employee, In, Out, Message.</li>
<li>Add the class table-bordered to the table tag.</li>
<li>A green or red button should display for each employee, the one not displayed should appear when you mouse over it.</li>
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

$_POST[&#x27;message&#x27;] = filter_var($_POST[&#x27;message&#x27;], FILTER_SANITIZE_STRING);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die(&#x22;Connection failed: &#x22; . mysqli_connect_error());
}

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
<li>Create a folder labeled 'apple'
  <ul>
  <li>Duplicate the following webpage from the Apple.com website:
	   <ul>
	   <!--li>https://www.apple.com/shop/buy-mac/macbook-pro/13-inch</li-->
	   <li>https://www.apple.com/macbook-pro/specs/</li>
	   </ul>
   </li>
   	<li>Use Bootstrap 3, CSS, and HTML </li>
   	<li>Use Font Awesome 4.7</li>
	<li>Goal is for design, not functionality</li>
	<li>The goal of this project is to get your Apple website to look exactly like the actual Apple webpage.</li>
   </ul>
</li>


<li>Online Fashion Store from a Wireframe
<ul>
<li>You've been given a <a href="lessons/images/fashionwireframe.jpg" target="_blank">store wireframe</a> and asked to build a database driven ecommerce website.</li>
<li>Create a folder in your PROJECTS folder and label it 'estore'. Create 3 more folders inside this one: css, images, js.
<li>Build the webpage first using Bootstrap and Latin Filler as placeholder text. </li>
<li>After the page is done build a database table, 'products', that holds the products for sale. The table should have fields for: Product id (auto incremented),Product Title, Date Created, Manufacturer, Product Description, Product Price, New Product (yes or no, enum), Discount Percentage (if any), Image Name, and Published (indicates if the product should be live or not). Insert some products.</li>
<li>Select all the products from the table and have them display on your webpage.</li>

</ul>
</li> 




</ol>
</div>
</div>
</section><!--//doc-section-->


