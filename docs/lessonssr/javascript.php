<section id="javascript" class="doc-section">
<h2 class="section-title">Javascript</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

Javascript: an object-oriented computer programming language commonly used to create interactive effects within web browsers.

<div class="section-block">
<div class="callout-block callout-info">
<div class="icon-holder">
<i class="fa fa-info-circle"></i>
</div><!--//icon-holder-->
<div class="content">
<h4 class="callout-title">FYI</h4>
<p>Web pages are not the only place where Javascript is used. Many desktop and server programs use Javascript. Node.js is the best known. Some databases, like MongoDB and CouchDB, also use Javascript as their programming language.</p>
</div><!--//content-->
</div><!--//callout-block-->

<h4>The <code>&lt;script&gt;</code> Tag</h4>
In HTML, Javascript code must be inserted between <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags.
<br><br>
The Javascript equivalent to PHP echo:
<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
document.write("hello, world!");
&lt;/script&gt;</code></pre>
</div><!--//code-block-->

<br><br>
To access an HTML element, JavaScript can use the <code>document.getElementById(id)</code> method.
<br><br>
The <code>id</code> attribute defines the HTML element. The <code>innerHTML</code> property defines the HTML content:

<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
document.getElementById("demo").innerHTML = "My First Javascript";
&lt;/script&gt;</code></pre>
</div><!--//code-block-->
Javascript onclick Event
<br><br>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
<div class="code-block">
<pre><code class="language-markup">&lt;button type="button"
onclick="document.getElementById('jaxcode').innerHTML = Date()"&gt;
Click me to display Date and Time.&lt;/button&gt;</code></pre>
</div><!--//code-block-->


How to call a Javascript Function
<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
function myFunction(p1, p2) {
  return p1 * p2;
}
document.getElementById("funky").innerHTML = myFunction(4, 3);
&lt;/script&gt;</code></pre>
</div><!--//code-block-->

<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
function toCelsius(fahrenheit) {
  return (5/9) * (fahrenheit-32);
}
var degreestemp = 77;
document.getElementById("degreestemp").innerHTML = degreestemp + ' Degrees = ' + toCelsius(degreestemp) + ' Celcius';
&lt;/script&gt;</code></pre>
</div><!--//code-block-->






<h3>Javascript in &lt;head&gt; or &lt;body&gt;</h3>
You can place any number of scripts in an HTML document.
<br><br>
Scripts can be placed in the &lt;body&gt;, or in the &lt;head&gt; section of an HTML page, or in both.
<br>
<h3>External Javascript</h3>
Scripts can also be placed in external files:<br><br>

External scripts are practical when the same code is used in many different web pages.
<br><br>
Javascript files have the file extension .js.
<br><br>
To use an external script, put the name of the script file in the src (source) attribute of a <code>&lt;script&gt;</code> tag:
<br>
Example
<br>
<div class="code-block">
<pre><code class="language-markup">&lt;script src="myScript.js"&gt;&lt;/script&gt;</code></pre>
</div><!--//code-block-->

<h3>Displaying Javascript</h3>

Javascript Display Possibilities<br>
Javascript can "display" data in different ways:<br><br>

<ul>
	<li>Writing into an HTML element, using innerHTML.</li>
	<li>Writing into the HTML output using document.write().</li>
	<li>Writing into an alert box, using window.alert().</li>
	<li>Writing into the browser console, using console.log().</li>
</ul>


Shortcut<br>
Console: Fn F12 for Mac
<br>

<div class="code-block">
<pre><code class="language-markup">console.log(5 + 6);
console.log("Hello, world!");
console.log("I am " + 5 + " years old");</code></pre>
</div><!--//code-block-->

While loops, counters, and if statements
<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
var word = "Mississippi";
var count = 1;
while (count < 11) {
    console.log(count + " " + word);
    count = count + 1;
    if (count > 10) {
        console.log("Ready or not, here I come"); 
}
	}
