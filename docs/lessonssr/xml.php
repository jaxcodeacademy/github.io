<section id="ajax" class="doc-section">
<h2 class="section-title">XML</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
<ul>
	<li>XML stands for eXtensible Markup Language.</li>

	<li>XML was designed to store and transport data.</li>

	<li>XML was designed to be both human- and machine-readable.</li>
</ul>

<h3>XML Tree Structure</h3>
<ul>
	<li>XML documents are formed as element trees.</li>

	<li>An XML tree starts at a root element and branches from the root to child elements.</li>

	<li>All elements can have sub elements (child elements):</li>
</ul>


<div class="code-block">
<pre><code class="language-markup">&lt;root&gt;
  &lt;child&gt;
    &lt;subchild&gt;.....&lt;/subchild&gt;
  &lt;/child&gt;
&lt;/root&gt;</code></pre>
</div><!--//code-block-->

<div class="code-block">
<pre><code class="language-markup">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;breakfast_menu&gt;
&lt;food&gt;
    &lt;name&gt;Belgian Waffles&lt;/name&gt;
    &lt;price&gt;$5.95&lt;/price&gt;
    &lt;description&gt;
   Two of our famous Belgian Waffles with plenty of real maple syrup
   &lt;/description&gt;
    &lt;calories&gt;650&lt;/calories&gt;
&lt;/food&gt;
&lt;food&gt;
    &lt;name&gt;Strawberry Belgian Waffles&lt;/name&gt;
    &lt;price&gt;$7.95&lt;/price&gt;
    &lt;description&gt;
    Light Belgian waffles covered with strawberries and whipped cream
    &lt;/description&gt;
    &lt;calories&gt;900&lt;/calories&gt;
&lt;/food&gt;
&lt;food&gt;
    &lt;name&gt;Berry-Berry Belgian Waffles&lt;/name&gt;
    &lt;price&gt;$8.95&lt;/price&gt;
    &lt;description&gt;
    Belgian waffles covered with assorted fresh berries and whipped cream
    &lt;/description&gt;
    &lt;calories&gt;900&lt;/calories&gt;
&lt;/food&gt;
&lt;food&gt;
    &lt;name&gt;French Toast&lt;/name&gt;
    &lt;price&gt;$4.50&lt;/price&gt;
    &lt;description&gt;
    Thick slices made from our homemade sourdough bread
    &lt;/description&gt;
    &lt;calories&gt;600&lt;/calories&gt;
&lt;/food&gt;
&lt;food&gt;
    &lt;name&gt;Homestyle Breakfast&lt;/name&gt;
    &lt;price&gt;$6.95&lt;/price&gt;
    &lt;description&gt;
    Two eggs, bacon or sausage, toast, and our ever-popular hash browns
    &lt;/description&gt;
    &lt;calories&gt;950&lt;/calories&gt;
&lt;/food&gt;
&lt;/breakfast_menu&gt;</code></pre>
</div><!--//code-block-->


<h3>XML Attributes</h3>

XML elements can have attributes, just like HTML. Attributes are designed to contain data related to a specific element.

Example with gender attribute:


<div class="code-block">
<pre><code class="language-markup">&lt;person gender="female"&gt;
  &lt;firstname&gt;Anna&lt;/firstname&gt;
  &lt;lastname&gt;Smith&lt;/lastname&gt;
&lt;/person&gt;</code></pre>
</div><!--//code-block-->

<div class="section-block">
<div class="callout-block callout-info">
<div class="icon-holder">
<i class="fa fa-info-circle"></i>
</div><!--//icon-holder-->
<div class="content">
<h4 class="callout-title">FYI</h4>
<p>How do you determine if data should be an element or an attribute? The rule of thumb is: if you want to display the data, make it an element. If you do not want to display the data, make it an attribute.</p>
</div><!--//content-->
</div><!--//callout-block-->


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
A. <br>
1. Write a PHP script that uses fopen(), fread(), fwrite() and turns the list of books below into an XML file with a root of 'bookstore' and gives each element a fake ISBN as a parameter. Hint: create an ISBN using PHP rand() function, ie: ISBN="163673685-0"
<br><br>
Some helpful code that loops through a "flat-file" database line by line:
<div class="code-block">
<pre><code class="language-markup">&lt;?php
$file = fopen("books.txt","r");
while(! feof($file))
  {
  echo fgets($file). "&lt;br /&gt;";
  }
fclose($file);
?&gt;</code></pre>
</div><!--//code-block-->


<div class="code-block"><pre><code class="language-markup">$new = preg_replace("/\"/", "", fgets($file));</code></pre>
</div><!--//code-block-->

<div class="code-block">
<pre><code class="language-markup">&lt;?php
$str = "Hello world. It's a beautiful day.";
$pieces = explode(" ",$str);
?&gt;</code></pre>
</div><!--//code-block-->

B.<br>
Copy your output to a file and name it bookstore.xml. <br>
Put this code at the very beginning of bookstore.xml: <code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;</code><br> Upload to Web Faction and view it in your browser.<br><br>
C.<br>
Modify your script from section A to write to a file called bookstore.xml.<br> Don't forget to add <code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;</code>


<h3>Assignment 2</h3>
2. Extend your PHP script to output the XML with a CREATE TABLE SQL command that allows the data to be imported to a database.

<h3>Assignment 3</h3>
3. Group Project: Output the booklist as binary using ASCII.
<br><br>


<h3>100 books everyone should read before they die</h3>
 
