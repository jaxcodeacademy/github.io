<section id="phpsessions" class="doc-section">
<h2 class="section-title">PHP Sessions</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
A session is a way to store information (in variables) to be used across multiple pages.
<br><br>
Unlike a cookie, the information is not stored on the users computer.
<br><br>
<strong>Start a PHP Session</strong><br><br>
A session is started with the session_start() function.
<br><br>
Session variables are set with the PHP global variable: $_SESSION.
<br><br>
Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:
<br><br>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">&lt;?php
// Start the session
session_start();
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--/code-block-->

<br><br>
Destroy a PHP SESSION Variable
To remove a global session variables use unset():

<br><br>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">&lt;?php
// Start the session
session_start();
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php

unset($_SESSION["firstname"]);

?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--/code-block-->



<br><br>







<strong>Destroy a PHP Session</strong><br><br>

To remove all global session variables and destroy the session, use session_unset() and session_destroy():
<br><br>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">&lt;?php
session_start();
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--/code-block-->







</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
1. Apply SESSIONs to your College Project. While processing the login set Session Variables for the users name (first and last), email, and any other info you want to display. Destroy all SESSIONS and variables when user logouts.
</div>
</section><!--//doc-section-->


