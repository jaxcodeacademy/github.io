<section id="phpbasics" class="doc-section">
<h2 class="section-title">React</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
sftp://mdilab:@mdidealab.com/webapps/jaxcode/docs/lessons/phpbasics.php
<h4>PHP Create File - fopen()</h4>
<p>The example below creates a new file called "newfile.txt". The file will be created in the same directory where the PHP code resides:</p>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">fopen("newfile.html", "w");</code></pre>
</div><!--/code-block-->


<h4>PHP Write to File - fwrite()</h4>
<p>
The fwrite() function is used to write to a file.<br>
<br>
The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.<br>
<br>
The example below writes a names into a new file called "newfile.html":<br>
</p>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">$myfile = fopen("newfile.html", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);</code></pre>
</div><!--/code-block-->


<h4>Heredoc</h4>
<p>In order to allow people to easily write large amounts of text from within PHP, but without the need to constantly escape things, heredoc syntax was developed. Heredoc might be a little tricky to understand at first, but it's actually a big help. Put simply, it allows you to define your own string limiter so that you can make it something other than a double or single quote. So, for example, we could use the string "EOT" (end of text) for our delimiter, meaning that we can use double quotes and single quotes freely within the body of the text - the string only ends when we type EOT.</p>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">$mystring = &lt;&lt;&lt;EOT
This is some PHP text.
It is completely free
I can use "double quotes"
and 'single quotes',
plus $variables too, which will
be properly converted to their values. 
EOT;
</code></pre>
</div><!--/code-block-->

<h4>The PHP while Loop</h4>
<p>
The while loop executes a block of code as long as the specified condition is true.
</p>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">$x = 1; 

while($x &lt;= 5) {
    echo "The number is: $x &lt;br&gt;";
    $x++;
} </code></pre>
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
Build a 100 page website about the numbers 1 to 100.
<ul>
	<li>Create a folder named 'numbers' and put your files in there.  Upload to Web Faction</li>
	<li>Each number should have it's own page.</li>
	<li>The pages should be constructed by an index.php page that generates the 100 pages.</li>
	<li>All pages should go into a new folder named 'pages'.</li>
	<li>Each page should display the number and the result of the number multiplied by itself.</li>
	<li>Each page should have a navigation to go to the other pages.</li>
</ul>

</li>
<li>Build a 51 page website displaying all 50 States using an array of States. 
<ul>
	<li>The 51st page will be an index.php that displays all state flags with the name of the State underneath the flag. Each flag and name must link to its page.</li>
	<li>Each State must have it's own page.</li>
	<li>Each page must have a link back to the index page.</li>
	<li>Each State page must display its State Flag.</li>
	<li>Each page must link to its Wikipedia page.</li>
	


</ul>


</li>
</ol>
<br><br>
<h6>Wikipedia: List of States</h6>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">https://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States</code></pre>
</div><!--/code-block-->

<h6>Array of States</h6>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");</code></pre>
</div><!--/code-block-->


<h6>State Flags Link</h6>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">http://lesson.jaxcode.webfactional.com/stateflags/Alabama.svg.png</code></pre>
</div><!--/code-block-->




</div>
</div>
</section><!--//doc-section-->


