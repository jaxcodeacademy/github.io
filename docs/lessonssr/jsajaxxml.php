<section id="ajax" class="doc-section">
<h2 class="section-title">AJAX</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h2>Client Side</h2>
   <ol>
	<li><code>HTML</code> is used to define the content of web pages</li><br>

	<li><code>CSS</code> to specify the layout of web pages</li><br>

	<li><code>Javascript</code> to program the behavior of web pages</li><br>
   
	<li><code>XML</code> is used to store and transport data</li>
</ol>

   
AJAX stands for Asynchronous Javascript and XML. AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Javascript. Ajax uses XHTML for content, CSS for presentation, along with Document Object Model and Javascript for dynamic content display.
<br><br>
Asynchronous (in Ajax) processes incoming requests in a constant event stack and sends small requests one after the other without waiting for responses. In other words, asynchronous ajax call allow the next line of code to execute, whereas synchronous call stop Javascript execution until the response from server.   
<br><br>
AJAX is used to:
<br><br>
<ul>
	<li>Update a web page without reloading the page</li>
	<li>Request data from a server - after the page has loaded</li>
	<li>Receive data from a server - after the page has loaded</li>
	<li>Send data to a server - in the background</li>
</ul>

</div>
</div>
</section><!--//doc-section-->



<section id="xml" class="doc-section">
<h2 class="section-title">The XMLHttpRequest Object</h2>
<p>All modern browsers support the XMLHttpRequest object.

The XMLHttpRequest object can be used to exchange data with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.</p>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
Syntax for creating an XMLHttpRequest object:
<br><br>
variable = new XMLHttpRequest();




<div class="code-block">
<pre><code class="language-markup">&lt;div id="demo"&gt;
&lt;h1&gt;The XMLHttpRequest Object&lt;/h1&gt;
&lt;button type="button" onclick="loadDoc()"&gt;Change Content&lt;/button&gt;
&lt;/div&gt;

&lt;script&gt;
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
&lt;/script&gt;</code></pre>
</div><!--//code-block-->



<h4>The onreadystatechange Property</h4>
The readyState property holds the status of the XMLHttpRequest.
<br><br>
The onreadystatechange property defines a function to be executed when the readyState changes.
<br><br>
The status property and the statusText property holds the status of the XMLHttpRequest object.
<br>
<img src="assets/images/readystate.png" class="img-fluid">
<br>
The onreadystatechange function is called every time the readyState changes.
<br><br>
When readyState is 4 and status is 200, the response is ready.
<br>








</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h3>1. Using XMLHttpRequest to fetch XML</h3>
<br>
Look at the code for this script and try to figure out what each line of code is doing: <a href="https://www.w3schools.com/xml/tryit.asp?filename=tryajax_xml2" target="_blank">https://www.w3schools.com/xml/tryit.asp?filename=tryajax_xml2</a>
<br>
Notice that it fetches: <a href="https://www.w3schools.com/xml/cd_catalog.xml" target="_blank">https://www.w3schools.com/xml/cd_catalog.xml</a>
<br><br>


<h3>2. Build Your Own RSS Reader</h3>
An Easy Way to Display an RSS Feed with PHP:


<div class="code-block">
<pre><code class="language-markup">&lt;?php
	$rss = new DOMDocument();
	$rss-&gt;load('http://wordpress.org/news/feed/');
	$feed = array();
	foreach ($rss-&gt;getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' =&gt; $node-&gt;getElementsByTagName('title')-&gt;item(0)-&gt;nodeValue,
			'desc' =&gt; $node-&gt;getElementsByTagName('description')-&gt;item(0)-&gt;nodeValue,
			'link' =&gt; $node-&gt;getElementsByTagName('link')-&gt;item(0)-&gt;nodeValue,
			'date' =&gt; $node-&gt;getElementsByTagName('pubDate')-&gt;item(0)-&gt;nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 5;
	for($x=0;$x&lt;$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '&lt;p&gt;&lt;strong&gt;&lt;a href="'.$link.'" title="'.$title.'"&gt;'.$title.'&lt;/a&gt;&lt;/strong&gt;&lt;br /&gt;';
		echo '&lt;small&gt;&lt;em&gt;Posted on '.$date.'&lt;/em&gt;&lt;/small&gt;&lt;/p&gt;';
		echo '&lt;p&gt;'.$description.'&lt;/p&gt;';
	}
?&gt;</code></pre>
</div><!--//code-block-->



Source: <a href="https://bavotasan.com/2010/display-rss-feed-with-php/" target="_blank">https://bavotasan.com/2010/display-rss-feed-with-php/</a>
<br><br>
<h3>3. Try above then apply it to an RSS News Feed</h3>
<a href="https://rss.com/popular-rss-feeds/" target="_blank">https://rss.com/popular-rss-feeds/</a><br>

<h3>4. Build a "News" website that displays newsfeeds that interest you. </h3>

Make sure to include images from the xml feed in your webpage!<br>
Add it to your portfolio.<br>
<a href="https://colorlib.com/wp/free-news-website-templates/" target="_blank">Free "News" website templates <i class="fa fa-external-link" aria-hidden="true"></i></a>
</div>
</div>
</section><!--//doc-section-->


