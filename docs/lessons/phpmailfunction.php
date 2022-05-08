<section id="phpmailfunction" class="doc-section">
<h2 class="section-title">PHP Mail Function</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<p>The mail() function allows you to send emails directly from a script.
<br><br>
<i>Syntax</i> <p><code>mail(to,subject,message,headers,parameters);</code></p> 
<br>
<h4>How to Send a Text Email</h4>

<div class="code-block">
<pre><code class="language-markup">&lt;?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?&gt;</code></pre>
</div><!--//code-block-->

<br>
<h4>How to Send an HTML Email</h4>

<div class="code-block">
<pre><code class="language-markup">
&#x3C;?php
$to = &#x22;somebody@example.com, somebodyelse@example.com&#x22;;
$subject = &#x22;HTML email&#x22;;

$message = &#x22;
&#x3C;html&#x3E;
&#x3C;head&#x3E;
&#x3C;title&#x3E;HTML email&#x3C;/title&#x3E;
&#x3C;/head&#x3E;
&#x3C;body&#x3E;
&#x3C;p&#x3E;This email contains HTML Tags!&#x3C;/p&#x3E;
&#x3C;table&#x3E;
&#x3C;tr&#x3E;
&#x3C;th&#x3E;Firstname&#x3C;/th&#x3E;
&#x3C;th&#x3E;Lastname&#x3C;/th&#x3E;
&#x3C;/tr&#x3E;
&#x3C;tr&#x3E;
&#x3C;td&#x3E;John&#x3C;/td&#x3E;
&#x3C;td&#x3E;Doe&#x3C;/td&#x3E;
&#x3C;/tr&#x3E;
&#x3C;/table&#x3E;
&#x3C;/body&#x3E;
&#x3C;/html&#x3E;
&#x22;;

// Always set content-type when sending HTML email
$headers = &#x22;MIME-Version: 1.0&#x22; . &#x22;\r\n&#x22;;
$headers .= &#x22;Content-type:text/html;charset=UTF-8&#x22; . &#x22;\r\n&#x22;;

// More headers
$headers .= &#x27;From: &#x3C;webmaster@example.com&#x3E;&#x27; . &#x22;\r\n&#x22;;
$headers .= &#x27;Cc: myboss@example.com&#x27; . &#x22;\r\n&#x22;;

mail($to,$subject,$message,$headers);
?&#x3E;

</code></pre>
</div><!--//code-block-->

<h4>PHP Redirect Function</h4>
<div class="code-block">
<pre><code class="language-markup">header("Location: anotherDirectory/anotherFile.php");</code></pre>
</div><!--//code-block-->




</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
1. Create a folder (name it newsletter) with an HTML page (name it index.php) that uses a form to collect an email and uses the PHP mail function to send an email. Must have this functionality:<br><br>

<ul>
<li>Self-contained, only uses one webpage.</li>
<li>Field is required</li>
<li>Form must check that a properly formatted email was entered.</li>
<li>Sends a text email thanking user for signing up.</li>
<li>Add a checkbox that lets the user request an HTML email instead.</li>
<li>Displays a success message after form is submitted.</li>
<li>Displays the email address in the INPUT form field after form is submitted.</li>
<li>Move the PHP code to another page (name it process.php) and have the form submit to that page then redirect back to the original page (index.php) with the PHP Redirect function.</li>
<li>Download an email template and add it to a web page that sends it to your email.  Customize the content to fit your newsletter theme.</li>
</ul>
 
<br><br>
2. Your company has been hired to create a competitive site to Twitter called Chirper. You've been asked to build the registration system. Create a folder (name it chirper) with a sign up page (name it index.php) that uses a form to collect registration information: first name, last name, email, and "I agree to terms of service" checkbox and uses the PHP mail function to send an email welcoming the user to Chirper. Must have this functionality:<br><br>

<ul>

<li>DO NOT copy and paste from assignment 1. Code this project.</li>
<li>The sign up page (index.php) should use Bootstrap. Design it to look like a professional registration page. <a href="https://colorlib.com/wp/free-bootstrap-registration-forms/" target="_blank">Here are some samples that you might use for inspiration</a>. Do not use any of these. Build your own.</li>
<li>All fields required</li>
<li>Form must check that a properly formatted email was entered.</li>
<li>Sends an html email thanking user for signing up. Build the email template using Bootstrap. Do not use a pre-made template</li>
<li>Terms of Service should popup in a Bootstrap modal.</li>
<li>Put PHP code in another page (name it register.php) and have the form submit to that page then redirect back to the original page (index.php) with the PHP Redirect function.</li>
<li>Displays a success message after form is submitted.</li>
<li>Displays all inputs in the INPUT form fields after form is submitted. Including auto-checking the I agree checkbox.</li>

</ul>
 
<br><br>


</div>
</div>
</section><!--//doc-section-->


