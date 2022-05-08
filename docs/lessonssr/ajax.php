<section id="ajaxgetorpost" class="doc-section">
<h2 class="section-title">AJAX GET or POST?</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->

GET is simpler and faster than POST, and can be used in most cases.
<br><br>
However, always use POST requests when:
<br><br>
<ul>
	<li>A cached file is not an option (update a file or database on the server).</li>
	<li>Sending a large amount of data to the server (POST has no size limitations).</li>
	<li>Sending user input (which can contain unknown characters), POST is more robust and secure than GET.</li>
</ul>

<br>
GET Request:
<div class="code-block">
<pre><code class="language-markup">xhttp.open("GET", "demo_get.php", true);
xhttp.send();</code></pre>
</div><!--//code-block-->

<br>
POST Request:
<div class="code-block">
<pre><code class="language-markup">xhttp.open("POST", "demo_post.php", true);
xhttp.send();</code></pre>
</div><!--//code-block-->

To POST data like an HTML form, add an HTTP header with setRequestHeader(). Specify the data you want to send in the send() method:
<br>
<div class="code-block">
<pre><code class="language-markup">xhttp.open("POST", "ajax_test.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fname=Henry&lname=Ford");</code></pre>
</div><!--//code-block-->


<h5>Server requests should be sent asynchronously.</h5>

The async parameter of the open() method should be set to true:

<div class="code-block">
<pre><code class="language-markup">xhttp.open("GET", "ajax_test.php", true);</code></pre>
</div><!--//code-block-->


By sending asynchronously, the JavaScript does not have to wait for the server response, but can instead:
<br>
<ul>
	<li>execute other scripts while waiting for server response</li>
	<li>deal with the response after the response is ready</li>
</ul>





<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->


<section id="ajaxphp" class="doc-section">
<h2 class="section-title">AJAX with Javascript</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
<br>
This example demonstrates how a web page can communicate with a web server and GET an external file:
<div class="code-block">
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;div id="demo"&gt;
&lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
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
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->


<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->

<section id="ajaxphp" class="doc-section">
<h2 class="section-title">AJAX with JQuery</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
<br>
This example demonstrates how a web page can communicate with a web server and GET an external file using JQuery:
<div class="code-block">
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("demo_test.txt");
  });
});
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;div id="div1"&gt;&lt;h2&gt;Let jQuery AJAX Change This Text&lt;/h2&gt;&lt;/div&gt;

&lt;button&gt;Get External Content&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->

<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->


<section id="ajaxphp" class="doc-section">
<h2 class="section-title">AJAX PHP</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
<br>
This example demonstrates how a web page can communicate with a web server while a user types characters in an input field::
<div class="code-block">
<pre><code class="language-markup">&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;p&gt;&lt;b&gt;Start typing a name in the input field below:&lt;/b&gt;&lt;/p&gt;
&lt;form&gt; 
First name: &lt;input type="text" onkeyup="showHint(this.value)"&gt;
&lt;/form&gt;
&lt;p&gt;Suggestions: &lt;span id="txtHint"&gt;&lt;/span&gt;&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->
<br>
gethint.php:
<div class="code-block">
<pre><code class="language-markup">
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
</code></pre>
</div><!--//code-block-->
<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->





<section id="ajaxdatabase" class="doc-section">
<h2 class="section-title">AJAX Database</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
<div class="code-block">
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;style&gt;
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
&lt;/style&gt;
&lt;body&gt;

&lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

&lt;form action=""&gt; 
&lt;select name="customers" onchange="showCustomer(this.value)"&gt;
&lt;option value=""&gt;Select a customer:&lt;/option&gt;
&lt;option value="ALFKI"&gt;Alfreds Futterkiste&lt;/option&gt;
&lt;option value="NORTS "&gt;North/South&lt;/option&gt;
&lt;option value="WOLZA"&gt;Wolski Zajazd&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;
&lt;br&gt;
&lt;div id="txtHint"&gt;Customer info will be listed here...&lt;/div&gt;

&lt;script&gt;
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->

getcustomer.php

<div class="code-block">
<pre><code class="language-markup">$mysqli = new mysqli("servername", "username", "password", "dbname");
if($mysqli-&gt;connect_error) {
  exit('Could not connect');
}

$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customers WHERE customerid = ?";

$stmt = $mysqli-&gt;prepare(sql);
$stmt-&gt;bind_param("s", $_GET['q']);
$stmt-&gt;execute();
$stmt-&gt;store_result();
$stmt-&gt;bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt-&gt;fetch();
$stmt-&gt;close();

