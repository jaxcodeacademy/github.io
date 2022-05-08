<section id="webforms" class="doc-section">
<h2 class="section-title">Web Forms</h2>
<div class="section-block">    
                                
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<br><br>
<h4>Simple Form</h4>

<form action="/action_page.php">
  First name:<br>
  <input type="text" name="lastname" required><br>
  Last name:<br>
  <input type="text" name="lastname"><br>
   Email:<br>
  <input type="text" name="email"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
<div class="code-block">
<pre><code class="language-markup">&#x3C;form action=&#x22;action_page.php&#x22; method=&#x22;POST&#x22;&#x3E;
  First name:&#x3C;br&#x3E;
  &#x3C;input type=&#x22;text&#x22; name=&#x22;firstname&#x22;&#x3E;&#x3C;br&#x3E;
  Last name:&#x3C;br&#x3E;
  &#x3C;input type=&#x22;text&#x22; name=&#x22;lastname&#x22;&#x3E;&#x3C;br&#x3E;
   Email:&#x3C;br&#x3E;
  &#x3C;input type=&#x22;email&#x22; name=&#x22;email&#x22;&#x3E;&#x3C;br&#x3E;&#x3C;br&#x3E;
  &#x3C;input type=&#x22;submit&#x22; name=&#x22;myform&#x22; value=&#x22;Submit&#x22;&#x3E;
&#x3C;/form&#x3E;</code></pre>
</div><!--//code-block-->
<hr>
<h2>Image Upload</h2>
<a href="https://www.w3schools.com/php/php_file_upload.asp">W3Schools Image Upload</a>

<hr>
<h2>How to handle multiple checkboxes</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/McaG-w35w1A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
</section><!--//doc-section-->



<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ul>Assignment 1: My Guests<br>
	<li>Create a guest registration page with an html form.
	<br> The web page should:
	<ul>
	<li>Create TABLE 'MyGuests' with these fields: id, firstname, lastname, email, reg_date</li>
	<li>Add 10 records</li>
	<li>Display a form to collect registration data: firstname, lastname and email.</li><li>Display guests already in the database.</li>	
	<li>Validate the data.</li>
	<li>Insert the data into MyGuests database table.</li>
	<li>Display a Success message.</li>
	<li>Optional: Email you that a guest has registered.</li>
	</ul></li>
	</ul>
	
	Assignment 2 (USE BOOTSTAP 4): College/University Website<br>
	<ul>
	<li>Create a website for a University that has the following pages/features:
		 <ul>
		 <li>Is responsive</li>
		 <li>
		 Uses a "college-y" bootstrap template for your site. Your site must render properly in all devices. (<a href="https://bootstrapmade.com/" target="_blank">Free Bootstrap Templates</a> OR <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Theme Fisher</a>)
		 </li>
		 <li>Home page</li>
		 <li>Registration page</li>
		 <li>Login page</li>
		 <li>Logout page</li>
		 <li>Student Portal (Pages: dashboard, course registration/add/drop, edit personal data, view financial data, logout)</li>
	 </ul>
</li>

	<li>Create a registration form that lets a user create an account with the following:
	<ul>
	<li>Project folder should be labeled 'college'</li>
	<li>First name</li>
	<li>	Last name</li>
	<li>	Email address</li>
	<li>	Phone number</li>
	<li>	Street address</li>
	<li>	Street address 2</li>
	<li>	City</li>
	<li>	State (must be a dropdown)</li>
	<li>	Postal code</li>
	<li>Gender</li>
	
	
	<li>A text box for notes and special needs</li>
	<li>	I agree radio button</li>
	<li>	The form action should go to a new page that sanitizes the data, generates a random password, checks for errors and returns the user to the previous page if errors are found.</li>
	<li>	If no errors, data should be saved into MySQL. The data should be split into two tables, one for the user's personal data and one for their course selections. Your PHP should check if the user is already in the database and if they already registed for any of the courses selected.</li>
	<li>	A message should display saying they have successfully registered and they should check their email for a verification email.</li>
	
	<li>	<strong>The verification email should be an HTML email welcome message verifying their registration, link to log in to the student portal with their email as the username and a randomly generated password.</strong> </ul></li>
	
	<li>Student Portal</li>
	<ul>
	<li>A <mark>Login</mark> System (see below)</li>
	<li>A password protected section with a <mark>dashboard</mark> page, a <mark>course registration</mark> page, a student demographic page, and an <mark>invoice/billing</mark> page.</li>
	<li>The password protected section should have a logout button and use PHP Sessions and Cookies.</li>
	<li>Dashboard - should display student info and enrolled courses. If they haven't enrolled in classes yet it should display a message telling them they have not enrolled with a link to the enrollment page. Allows user to upload their picture</li>
	<li>Course enrollment - list of courses (min 5). Each course should have the course name, course number, day(s)/time, cost, short description, number of credits, instructor's name, course status (published?). Users can select more than one course. Courses must be pulled from a database.</li>
	<li>Burser - this course should list classes with cost for each with a total. There should be a make payment button (it does not have to work)</li>


	
	
	<li>Users should be able to edit their demographic information and add/drop classes.</li>
	
	
</li>	
	</li>
</ol>
<h3>Login System</h3>
<ol>
<li>Generate an encrypted random password from registration</li>
<li>Send an email with username(email) and password</li>
<li>Create the following pages: login.php, loginprocess.php, dashboard.php, logout.php</li>
<li>login.php
<ul>
	<li>create a login form for username and password with action='processlogin.php'</li>
	<li>start sessions</li>
	<li>if already logged in send to dashboard.php</li>
	<li>error message above the form if login unsuccessful</li>
</ul>
</li>
<li>loginprocess.php
<ul>
	<li>start sessions</li>
	<li>if username or password empty send back to login.php with the error message</li>
	<li>otherwise encrypt password and check for match in database</li>
	<li>if no match send back to login.php with the error message, destroy message SESSION variable</li>
	<li>if match send to dashboard.php with success message</li>
</ul>
</li>
<li>dashboard.php
<ul>
	<li>display SUCCESS message</li>
	<li>destroy SESSION variable for message</li>
	<li>if not logged in send to login.php</li>
	<li>provide a logout link/button</li>
</ul>
</li>
<li>logout.php
<ul>
	<li>destroy all sessions</li>
	<li>redirect to login.php</li>
	</ul>
	</li>
</ol>

</div>
</div>
</section><!--//doc-section-->


