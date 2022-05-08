<section id="mysql" class="doc-section">
<h2 class="section-title">MySQL</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h4>Create a Database</h4>
<img src="lessons/images/database1.jpg" class="img-responsive">
<br><br>
<h4>Open PHPMyAdmin and Log In</h4>
<img src="lessons/images/database2.jpg" class="img-responsive">
<br><br>
<h4>Create a Table</h4>
<div class="code-block">
<pre><code class="language-markup">CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)</code></pre>

</div><!--//code-block-->
<img src="lessons/images/database3.jpg" class="img-responsive">
<br><br>
<br><br>
<h4>Insert Records</h4>
<img src="lessons/images/database4.jpg" class="img-responsive">





</div>
</div>
</section><!--//doc-section-->


<section id="sql" class="doc-section">
<h2 class="section-title">SQL</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h4>SQL</h4>

SQL is a standard language for storing, manipulating and retrieving data in databases.
<br><br>
You can use SQL in these databases: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres, and other database systems.

<br><br>


<div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Useful Tip:</h4>
                                            <p>CRUD is an acronym for the four basic types of SQL commands:  <strong style="text-decoration:underline;">C</strong>reate, <strong style="text-decoration:underline;">R</strong>ead, <strong style="text-decoration:underline;">U</strong>pdate, <strong style="text-decoration:underline;">D</strong>elete</p>
                                        </div><!--//content-->
                                    </div>



<h4>SELECT Statement (READ)</h4>
<div class="code-block">
<pre><code class="language-markup">SELECT * FROM MyGuests;</code></pre>

</div><!--//code-block-->

<br><br>
<h4>INSERT Statement (CREATE)</h4>
<div class="code-block">
<pre><code class="language-markup">INSERT INTO MyGuests (firstname, lastname, email) VALUES ("value-1","value-2","value-3");</code></pre>

</div><!--//code-block-->

<br><br>
<h4>UPDATE Statement</h4>
<div class="code-block">
<pre><code class="language-markup">UPDATE MyGuests SET firstname = 'Alfred', lastname = 'Schmidt' WHERE id = 1;</code></pre>

</div><!--//code-block-->

<br><br>
<h4>DELETE Statement</h4>
<div class="code-block">
<pre><code class="language-markup">DELETE FROM MyGuests WHERE id = 5;</code></pre>

</div><!--//code-block-->




























</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Create the DATABASE 'jaxcode<?=$_SESSION['student_id']?>' with username  and password the same as your WebFaction login.</li>
	<li>Create TABLE 'MyGuests' with these fields: id, firstname, lastname, email, reg_date<br>Add 10 records<br>Try SQL Statements for CRUD</li>
	<li>Restore this data dump to your database: <a href="lessons/data.txt" target="_blank">data.txt</a></li>
</ol>

</div>
</div>
</section><!--//doc-section-->


