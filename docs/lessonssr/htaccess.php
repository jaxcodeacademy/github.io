<section id="htaccess" class="doc-section">
<h2 class="section-title">.htaccess</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- content starts -->
"<code>.htaccess</code> is a configuration file for use on web servers running the Apache Web Server software. When a <code>.htaccess</code> file is placed in a directory which is in turn 'loaded via the Apache Web Server', then the <code>.htaccess</code> file is detected and executed by the Apache Web Server software. These <code>.htaccess</code> files can be used to alter the configuration of the Apache Web Server software to enable/disable additional functionality and features that the Apache Web Server software has to offer. These facilities include basic redirect functionality, for instance if a 404 file not found error occurs, or for more advanced functions such as content password protection or image hot link prevention." -- <a href="http://www<code>.htaccess</code>-guide.com/" target="_blank">htaccess guide</a>
<br><br>
<code>.htaccess</code> files can be used to configure the following:<br>
<br><ul>
<li><a href="http://www.htaccess-guide.com/error-documents/" target="_blank" style="color:orange;">Error documents</a></li>
<li><a href="http://www.htaccess-guide.com/redirects/" target="_blank" style="color:orange;">Redirects</a></li>
<li><a href="http://www.htaccess-guide.com/password-protection/" target="_blank" style="color:orange;">Password protection</a></li>
<li><a href="http://www.htaccess-guide.com/deny-visitors-by-ip-address/" target="_blank" style="color:orange;">Deny visitors by IP address</a></li>
<li><a href="http://www.htaccess-guide.com/deny-visitors-by-referrer/" target="_blank" style="color:orange;">Deny visitors by referrer</a></li>
<li><a href="http://www.htaccess-guide.com/hot-link-prevention-techniques/" target="_blank">Hot link prevention techniques</a></li>
<li><a href="http://www.htaccess-guide.com/blocking-offline-browsers-and-bad-bots/" target="_blank">Blocking offline browsers and 'bad bots'</a></li>
<li><a href="http://www.htaccess-guide.com/directoryindex-uses/" target="_blank" style="color:orange;">DirectoryIndex uses</a></li>
<li><a href="http://www.htaccess-guide.com/adding-mime-types/" target="_blank">Adding MIME types</a></li>
<li><a href="http://www.htaccess-guide.com/enable-ssi-with-htaccess/" target="_blank">Enable SSI with .htaccess</a></li>
<li><a href="http://www.htaccess-guide.com/enable-cgi-outside-of-the-cgi-bin/" target="_blank">Enable CGI outside of the cgi-bin</a></li>
<li><a href="http://www.htaccess-guide.com/disable-directory-listings/" target="_blank" style="color:orange;">Disable directory listings</a></li>
<li><a href="http://www.htaccess-guide.com/setting-server-timezone/" target="_blank" style="color:orange;">Setting server timezone</a></li>
<li><a href="http://www.htaccess-guide.com/changing-server-signature/" target="_blank">Changing server signature</a></li>
<li><a href="http://www.htaccess-guide.com/preventing-access-to-your-php-includes-files/" target="_blank" style="color:orange;">Preventing access to your PHP includes files</a></li>
<li><a href="http://www.htaccess-guide.com/prevent-access-to-php-ini/" target="_blank" style="color:orange;">Prevent access to php.ini</a></li>
<li><a href="http://www.htaccess-guide.com/forcing-scripts-to-display-as-source-code/" target="_blank" style="color:orange;">Forcing scripts to display as source code</a></li>
<li><a href="http://www.htaccess-guide.com/ensuring-media-files-are-downloaded-instead-of-played/" target="_blank">Ensuring media files are downloaded instead of played</a></li>
<li><a href="http://www.htaccess-guide.com/setting-up-associations-for-encoded-files/" target="_blank">Setting up Associations for Encoded Files</a></li>
<li><a href="http://www.htaccess-guide.com/preventing-requests-with-invalid-characters/" target="_blank">Preventing requests with invalid characters</a></li>
</ul><br>



<h4>Password Protecting a Directory</h4>
You can password protect the contents of any Static/CGI/PHP application by using a <code>.htaccess</code> file. This method works for all CGI and PHP-based applications, including AWStats, Drupal, Joomla, Trac, and WordPress.<br><br>

To enable password protection:<br><br>

With the control panel, create a Static/CGI/PHP app or identify an existing Static/CGI/PHP app you would like to use.<br><br>

If necessary, create or modify a website entry which maps the Static/CGI/PHP app to a particular URL.<br><br>

Open an SSH session into your account.<br><br>

Switch to the $HOME/webapps/static_cgi_php_app/ directory.<br><br>

If it does not already exist, create a <code>.htaccess</code> file. Enter <code>touch .htaccess</code> and press Enter.<br><br>

Open <code>.htaccess</code> in a text editor.<br><br>

Add these directives to <code>.htaccess</code>:<br>

<div class="code-block">
<pre><code class="language-markup">AuthUserFile /home/&lt;your_username&gt;/webapps/&lt;webapp_name&gt;/.htpasswd
AuthName EnterPassword
AuthType Basic
require valid-user</code></pre>
</div><!--//code-block-->

Save and close the file.
<br><br>
To create the first user with access to the directory, enter <code>htpasswd -c .htpasswd username</code> and press Enter. A New password prompt appears.
<br><br>
Enter the password for the new user and press Enter. A Re-type new password prompt appears.
<br><br>
Reenter the password for the new user and press Enter.
<br><br>
To create additional users with access to the directory, enter <code>htpasswd .htpasswd username</code> and press Enter, then follow the password prompts for the new user.
<br><br>
<h4>Hiding Configuration Files</h4>

By default, files such as <code>.htaccess</code> and <code>.htpasswd</code> are exposed to the web. If you want to hide these files, add these lines to your <code>.htaccess</code> file:


<div class="code-block">
<pre><code class="language-markup">&lt;Files ~ "^\.ht"&gt;
    Order allow,deny
    Deny from all
&lt;/Files&gt;</code></pre>
</div><!--//code-block-->

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
Practice creating an <code>.htaccess</code> file in your webapps and using some of the "<span style="color:orange;">orange</span>" configurations listed above.
<br><br>




<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