"To Kill a Mockingbird" by Harper Lee<br>
"Pride and Prejudice" by Jane Austen<br>
"The Diary of Anne Frank" by Anne Frank<br>
"1984" by George Orwell<br>
Harry Potter and the Sorcerer's Stone" by J.K. Rowling<br>
"The Lord of the Rings" (1-3) by J.R.R. Tolkien<br>
"The Great Gatsby" by F. Scott Fitzgerald<br>
"Charlotte's Web" by E.B. White<br>
"The Hobbit" by J.R.R. Tolkien<br>
"Little Women" by Louisa May Alcott<br>
"Fahrenheit 451" by Ray Bradbury<br>
"Jane Eyre" by Charlotte Bronte<br>
"Animal Farm" by George Orwell<br>
"Gone with the Wind" by Margaret Mitchell<br>
"The Catcher in the Rye" by J.D. Salinger<br>
"The Book Thief" by Markus Zusak<br>
"The Adventures of Huckleberry Finn" by Mark Twain<br>
"The Hunger Games" by Suzanne Collins<br>
"The Help" by Kathryn Stockett<br>
"The Lion, the Witch, and the Wadrobe" by C.S. Lewis<br>
"The Grapes of Wrath" by John Steinbeck<br>
"The Lord of the Flies" by William Golding<br>
"The Kite Runner" by Khaled Hosseini<br>
"Night" by Elie Wiesel<br>
"Hamlet" by William Shakespeare<br>
"A Wrinkle in Time" by Madeleine L'Engle<br>
"Of Mice and Men" by John Steinbeck<br>
"A Tale of Two Cities" by Charles Dickens<br>
"Romeo and Juliet" by William Shakespeare<br>
"The Hitchhikers Guide to the Galaxy" by Douglas Adams<br>
"The Secret Garden" by Frances Hodgson Burnett<br>
"A Christmas Carol" by Charles Dickens<br>
"The Little Prince" by Antoine de Saint-Exup&eacute;ry<br>
"Brave New World" by Aldous Huxley<br>
"Harry Potter and the Deathly Hallows" by J.K. Rowling<br>
"The Giver" by Lois Lowry<br>
"The Handmaid's Tale" by Margaret Atwood<br>
"Where the Sidewalk Ends" by Shel Silverstein<br>
"Wuthering Heights" Emily Bronte<br>
"The Fault in Our Stars" by John Green<br>
"Anne of Green Gables" by L.M. Montgomery<br>
"The Adventures of Tom Sawyer" by Mark Twain<br>
"Macbeth" by William Shakespeare<br>
"The Girl with a Dragon Tattoo" by Stieg Larrson<br>
"Frankenstein" by Mary Shelley<br>
"The Holy Bible: King James Version"<br>
"The Color Purple" by Alice Walker<br>
"The Count of Monte Cristo" by Alexandre Dumas<br>
"A Tree Grows in Brooklyn" by Betty Smith<br>
"East of Eden" by John Steinbeck<br>
"Alice in Wonderland" by Lewis Carroll<br>
"In Cold Blood" by Truman Capote<br>
"Catch-22" by Joseph Heller<br>
"The Stand" by Stephen King<br>
"Outlander" by Diana Gabaldon<br>
"Harry Potter and the Prisoner of Azkaban" by J.K. Rowling<br>
"Enders Game" by Orson Scott Card<br>
"Anna Karenina" by Leo Tolstoy<br>
"Watership Down" by Richard Adams<br>
"Memoirs of a Geisha" by Arthur Golden<br>
"Rebecca" by Daphne du Maurier<br>
"A Game of Thrones" by George R.R. Martin<br>
"Great Expectations" by Charles Dickens<br>
"The Old Man and the Sea" by Ernest Hemingway<br>
"The Adventures of Sherlock Holmes" (#3) by Arthur Conan Doyle<br>
"Les Mis&eacute;rables" by Victor Hugo<br>
"Harry Potter and the Half-Blood Prince" by J.K. Rowling<br>
"Life of Pi" by Yann Martel<br>
"The Scarlet Letter" by Nathaniel Hawthorne<br>
"Celebrating Silence: Excerpts from Five Years of Weekly Knowledge" by Sri Sri Ravi Shankar<br>
"The Chronicles of Narnia" by C.S. Lewis<br>
"The Pillars of the Earth" by Ken Follett<br>
"Catching Fire" by Suzanne Collins<br>
"Charlie and the Chocolate Factory" by Roald Dahl<br>
"Dracula" by Bram Stoker<br>
"The Princess Bride" by William Goldman<br>
"Water for Elephants" by Sara Gruen<br>
"The Raven" by Edgar Allan Poe<br>
"The Secret Life of Bees" by Sue Monk Kidd<br>
"The Poisonwood Bible: A Novel" by Barbara Kingsolver<br>
"One Hundred Years of Solitude" by Gabriel Garc&iacute;a M&aacute;rquez<br>
"The Time Traveler's Wife" by Audrey Niffenegger<br>
"The Odyssey" by Homer<br>
"The Good Earth (House of Earth #1)" by Pearl S. Buck<br>
"Mockingjay (Hunger Games #3)" by Suzanne Collins<br>
"And Then There Were None" by Agatha Christie<br>
"The Thorn Birds" by Colleen McCullough<br>
"A Prayer for Owen Meany" by John Irving<br>
"The Glass Castle" by Jeannette Walls<br>
"The Immortal Life of Henrietta Lacks" by Rebecca Skloot<br>
"Crime and Punishment" by Fyodor Dostoyevsky<br>
"The Road" by Cormac McCarthy<br>
"The Things They Carried" by Tim O'Brien<br>
"Siddhartha" by Hermann Hesse<br>
"Beloved" by Toni Morrison<br>
"Slaughterhouse-Five" by Kurt Vonnegut<br>
"Cutting For Stone" by Abraham Verghese<br>
"The Phantom Tollbooth" by Norton Juster<br>
"The Brothers Karamazov" by Fyodor Dostoyevsky<br>
"The Story of My Life" by Helen Keller<br>
<br><br>


<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


