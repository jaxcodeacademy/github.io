<section id="https" class="doc-section">
<h2 class="section-title">Secure Sites (HTTPS)</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->

You can configure any website record to use HTTPS (Hypertext Transfer Protocol Secure), an encrypted alternative to an ordinary HTTP connection.
<br><br>
An HTTPS website requires an SSL/TLS certificate. By default, HTTPS websites will use WebFaction's shared certificate. Alternately, you can use Web Faction's control panel to generate a free certificate using Let's Encrypt or even bring your own, issued by another SSL certificate issuer.

<h4>Create a Secure Site</h4>

<ol>
	<li>Enable SSL: log into Webfaction --> Websites</li>
	<li>Pick a website and apply a Let's Encrypt SSL certificate</li>
	<li>Create a redirect site (see next section)</li>
</ol>




<h4>Redirecting from HTTP to HTTPS</h4>

If a site is only available over HTTPS, then use this method to automatically redirect from <code>http://domain</code> to <code>https://domain</code>:
<ol>
<li>Create website with a static application for redirecting incoming requests.

<ol>
	<li>Log in to the control panel.</li>

	<li>Click Domains / websites --> Websites. The list of websites appears.</li>

	<li>Click the Add new website button. The Create a new website form appears.</li>

	<li>In the Name field, enter a website name.</li>

	<li>If applicable, in the Machine menu, click to select the server to host the website.</li>

	<li>If applicable, in the IP address menu, click to select the IP address to serve the site.</li>

	<li>For each domain name you want to redirect from HTTP to HTTPS, add it to the list of domains. In the Domains field, enter the domain name. Enter one or more domain names. If the domain has not yet been added to the control panel, click the Create link that appears at the bottom of the list of domains to add it.</li>
	
	
	<li>Click Add an application --> Create a new application. The Create a new web app form appears.</li>

	<li>In the Name field, enter a name for the application.</li>

	<li>In the App category menu, click to select Static.</li>

	<li>In the App type menu, click to select Static/CGI/PHP-5.6.</li>

	<li>Click the Save button. The application is installed and added to website's list of applications.</li>

	<li>Click the Save button. The website is created and added to the list of websites.</li>
</ol>
</li>
<li>
Add the redirect rule.
	<ol>
	<li>In a text editor, open ~/webapps/app_name/.htaccess, where app_name is the name of the new Static/CGI/PHP application.</li>

	<li>Append the following lines:
	<div class="code-block">
<pre><code class="language-markup">RewriteEngine On
RewriteCond %{HTTP:X-Forwarded-SSL} !on
RewriteCond %{REQUEST_URI} !^/(.well-known)(/|$)
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]</code></pre>
</div><!--//code-block-->
	
	
	</li>

	<li>Save and close the file.</li>
	</li>
</ol>



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
Secure one of your sites with a Let's Encrypt SSL certificate
<br><br>




<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


