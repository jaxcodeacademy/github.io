<section id="phpdate" class="doc-section">
<h2 class="section-title">PHP Date Function</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<p><a href="https://www.w3schools.com/php/php_date.asp" target="_blank">W3Schools Reference</a><br><br>
The PHP date() function is used to format a date and/or a time.
<br><br>
The required format parameter of the date() function specifies how to format the date (or time).<br>
<br>
Here are some characters that are commonly used for dates:<br>
<br>
d - Represents the day of the month (01 to 31)<br>
m - Represents a month (01 to 12)<br>
Y - Represents a year (in four digits)<br>
l (lowercase 'L') - Represents the day of the week<br>
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.<br>
<br>
<div class="alert alert-info" role="alert">
  <a href="https://www.w3schools.com/php/func_date_date.asp" target="_blank">Full List of parameters at W3Schools</a>
</div>

<br>
The example below formats today's date in three different ways:<br>
</p>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
</code></pre>
</div><!--/code-block-->


Here are some characters that are commonly used for times:<br>
<br>
h - 12-hour format of an hour with leading zeros (01 to 12)<br>
i - Minutes with leading zeros (00 to 59)<br>
s - Seconds with leading zeros (00 to 59)<br>
a - Lowercase Ante meridiem and Post meridiem (am or pm)<br><br>
The example below outputs the current time in the specified format:<br>


</p>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">echo "The time is " . date("h:i:sa");
</code></pre>
</div><!--/code-block-->

<div class="alert alert-danger" role="alert">
  <strong>Warning!</strong> Note that the PHP date() function will return the current date/time of the server!
</div>

If the time you got back from the code is not the right time, it's probably because your server is in another country or set up for a different timezone.<br><br>

So, if you need the time to be correct according to a specific location, you can set a timezone to use.<br><br>

The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:<br>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
</code></pre>
</div><!--/code-block-->

<div class="alert alert-info" role="alert">
<strong>Resource</strong>: <a href="http://php.net/manual/en/timezones.php" target="_blank">PHP Supported Timezones</a>
</div>

The example below displays the hour in Military Time:<br>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">date_default_timezone_set("America/New_York");
echo date("H");
</code></pre>
</div><!--/code-block-->
Display hour in Military Time without leading '0':
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">date_default_timezone_set("America/New_York");
echo date("G");
</code></pre>
</div><!--/code-block-->
<br>
<img src="lessons/images/militarytime.jpg" style="width:500px;">
<br><br>
<h2>Getting day/time other than current day/time</h2<

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">echo date("F",strtotime("-1 month"));
</code></pre>
</div><!--/code-block-->



</div>
</div>
</section><!--//doc-section-->

<section id="switchstatement" class="doc-section">
<h2 class="section-title">Switch Statement</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<hr>

<h2>PHP Switch Statement</h2>
<p>
The switch statement is used to perform different actions based on different conditions.
</p>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}</code></pre>
</div><!--/code-block-->




</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<ol>
<li>
A client has their business hours on their website and asks that you write code to make the current day with hours highlighted. If they are not open, display a message in red that says 'We Are Currently Closed.'

<h3>Hours:</h3>
Sunday	8AM - 9PM<br>
Monday	8AM - 9PM<br>
Tuesday	8AM - 9PM<br>
Wednesday 8AM - 9PM<br>
Thursday 8AM - 9PM<br>
Friday	8AM - 9PM<br>
Saturday	8AM - 9PM<br><br>


</li>
<li>
A same client would like a message to display on their website automatically each month based on the following list:
<br><br>
January - Happy Birthday MLK<br>
February - Happy Valentine's Day<br>
March - Happy St. Patrick's Day<br>
April - Happy Easter<br>
May - Happy Mother's Day<br>
June - Happy Father's day<br>
July - Happy Independence Day<br>
August - Welcome Back to School<br>
September - Happy Labor Day<br>
October - Happy Halloween<br>
November - Happy Thanksgiving<br>
December - Merry Christmas<br><br>
</li>

<li>
A client has their business hours on their website and asks that you write code to make the current day with hours highlighted. If they are not open, display a message in red that says 'We Are Currently Closed.'

<h3>Hours:</h3>
Sunday	Closed<br>
Monday	10AM - 9PM<br>
Tuesday	8AM - 9PM<br>
Wednesday 8AM - 9PM<br>
Thursday 8AM - 9PM<br>
Friday	8AM - 5PM<br>
Saturday Closed<br><br>
They are also closed on the following holidays:
<br><br>
January 21 - MLK<br>
February 4 - Valentine's Day<br>
March 17 - St. Patrick's Day<br>
April 21 - Happy Easter<br>
May 12 - Mother's Day<br>
June 16 - Father's day<br>
July 4 - Independence Day<br>
August 21 - Back to School<br>
September 2 - Labor Day<br>
October 31 - Halloween<br>
November 28 - Thanksgiving<br>
December 25 - Christmas<br><br>

</li>

</ol>







</div>
</div>
</section><!--//doc-section-->


