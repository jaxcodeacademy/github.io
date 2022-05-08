<? 
session_start();
$breadcrumb = 'Syllabus';
$bodycolor = "body-blue";
include 'header.php'; 
?>

<div class="container"><div class="row"><div class="col-md-12">

<h1>SQL Injection</h1>

SQL injection examples<br>
There are a wide variety of SQL injection vulnerabilities, attacks, and techniques, which arise in different situations. Some common SQL injection examples include:
<br><br>
<ul>
	<li><strong>Retrieving hidden data</strong>, where you can modify an SQL query to return additional results.</li>
	<li><strong>Subverting application logic</strong>, where you can change a query to interfere with the application's logic.</li>
	<li><strong>UNION attacks</strong>, where you can retrieve data from different database tables.</li>
	<li><strong>Examining the database</strong>, where you can extract information about the version and structure of the database.</li>
	<li><strong>Blind SQL injection</strong>, where the results of a query you control are not returned in the application's responses.</li>
</ul>


================

<h3>Retrieving hidden data</h3>

Consider a shopping application that displays products in different categories. When the user clicks on the Gifts category, their browser requests the URL:
<br><br>
https://insecure-website.com/products?category=Gifts
<br><br>
This causes the application to make an SQL query to retrieve details of the relevant products from the database:
<br><br>
SELECT * FROM products WHERE category = 'Gifts' AND released = 1
<br><br>
This SQL query asks the database to return:
<br><br>
all details (*)
from the products table
where the category is Gifts
and released is 1.
The restriction released = 1 is being used to hide products that are not released. For unreleased products, presumably released = 0.
<br><br>
The application doesn't implement any defenses against SQL injection attacks, so an attacker can construct an attack like:
<br><br>
https://insecure-website.com/products?category=Gifts'--
<br><br>
This results in the SQL query:
<br><br>
SELECT * FROM products WHERE category = 'Gifts'--' AND released = 1
<br><br>
The key thing here is that the double-dash sequence -- is a comment indicator in SQL, and means that the rest of the query is interpreted as a comment. This effectively removes the remainder of the query, so it no longer includes AND released = 1. This means that all products are displayed, including unreleased products.
<br><br>
Going further, an attacker can cause the application to display all the products in any category, including categories that they don't know about:
<br><br>
https://insecure-website.com/products?category=Gifts'+OR+1=1--
<br><br>
This results in the SQL query:
<br><br>
SELECT * FROM products WHERE category = 'Gifts' OR 1=1--' AND released = 1
<br><br>
The modified query will return all items where either the category is Gifts, or 1 is equal to 1. Since 1=1 is always true, the query will return all items.
<br><br>

<strong>Lab</strong><br><br>

https://ac3a1f351f6c5ab9816968fc000f0055.web-security-academy.net/filter?category=Gifts
<br><br>
https://ac3a1f351f6c5ab9816968fc000f0055.web-security-academy.net/filter?category=Gifts'+OR+1=1--
<br><br>


================
<br><br>
<h3>Subverting application logic</h3><br><br>
Consider an application that lets users log in with a username and password. If a user submits the username wiener and the password bluecheese, the application checks the credentials by performing the following SQL query:
<br><br>
SELECT * FROM users WHERE username = 'wiener' AND password = 'bluecheese'
<br><br>
If the query returns the details of a user, then the login is successful. Otherwise, it is rejected.
<br><br>
Here, an attacker can log in as any user without a password simply by using the SQL comment sequence -- to remove the password check from the WHERE clause of the query. For example, submitting the username administrator'-- and a blank password results in the following query:
<br><br>
SELECT * FROM users WHERE username = 'administrator'--' AND password = ''
<br><br>
This query returns the user whose username is administrator and successfully logs the attacker in as that user.
<br><br>
<strong>Lab</strong>
<br><br>
https://acd01ff01f7d2e8680fa596100ae0008.web-security-academy.net/
<br><br>
Enter username as administrator'--
Enter a single letter as the password
<br><br>
================
<br><br>
<h3>Retrieving data from other database tables</h3>

