<section id="phpbasics" class="doc-section">
<h2 class="section-title">Procedural vs Object Oriented Programming</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<h4>Procedural Programming</h4>
<p>You've been coding Procedurally. What that means is you program in a sequence or step by step fashion</p>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">main program:
   ======================
   ======================
   ======================
   if ===================
      ===================
      ===================
      ===================
   ======================
   ======================
   ======================
   while ================
      ===================
      ===================
      ===================
      ===================
   ======================
   ======================
   ======================
   ======================
   ======================
   for ==================
      ===================
      ===================
      ===================
   ======================
   ======================
   ======================
   ======================
   if ===================
      ===================
      ===================
      ===================
   else =================
      ===================
      ===================
      ===================
   ======================
   ======================
   ======================
...</code></pre>
</div><!--/code-block-->

<p>But this can start to get out of hand. You can find yourself if/else'ing like crazy. That's why you realize you have to start creating functions that you call and reuse. All these functions are known as procedures and hence the name Procedural Programming. 

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">main program:
   ======================
   ======================
   ======================
   ======================
   ======================
   if ===================
      ===================
      ===================
   function function1($color) {
   ======================
   ======================
   ======================

   ======================
   ======================
   while ================
      ===================
      ===================
   ======================
   ======================
   function1("blue");
   ======================
   ======================
   ======================
function function2() {
   ======================
   ======================
   ======================
function function3($ride) {
   if ===================
      ===================
      ===================
 function3("car");
   ======================
   ======================
   ======================
function function4():
   ======================
   ======================
   return ===============</code></pre>
</div><!--/code-block-->

<p>This is a vast improvement on the original code base. However, as the program continues to grow in size, even this could get out of hand. We can ameliorate the situation by introducing the idea of modules. A module is simply a collection of functions and a data structure that these functions operate on. Generally, a module represents a cohesive abstraction of some sort - the data structure stands alone as something meaningful and the collection of functions sort of belongs together with it. Now, our code looks like this:</p>


<h4>Object Oriented Programming</h4>
<p>
Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data, in the form of fields, and code, in the form of procedures. A feature of objects is an object's procedures that can access and often modify the data fields of the object with which they are associated.<br>
<br>
Sample OOP Program
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">&lt;?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this-&gt;name = $name;
  }
  function get_name() {
    return $this-&gt;name;
  }
}
?&gt;</code></pre>
</div><!--/code-block-->


<h4>Calling: Procedural vs OOP</h4>


<strong>Procedural</strong>
<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">function myfunction($x) {
some code...
}

myfunction($color);</code></pre>
</div><!--/code-block-->



<strong>OOP Terms</strong>:<br>
Object<br>
Classes<br>
Instantiation<br>
Methods<br>
Properties<br>

<!-- code block -->
<div class="code-block">
<pre><code class="language-markup">
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($fruit) {
    $this->name = $fruit;
  }
  
  function set_color($color) {
    $this->color = $color;
  }
  
  function get_name() {
    return $this->name;
  }
  
  function get_color() {
    return $this->color;
  }
  
}

$apple = new Fruit();
$apple->set_name('Banana');
echo $apple->get_name();
echo " is ";
$apple->set_color('Yellow');
echo $apple->get_color();</code></pre>
</div><!--/code-block-->


<h4>Comparing the Pieces</h4>

<table class="table table-bordered">
<tr>
<th>Procedural</th>
<th class="text-center">is the same as
<th>OOP</th>
</tr>
<tr>

<td>Functions</td>
<td class="text-center"> = </td>
<td>Methods</td>
</tr>
<tr>
<td>Variables</td>
<td class="text-center"> = </td>
<td>Properties</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>

</table>




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

</li>
<li>


</li>
</ol>





</div>
</div>
</section><!--//doc-section-->