echo "&lt;table&gt;";
echo "&lt;tr&gt;";
echo "&lt;th&gt;CustomerID&lt;/th&gt;";
echo "&lt;td&gt;" . $cid . "&lt;/td&gt;";
echo "&lt;th&gt;CompanyName&lt;/th&gt;";
echo "&lt;td&gt;" . $cname . "&lt;/td&gt;";
echo "&lt;th&gt;ContactName&lt;/th&gt;";
echo "&lt;td&gt;" . $name . "&lt;/td&gt;";
echo "&lt;th&gt;Address&lt;/th&gt;";
echo "&lt;td&gt;" . $adr . "&lt;/td&gt;";
echo "&lt;th&gt;City&lt;/th&gt;";
echo "&lt;td&gt;" . $city . "&lt;/td&gt;";
echo "&lt;th&gt;PostalCode&lt;/th&gt;";
echo "&lt;td&gt;" . $pcode . "&lt;/td&gt;";
echo "&lt;th&gt;Country&lt;/th&gt;";
echo "&lt;td&gt;" . $country . "&lt;/td&gt;";
echo "&lt;/tr&gt;";
echo "&lt;/table&gt;";</code></pre>
</div><!--//code-block-->



<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->





<section id="ajaxxml" class="doc-section">
<h2 class="section-title">AJAX XML</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->

<div class="code-block">
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;style&gt;
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
&lt;/style&gt;
&lt;body&gt;

&lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

&lt;button type="button" onclick="loadDoc()"&gt;Get my CD collection&lt;/button&gt;
&lt;br&gt;&lt;br&gt;
&lt;table id="demo"&gt;&lt;/table&gt;

&lt;script&gt;
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "cd_catalog.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="&lt;tr&gt;&lt;th&gt;Artist&lt;/th&gt;&lt;th&gt;Title&lt;/th&gt;&lt;/tr&gt;";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i &lt;x.length; i++) { 
    table += "&lt;tr&gt;&lt;td&gt;" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "&lt;/td&gt;&lt;td&gt;" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "&lt;/td&gt;&lt;/tr&gt;";
  }
  document.getElementById("demo").innerHTML = table;
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->

cd_catalog.xml

<div class="code-block">
<pre><code class="language-markup">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;CATALOG&gt;
&lt;CD&gt;
&lt;TITLE&gt;Empire Burlesque&lt;/TITLE&gt;
&lt;ARTIST&gt;Bob Dylan&lt;/ARTIST&gt;
&lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;
&lt;COMPANY&gt;Columbia&lt;/COMPANY&gt;
&lt;PRICE&gt;10.90&lt;/PRICE&gt;
&lt;YEAR&gt;1985&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;CD&gt;
&lt;TITLE&gt;Hide your heart&lt;/TITLE&gt;
&lt;ARTIST&gt;Bonnie Tyler&lt;/ARTIST&gt;
&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;
&lt;COMPANY&gt;CBS Records&lt;/COMPANY&gt;
&lt;PRICE&gt;9.90&lt;/PRICE&gt;
&lt;YEAR&gt;1988&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;CD&gt;
&lt;TITLE&gt;One night only&lt;/TITLE&gt;
&lt;ARTIST&gt;Bee Gees&lt;/ARTIST&gt;
&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;
&lt;COMPANY&gt;Polydor&lt;/COMPANY&gt;
&lt;PRICE&gt;10.90&lt;/PRICE&gt;
&lt;YEAR&gt;1998&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;CD&gt;
&lt;TITLE&gt;Sylvias Mother&lt;/TITLE&gt;
&lt;ARTIST&gt;Dr.Hook&lt;/ARTIST&gt;
&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;
&lt;COMPANY&gt;CBS&lt;/COMPANY&gt;
&lt;PRICE&gt;8.10&lt;/PRICE&gt;
&lt;YEAR&gt;1973&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;CD&gt;
&lt;TITLE&gt;Maggie May&lt;/TITLE&gt;
&lt;ARTIST&gt;Rod Stewart&lt;/ARTIST&gt;
&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;
&lt;COMPANY&gt;Pickwick&lt;/COMPANY&gt;
&lt;PRICE&gt;8.50&lt;/PRICE&gt;
&lt;YEAR&gt;1990&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;CD&gt;
&lt;TITLE&gt;Romanza&lt;/TITLE&gt;
&lt;ARTIST&gt;Andrea Bocelli&lt;/ARTIST&gt;
&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;
&lt;COMPANY&gt;Polydor&lt;/COMPANY&gt;
&lt;PRICE&gt;10.80&lt;/PRICE&gt;
&lt;YEAR&gt;1996&lt;/YEAR&gt;
&lt;/CD&gt;
&lt;/CATALOG&gt;</code></pre>
</div><!--//code-block-->




<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->







<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h3>Assignment 1: AJAX POST</h3>
<br>
Use the code below to pass a name to a php file which then returns a greeting like "Hello, Bob Seger!"
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

&lt;button type="button" onclick="loadDoc()"&gt;Request data&lt;/button&gt;

&lt;p id="demo"&gt;&lt;/p&gt;
 
&lt;script&gt;
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "demo_post2.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Bob&lname=Seger");
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div><!--//code-block-->

<br><br>


<h3>Assignment 2: AJAX Database</h3>
<br>
Use <code>XMLHttpRequest()</code> and the Planets database table to display info on a selected planet.<br><br>
<a href="http://jaxcode20.jaxcode.webfactional.com/planets/ajaxdb.html" target="_blank">Example</a>

<br><br>
<h3>Assignment 3: AJAX XML Reader</h3>
<br>
Use <code>XMLHttpRequest()</code> and your output from the booklist assignment (booklist.xml) to parse the XML and display it.


<br><br>


<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


