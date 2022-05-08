<section id="loginandregister" class="doc-section">
<h2 class="section-title">Signup &amp; Login</h2>
<div class="section-block">    
                                
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<br><br>
<h4>Generating a Random Number</h4>

The rand() function generates a random integer.

<div class="code-block">
<pre><code class="language-markup">$arandomnumber = rand();
echo $arandomnumber;
-- or --
echo (rand() . "&lt;br&gt;");
</code></pre>
</div><!--//code-block-->

Random number between two numbers

<div class="code-block">
<pre><code class="language-markup">echo (rand(10,100));</code></pre>
</div><!--//code-block-->
<hr>

<h4>Encrypting a String</h4>
The md5() function calculates the MD5 hash of a string.
<br><br>
The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.
<br><br>
From RFC 1321 - The MD5 Message-Digest Algorithm: "The MD5 message-digest algorithm takes as input a message of arbitrary length and produces as output a 128-bit "fingerprint" or "message digest" of the input. The MD5 algorithm is intended for digital signature applications, where a large file must be "compressed" in a secure manner before being encrypted with a private (secret) key under a public-key cryptosystem such as RSA."

<div class="code-block">
<pre><code class="language-markup">$str = "Hello";
echo md5($str);

Output: 8b1a9953c4611296a827abf8c47804d7</code></pre>
</div><!--//code-block-->

<h4>PHP Header Function</h4>

The PHP header function automatically redirects the user to another webpage.

<div class="code-block">
<pre><code class="language-markup">header("Location: http://www.redirect.to.url.com/");
-- or --
header("Location: login.php");</code></pre>
</div><!--//code-block-->

Redirect and pass data 

<div class="code-block">
<pre><code class="language-markup">header("Location: dashboard.php?message=Welcome");</code></pre>
</div><!--//code-block-->


<div class="alert alert-info">
  <strong>FYI: </strong> If you get this message:<br><br>
  <mark>Warning: Cannot modify header information - headers already sent</mark><br><br>
  It is because you are trying to output text to the page so it cannot redirect. Make sure you do no put any html tags or content on the page.
</div>


</div>
</div>
</section><!--//doc-section-->



<section id="assignments" class="doc-section">
<h2 class="section-title">Assignment</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h3>Build a Signup and Login System</h3>
<ol>
	<li>Create a folder for this project and label it 'signup'. </li>
	<li>Use Bootstrap 3</li>
	<li>Create the following database table and pages:
<ul>

<li>Database table labelled 'users' with these fields 
			  <ul>
			  <li>usersId (auto increment, primary)</li>
			  <li>usersFirst (varchar)</li>
			  <li>usersLast (varchar)</li>
			  <li>usersEmail (varchar)</li>
			  <li>usersPassword (varchar)</li>
			  </ul>

</li>

<li>index.php (signup form). Create a form with the following inputs: 
<ul>
	<li>firstname</li>
	<li>lastname</li>
	<li>email</li>

	<li>Signup button</li>
</ul>

</li>

</li>
<li>signupprocess.php 
<ul>
<li>Generate an encrypted random password from signup</li>
<li>Put the user data in the database along with the encrypted password</li>
<li>Send an email with a welcome message, username(email), unencrypted password, and link to login</li>
<li>Automatically redirect the user to the login page if signup is successful</li>
</ul>
</li>
<li>login.php
<ul>
	<li>create a login form for username and password</li>
	<li>action='loginprocess.php'</li>

</ul>
</li>
<li>loginprocess.php
<ul>
	<li>if username or password is empty send back to login.php with an error message</li>
	<li>otherwise encrypt password and check for match in database</li>
	<li>if no match send back to login.php with the error message</li>
	<li>if match send to dashboard.php with success message</li>
</ul>
</li>
<li>dashboard.php
<ul>
	<li>display SUCCESS message</li>
	<li>if not logged in send to login.php</li>
	<li>provide a logout link/button</li>
</ul>
</li>
<li>logout.php
<ul>
	<li>button with action to login.php with a message saying 'You have successfully logged out.'</li>
	</ul>
	</li>
</ul>

</li></ol>
</div>
</div>
</section><!--//doc-section-->


