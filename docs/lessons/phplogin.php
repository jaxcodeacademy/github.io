<section id="phpdate" class="doc-section">
<h2 class="section-title">PHP Login and Registration</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h2>PHP Redirect</h2>
 <div class="code-block">
<pre><code class="language-markup">header("Location: http://www.example.com/");
</code></pre>
</div><!--//code-block-->
<div class="code-block">
<pre><code class="language-markup">header("Location: page2.html");
</code></pre>
</div><!--//code-block-->
 <h2>PHP Cookies</h2>
<p>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
</p>
<p>The following example creates a cookie named "user" with the value "1". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:</p>
<div class="code-block">
<pre><code class="language-markup">$cookie_name = "user";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
</code></pre>
</div><!--//code-block-->
<div class="code-block">
<pre><code class="language-markup">if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "User ID is: " . $_COOKIE[$cookie_name];
}
</code></pre>
</div><!--//code-block-->

<h2>PHP Sessions</h2>

<p>A session is a way to store information (in variables) to be used across multiple pages.
<br><br>
Unlike a cookie, the information is not stored on the users computer.
</p>
<p>Start a PHP Session
A session is started with the session_start() function.
<br><br>
Session variables are set with the PHP global variable: $_SESSION.
</p>
<div class="code-block">
<pre><code class="language-markup">// Start the session
session_start();

// Set session variables
$_SESSION["firstname"] = $row['firstname'];
$_SESSION["lastname"] = $row['lastname'];
</code></pre>
</div><!--//code-block-->

<h2>Destroy a Cookie or Session (Logout)</h2>

<div class="code-block">
<pre><code class="language-markup">// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

// delete a cookie
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
</code></pre>
</div><!--//code-block-->

<!------------------------>
</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<ol>

</ol>







</div>
</div>
</section><!--//doc-section-->


