

<section id="ajax" class="doc-section">
<h2 class="section-title">Cookies</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<strong>Create Cookies With PHP:</strong><br>
A cookie is created with the setcookie() function.<br>

<div class="code-block">
<pre><code class="language-markup">&lt;?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?&gt;</code></pre>
</div><!--//code-block-->

<div class="alert alert-info">
  <strong>Note: </strong> The setcookie() function must appear BEFORE the <code>&lt;html&gt;</code> tag.
</div>


<div class="alert alert-info">
  <strong>Note: </strong> To view and delete cookies manually in Chrome: On keyboard use <code>fn F12</code> to open developer tools and then click the "Application" tab. Expand the "Cookies" list item and select the url for your site.
</div>


<strong>Modify a Cookie Value:</strong><br>
To modify a cookie, just set (again) the cookie using the setcookie() function.<br><br>

<strong>Delete a Cookie:</strong><br>
<div class="code-block">
<pre><code class="language-markup">setcookie("hello", "", 1);</code></pre>
</div><!--//code-block-->

Script to set a cookie with a random number value and to read and display a cookie with Super Global $_COOKIE:
<div class="code-block">
<pre><code class="language-markup">&lt;?php

if(!isset($_COOKIE['myCookie'])) {
$value = rand();
// cookie will expire in 1 hour
setcookie("myCookie", $value, time() + 3600);
$_COOKIE['myCookie'] = $value;
}
?&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;Set Cookie Test&lt;/h1&gt;
&lt;strong&gt;Are cookies enabled in this browser?&lt;/strong&gt;&lt;br&gt;
&lt;?php
if(count($_COOKIE) &gt; 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?&gt;
&lt;br&gt;&lt;br&gt;&lt;hr&gt;
&lt;strong&gt;Is my cookie set?&lt;/strong&gt;&lt;br&gt;
&lt;?
if(isset($_COOKIE['myCookie'])) {
echo 'Yes, it is set! The cookie value of MyCookie = '.$_COOKIE['myCookie'];
} else {
echo 'No, the cookie is not set';
}

?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->



</div>
</div>
</section><!--//doc-section-->