&lt;/script&gt;</code></pre>
</div><!--//code-block-->
<!-- -->

<textarea></textarea><br><br>

Javascript Can Change HTML Content<br>
One of many Javascript HTML methods is getElementById().<br><br>

This example uses the method to "find" an HTML element (with id="demo") and changes the element content (innerHTML) to "Hello Javascript":<br><br>

Example
<div class="code-block">
<pre><code class="language-markup">document.getElementById("demo").innerHTML = "Hello Javascript";

document.getElementById("demo").style.fontSize = "35px";</code></pre>
</div><!--//code-block-->



</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h3>Assignment 1: "99 Bottles of Beer on the Wall"</h3>
<br>
<ol>
	<li>Write a PHP script that displays the lyrics to the song "99 Bottles of Beer on the Wall". <a href="https://rosettacode.org/wiki/99_Bottles_of_Beer" target="_blank">View Lyrics</a></li>

	<li>Convert your PHP script in to a Javascript that outputs to the console log.</li>
	<!--
	var word = "bottles";
var count = 99;
while (count > 0) {
    console.log(count + " " + word + " of beer on the wall");
    console.log(count + " " + word + " of beer,");
    console.log("Take one down, pass it around,");
    count = count - 1;
    if (count > 0) {
        console.log(count + " " + word + " of beer on the wall.");
    } else {
        console.log("No more " + word + " of beer on the wall.");
    }
}
	
	-->
</ol>
<br>
<h3>Assignment 2: W3 Schools</h3>
<br>
Go through the following tutorials comparing them to their PHP equivalents:
<br><br>
<a target="_blank" href="https://www.w3schools.com/js/js_comments.asp">JS Comments</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_variables.asp">JS Variables</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_operators.asp">JS Operators</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_arithmetic.asp">JS Arithmetic</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_assignment.asp">JS Assignment</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_datatypes.asp">JS Data Types</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_functions.asp">JS Functions</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_objects.asp">JS Objects</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_events.asp">JS Events</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_strings.asp">JS Strings</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_string_methods.asp">JS String Methods</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_numbers.asp">JS Numbers</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_number_methods.asp">JS Number Methods</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_arrays.asp">JS Arrays</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_array_methods.asp">JS Array Methods</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_array_sort.asp">JS Array Sort</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_array_iteration.asp">JS Array Iteration</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_dates.asp">JS Dates</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_date_formats.asp">JS Date Formats</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_date_methods.asp">JS Date Get Methods</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_date_methods_set.asp">JS Date Set Methods</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_math.asp">JS Math</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_random.asp">JS Random</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_booleans.asp">JS Booleans</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_comparisons.asp">JS Comparisons</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_if_else.asp">JS Conditions</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_switch.asp">JS Switch</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_loop_for.asp">JS Loop For</a><br>
<a target="_blank" href="https://www.w3schools.com/js/js_loop_while.asp">JS Loop While</a><br>
<br>
<h3>Assignment 3</h3>
<br>Write Javascript functions that perform the following and displays the results:<br>
<ul>
	<li>Converts inches to centimeters</li>
	<li>Converts miles per hour to kilometers per hour</li>
	<li>Calculates Velocity in meters per second given Distance and Time (hint: v = d/t)</li>
	<li>Given x, solve for y in this formula: y = x<sup>2</sup></li>
</ul>
<br>
<h3>Assignment 4</h3>

<ol>
	<li>Complete all 69 Javascript exercises at <a href="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_variables1" target="_blank">https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_variables1</a><br></li>
	<li>Use the "Show Answer" if you need to.<br></li>
	<li>Make sure you understand each exercise before moving to the next one. Ask if you don't understand.<br></li>
	<li>Repeat the exercises until you can answer them all correctly without looking at the answer.</li>
	<li>Complete the same steps with all 47 PHP exercises at <a href="https://www.w3schools.com/php/exercise.asp" target="_blank">https://www.w3schools.com/php/exercise.asp</a></li>
</ol>


<br><br>




<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