In cases where the results of an SQL query are returned within the application's responses, an attacker can leverage an SQL injection vulnerability to retrieve data from other tables within the database. This is done using the UNION keyword, which lets you execute an additional SELECT query and append the results to the original query.
<br><br>
For example, if an application executes the following query containing the user input "Gifts":
<br><br>
SELECT name, description FROM products WHERE category = 'Gifts'
<br><br>
then an attacker can submit the input:
<br><br>
' UNION SELECT username, password FROM users--
<br><br>
This will cause the application to return all usernames and passwords along with the names and descriptions of products.
<br><br>


================
<br><br>
<h3>Examining the database</h3>

Following initial identification of an SQL injection vulnerability, it is generally useful to obtain some information about the database itself. This information can often pave the way for further exploitation.
<br><br>
You can query the version details for the database. The way that this is done depends on the database type, so you can infer the database type from whichever technique works. For example, on Oracle you can execute:
<br><br>
SELECT * FROM v$version
<br><br>
You can also determine what database tables exist, and which columns they contain. For example, on most databases you can execute the following query to list the tables:
<br><br>
SELECT * FROM information_schema.tables
<br><br>
================
<br><br>
<h3>Blind SQL injection vulnerabilities</h3>

Many instances of SQL injection are blind vulnerabilities. This means that the application does not return the results of the SQL query or the details of any database errors within its responses. Blind vulnerabilities can still be exploited to access unauthorized data, but the techniques involved are generally more complicated and difficult to perform.
<br><br>
Depending on the nature of the vulnerability and the database involved, the following techniques can be used to exploit blind SQL injection vulnerabilities:
<br><br>
You can change the logic of the query to trigger a detectable difference in the application's response depending on the truth of a single condition. This might involve injecting a new condition into some Boolean logic, or conditionally triggering an error such as a divide-by-zero.<br>
You can conditionally trigger a time delay in the processing of the query, allowing you to infer the truth of the condition based on the time that the application takes to respond.
You can trigger an out-of-band network interaction, using OAST techniques. This technique is extremely powerful and works in situations where the other techniques do not. Often, you can directly exfiltrate data via the out-of-band channel, for example by placing the data into a DNS lookup for a domain that you control.
<br><br>


================
<br><br>
<h3>How to prevent SQL injection</h3>

Most instances of SQL injection can be prevented by using parameterized queries (also known as prepared statements) instead of string concatenation within the query.
<br><br>
The following code is vulnerable to SQL injection because the user input is concatenated directly into the query:
<br><br>
String query = "SELECT * FROM products WHERE category = '"+ input + "'";
<br><br>
Statement statement = connection.createStatement();
<br><br>
ResultSet resultSet = statement.executeQuery(query);
<br><br>
This code can be easily rewritten in a way that prevents the user input from interfering with the query structure:
<br><br>
PreparedStatement statement = connection.prepareStatement("SELECT * FROM products WHERE category = ?");
<br><br>
statement.setString(1, input);
<br><br>
ResultSet resultSet = statement.executeQuery();
<br><br>
Parameterized queries can be used for any situation where untrusted input appears as data within the query, including the WHERE clause and values in an INSERT or UPDATE statement. They can't be used to handle untrusted input in other parts of the query, such as table or column names, or the ORDER BY clause. Application functionality that places untrusted data into those parts of the query will need to take a different approach, such as white-listing permitted input values, or using different logic to deliver the required behavior.
<br><br>
For a parameterized query to be effective in preventing SQL injection, the string that is used in the query must always be a hard-coded constant, and must never contain any variable data from any origin. Do not be tempted to decide case-by-case whether an item of data is trusted, and continue using string concatenation within the query for cases that are considered safe. It is all too easy to make mistakes about the possible origin of data, or for changes in other code to violate assumptions about what data is tainted.
<br><br>

</div>   </div> </div>    









<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 