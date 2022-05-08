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

</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
1. Create an HTML page that uses a form to collect an email and uses the PHP mail function to send an email. Must have this functionality:<br><br>

<ul>
<li>Self-contained, only uses one webpage.</li>
<li>Form must check that a properly formatted email was entered.</li>
<li>Sends a text email thanking user for signing up.</li>
<li>Add a checkbox that lets the user request an HTML email instead.</li>
<li>Displays a success message after form is submitted.</li>
<li>Displays the email address in the INPUT form field after form is submitted.</li>
</ul>
<br><br>
2. Download an email template and add it to a web page that sends it to your email.  Customize the content to fit your newsletter theme.
<br><br>
<a href="http://templates.cakemail.com/" target="_blank" class="btn btn-green" target="_blank"><i class="fa fa-download"></i> Download Email Templates Here</a>

</div>
</div>
</section><!--//doc-section-->


