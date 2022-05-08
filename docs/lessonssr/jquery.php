<section id="jquery" class="doc-section">
<h2 class="section-title">JQuery</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->

The jQuery library is a single JavaScript file, and you reference it with the HTML <code>&lt;script&gt;</code> tag (notice that the <code>&lt;script&gt;</code> tag should be inside the <code>&lt;head&gt;</code> section):
<div class="code-block">
<pre><code class="language-markup">&lt;head&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;</code></pre>
</div><!--//code-block-->


With jQuery you select (or "query") HTML elements and perform "actions" on them.
<br><br>
Basic syntax is: <code>$(selector).action()</code>

<ul>
	<li>A $ sign to define/access jQuery</li>
	<li>A (selector) to "query (or find)" HTML elements</li>
	<li>A jQuery action() to be performed on the element(s)</li>
</ul>
<br>

Examples:<br>

<code>$(this).hide()</code> - hides the current element.<br><br>

<code>$("p").hide()</code> - hides all &lt;p&gt; elements.<br><br>

<code>$(".test").hide()</code> - hides all elements with class="test".<br><br>

<code>$("#test").hide()</code> - hides the element with id="test".<br><br>


<div class="code-block">
jQuery methods go inside a document ready event. This is to prevent any jQuery code from running before the document is finished loading (is ready).
<pre><code class="language-markup">$(document).ready(function(){

  // jQuery methods go here...
  $("p").hide();

});
</code></pre>
</div><!--//code-block-->



<div class="code-block">The JQuery document ready event can be shortened:
<pre><code class="language-markup">$(function(){

  // jQuery methods go here...
  $("p").hide();

});
</code></pre>
</div><!--//code-block-->


Example


<div class="code-block">
When a user clicks on a button, all &lt;p&gt; elements will be hidden:
<pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide();
  });
});
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h2&gt;This is a heading&lt;/h2&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;p&gt;This is another paragraph.&lt;/p&gt;

&lt;button&gt;Click me to hide paragraphs&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<a href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_hide_p" target="_blank" class="btn btn-info" style="color:#ffffff;">Try it</a>
</div><!--//code-block-->

<div class="table-responsive">
<table class="table table-hover table-striped">
<tr>
<th style="width:25%">Syntax</th>
<th style="width:65%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>$(&quot;*&quot;)</td>
<td>Selects all elements</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_all2">Try it</a></td>
</tr>
<tr>
<td>$(this)</td>
<td>Selects the current HTML element</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_this">Try it</a></td>
</tr>
<tr>
<td>$(&quot;p.intro&quot;)</td>
<td>Selects all &lt;p&gt; elements with class=&quot;intro&quot;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_pclass">Try it</a></td>
</tr>
<tr>
<td>$(&quot;p:first&quot;)</td>
<td>Selects the first &lt;p&gt; element</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_pfirst">Try it</a></td>
</tr>
<tr>
<td>$(&quot;ul li:first&quot;)</td>
<td>Selects the first &lt;li&gt; element of the first &lt;ul&gt;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_ullifirst">Try it</a></td>
</tr>
<tr>
<td>$(&quot;ul li:first-child&quot;)<br>
$(&quot;ul li:nth-child(2)&quot;).hide();</td>
<td>Selects the first &lt;li&gt; element of every &lt;ul&gt;<br>
Selects the 2nd &lt;li&gt; element of every &lt;ul&gt;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_ullifirstchild">Try it</a></td>
</tr>
<tr>
<td>$(&quot;[href]&quot;)</td>
<td>Selects all elements with an href attribute</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_hrefattr">Try it</a></td>
</tr>
<tr>
<td>$(&quot;a[target='_blank']&quot;)</td>
<td>Selects all &lt;a&gt; elements with a target attribute value equal to &quot;_blank&quot;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_hrefattrblank">Try it</a></td>
</tr>
<tr>
<td>$(&quot;a[target!='_blank']&quot;)</td>
<td>Selects all &lt;a&gt; elements with a target attribute value NOT equal to &quot;_blank&quot;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_hrefattrnotblank">Try it</a></td>
</tr>
<tr>
<td>$(&quot;:button&quot;)</td>
<td>Selects all &lt;button&gt; elements and &lt;input&gt; elements of type=&quot;button&quot;</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_button2">Try it</a></td>
</tr>
<tr>
<td>$(&quot;tr:even&quot;)</td>
<td>Selects all even &lt;tr&gt; elements</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_even">Try it</a></td>
</tr>
<tr>
<td>$(&quot;tr:odd&quot;)</td>
<td>Selects all odd &lt;tr&gt; elements</td>
<td><a target="_blank" class="btn btn-info" style="color:#ffffff;" href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_sel_odd">Try it</a></td>
</tr>
</table>
</div>

<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->




<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h3>Assignment 1</h3>
<br>
Complete the <a href="https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_selectors1" target="_blank">JQuery exercises at W3schools <i class="glyphicon glyphicon-share-alt"></i></a>

<br><br>




<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


