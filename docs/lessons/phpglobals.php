<section id="phpglobalvariables" class="doc-section">
<h2 class="section-title">PHP Super Global Variables</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p>The PHP superglobals $_GET and $_POST are used to collect form-data.</p>


<h4>GET vs. POST</h4>

<div class="code-block">
<pre><code class="language-markup">&#x3C;form action=&#x22;action_page.php&#x22; method=&#x22;GET&#x22; &#x3E;

&#x3C;form action=&#x22;action_page.php&#x22; method=&#x22;POST&#x22; &#x3E;
  </code></pre>
</div><!--//code-block-->

<p>Both GET and POST create an array (e.g. array( key => value, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.
<br><br>
Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
<br><br>
$_GET is an array of variables passed to the current script via the URL parameters.
<br><br>
$_POST is an array of variables passed to the current script via the HTTP POST method.</p>
<br>
<h5>When to use GET?</h5>

<p>
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
<br><br>
GET may be used for sending non-sensitive data.
<br><br>
Note: GET should NEVER be used for sending passwords or other sensitive information!
</p>
<br>
<h5>When to use POST?</h5>
<p>
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
<br><br>
Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
<br><br>
However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
</p>
<br>
<h2>action_page.php</h2>
<br>
<h6>GET method</h6>
<div class="code-block">
<pre><code class="language-markup">&#x3C;html&#x3E;
&#x3C;body&#x3E;

Welcome &#x3C;?php echo $_GET[&#x22;firstname&#x22;]; ?&#x3E; &#x3C;?php echo $_GET[&#x22;lastname&#x22;]; ?&#x3E;&#x3C;br&#x3E;
Your email address is: &#x3C;?php echo $_GET[&#x22;email&#x22;]; ?&#x3E;

&#x3C;/body&#x3E;
&#x3C;/html&#x3E;</code></pre>
</div><!--//code-block-->
<br>
<h6>POST method</h6>
<div class="code-block">
<pre><code class="language-markup">&#x3C;html&#x3E;
&#x3C;body&#x3E;

Welcome &#x3C;?php echo $_POST[&#x22;firstname&#x22;]; ?&#x3E; &#x3C;?php echo $_POST[&#x22;lastname&#x22;]; ?&#x3E;&#x3C;br&#x3E;
Your email address is: &#x3C;?php echo $_POST[&#x22;email&#x22;]; ?&#x3E;

&#x3C;/body&#x3E;
&#x3C;/html&#x3E;</code></pre>
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


