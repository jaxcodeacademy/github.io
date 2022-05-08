<section id="phpformvalidation" class="doc-section">
<h2 class="section-title">PHP Form Validation</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<div class="callout-block callout-danger">
                                        <div class="icon-holder">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Think SECURITY when processing PHP forms!</h4>
                                            <p>

Proper validation of form data is important to protect your form from hackers and spammers!</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->







<h4>PHP Functions to Clean User Input Data</h4>

<p>
Input validation and sanitization using PHP's <a href="http://php.net/manual/en/function.filter-input.php" target="_blank">filter_input()</a> and <a href="http://php.net/manual/en/function.filter-var.php" target="_blank">filter_var()</a> functions. So, you can do something like this:

</p>


<br><br>

<h6>Sanitize a String</h6>
<div class="code-block">
<pre><code class="language-markup">$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);</code></pre>
</div><!--//code-block-->

<h6>Validate an Email Address</h6>
<div class="code-block">
<pre><code class="language-markup">$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);</code></pre>
</div><!--//code-block-->

<p>Validates whether the value is a valid e-mail address. If it's not a valid email address, filter_var() returns false meaning you can run validations checks off it, like this:</p>
<div class="code-block">
<pre><code class="language-markup">$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if ( $email === false ) {
 // Handle invalid emails here
 }
</code></pre>
</div><!--//code-block-->




<p>Optionally, you can use filter_input() like this:</p>
<div class="code-block">
<pre><code class="language-markup">$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);</code></pre>
</div><!--//code-block-->








</div>

</div><!--//row-->
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Add method to your web form. Try GET then try POST</li>
	<li>Create action_page.php</li>
	<li>Echo all variables submitted through form</li>
</ol>

</div>
</div>
</section><!--//doc-section-->


