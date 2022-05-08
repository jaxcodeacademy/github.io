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







<h4>3 PHP Functions to Clean User Input Data</h4>

<p>
<ol>
	<li>Strip unnecessary characters (extra space, tab, newline) from the user input data with the PHP trim() function</li>
	<li>Remove backslashes (\) from the user input data with the PHP stripslashes() function</li>
	<li>Strip HTML characters from the user input data with the PHP htmlspecialchars() function</li>
</ol>

</p>


<br><br>

<h6>Assign each to a variable</h6>
<div class="code-block">
<pre><code class="language-markup">$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];</code></pre>
</div><!--//code-block-->

<h6>Apply trim() function</h6>
<div class="code-block">
<pre><code class="language-markup">$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);</code></pre>
</div><!--//code-block-->

<h6>Apply stripslashes() function</h6>
<div class="code-block">
<pre><code class="language-markup">$firstname = stripslashes(trim($_POST['firstname']));
$lastname = stripslashes(trim($_POST['lastname']));
$email = stripslashes(trim($_POST['email']));</code></pre>
</div><!--//code-block-->

<h6>Apply htmlspecialchars() function</h6>
<div class="code-block">
<pre><code class="language-markup">$firstname = htmlspecialchars(stripslashes(trim($_POST['firstname'])));
$lastname = htmlspecialchars(stripslashes(trim($_POST['lastname'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));</code></pre>
</div><!--//code-block-->


<br><br>
<h4>Introduction to Functions</h4>

<div class="code-block">
<pre><code class="language-markup">function scrub($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}</code></pre>
</div><!--//code-block-->

<br>
<h6>Call the function</h6>

<div class="code-block">
<pre><code class="language-markup">$firstname = scrub($_POST["firstname"]);
$lastname = scrub($_POST["lastname"]);
$email = scrub($_POST["email"]);</code></pre>
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


