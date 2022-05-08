

<section id="ajax" class="doc-section">
<h2 class="section-title">AJAX</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h3>The XMLHttpRequest Object:</h3><br>
<img src="lessons/images/pic_ajax.gif"><br>

<br>
<p id="demo">Let AJAX change this text.</p>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "lessons/ajax_info.txt", true);
  xhttp.send();
}
</script>

<br><br>
<strong>AJAX Code for above action:</strong><br>
<div class="code-block">
<pre><code class="language-markup"><p id="demo">Let AJAX change this text.</p>

&lt;button type="button" onclick="loadDoc()">Change Content&lt;/button&gt;

&lt;script&gt;
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
&lt;/script&gt;</code></pre>
</div><!--//code-block-->
</div>
</div></div>
</section><!--//doc-section-->

<section id="ajax" class="doc-section">
<h2 class="section-title">AJAX and PHP</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<strong>AJAX and PHP:</strong><br>


<script>
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
</script>
<p><b>Start typing a name in the input field below:</b></p>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>



<strong>AJAX Code for above action:</strong><br>
<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
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
&lt;p&gt;&lt;b&gt;Start typing a name in the input field below:&lt;/b&gt;&lt;/p&gt;
&lt;form&gt;
First name: &lt;input type="text" onkeyup="showHint(this.value)"&gt;
&lt;/form&gt;
&lt;p&gt;Suggestions: &lt;span id="txtHint"&gt;&lt;/span&gt;&lt;/p&gt;</code></pre>
</div><!--//code-block-->

and code for the getint.php<br>

<div class="code-block">
<pre><code class="language-markup">&lt;?php
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
?&gt;</code></pre>
</div><!--//code-block-->


</div>
</div>
</section><!--//doc-section-->

<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
1. AJAX Database Using PHP. Duplicate the example at <a href="https://www.w3schools.com/js/js_ajax_database.asp" target="_blank">W3Schools</a>. You will have to figure out how to recreate the db table. I implemented the example and found several errors that you'll have to fix. This is a great example of the kind of problems you will run into in your job. This project is mandatory and due tomorrow morning. My implementation: <a href="http://jaxcode20.jaxcode.webfactional.com/ajax/db.html" target="_blank">View</a>
<br><br>
2. Convert your Planets project into an AJAX powered app. The dropdown should display all the Planets (build your dropdown from the database). After a Planet is selected AJAX should retrieve the planet's data from the database and display it. Use bootstrap 4 and apply an original design to your application.
</div>
</div>
</div>
</section><!--//doc-section-->




