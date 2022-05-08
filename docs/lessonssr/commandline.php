


<section id="ssh" class="doc-section">
<h2 class="section-title">Telnet/SSH</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p>SSH, also known as Secure Socket Shell, is a network protocol that provides administrators with a secure way to access a remote computer. SSH also refers to the suite of utilities that implement the protocol. Secure Shell provides strong authentication and secure encrypted data communications between two computers connecting over an insecure network such as the Internet. SSH is widely used by network administrators for managing systems and applications remotely, allowing them to log in to another computer over a network, execute commands and move files from one computer to another.
</p>
<i style="line-height:1.8em;">Syntax</i><br> <p>
<code>ssh username@subdomain.webfactional.com</code></p>

<div class="code-block">
<pre><code class="language-markup">$ ssh jaxcode@jaxcode.webfactional.com

jaxcode@jaxcode.webfactional.com's password: ********

Last login: Mon Jul  2 00:45:52 2018 from 2603:3010:1594:0:55d3:1434:fca9:f214
[jaxcode@web510 ~]$</code></pre>
</div><!--//code-block-->

<div class="section-block">
<div class="callout-block callout-info">
<div class="icon-holder">
<i class="fa fa-info-circle"></i>
</div><!--//icon-holder-->
<div class="content">
<h4 class="callout-title">FYI</h4>
<p>Your SSH username and password are the same as your Webfaction username and password.</p>
</div><!--//content-->
</div><!--//callout-block-->

</div>
</div>
</section><!--//doc-section-->


                                    
                                    
 












<section id="commandline" class="doc-section">
<h2 class="section-title">Command Line</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
The window, which is usually called the command line or command-line interface, is a text-based application for viewing, handling, and manipulating files on your computer. It's much like Windows Explorer or Finder on the Mac, but without the graphical interface.
<br><br>
<div class="code-block">
<pre><code class="language-markup">Last login: Mon Jul  2 00:45:52 2018 from 2603:3010:1594:0:55d3:1434:fca9:f214
[jaxcode@web510 ~]$</code></pre>
</div><!--//code-block-->
</div>
</div>
</section><!--//doc-section-->



<section id="linux" class="doc-section">
<h2 class="section-title">Linux</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
Linux is the best-known and most-used open source operating system. As an operating system, Linux is software that sits underneath all of the other software on a computer, receiving requests from those programs and relaying these requests to the computer's hardware.
</div>
</div>
</section><!--//doc-section-->

<h3>Linux (Unix) Commands</h3>

<div class="code-block">
<h5>The <strong><em>pwd</em></strong> command writes the full pathname of the current working directory </h5>
<pre><code class="language-markup">[jaxcode@web510 ~]$ pwd
/home/jaxcode
[jaxcode@web510 ~]$ 
</code></pre>
</div><!--//code-block-->

<div class="code-block">
<h5>The <strong><em>ls</em></strong> command lists files of the current working directory </h5>
<pre><code class="language-markup">[jaxcode@web510 webapps]$ ls
htdocs  jaxcode
[jaxcode@web510 webapps]$ 
[jaxcode@web510 webapps]$ ls -a
.  ..  htdocs  jaxcode
[jaxcode@web510 webapps]$ ls -l
total 0
drwxr-sr-x 2 jaxcode jaxcode 51 Jun 30 18:03 htdocs
drwxr-sr-x 3 jaxcode jaxcode 49 Jun 30 18:03 jaxcode
[jaxcode@web510 webapps]$ 
</code></pre>
</div><!--//code-block-->

<div class="code-block">
<h5>The <strong><em>cd</em></strong> command is used to change the current directory</h5>
<pre><code class="language-markup">[jaxcode@web510 ~]$ ls
bin  certificates  lib  logs  webapps
[jaxcode@web510 ~]$ cd webapps/
[jaxcode@web510 webapps]$ ls
htdocs  jaxcode
[jaxcode@web510 webapps]$ 
</code></pre>
</div><!--//code-block-->


<section id="mysql" class="doc-section">
<h2 class="section-title">MySQL via Command Line</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
Login into Webfaction via SSH and access MySQL via the command line with the login command <code>mysql -u -p</code>. -u = username and -p = password. In the example below 'march' is the username. Leave the password blank and you will be prompted for it.
<div class="code-block">
<pre><code class="language-markup">mysql -umarch -p</code></pre>
</div><!--//code-block-->

Once you are logged into MySQL you can use SQL commands. Each command must end with a ';'.

View databases:
<div class="code-block">
<pre><code class="language-markup">show databases;</code></pre>
</div><!--//code-block-->

Select a database:
<div class="code-block">
<pre><code class="language-markup">use MyGuests;</code></pre>
</div><!--//code-block-->

View all tables in selected database:
<div class="code-block">
<pre><code class="language-markup">show tables;</code></pre>
</div><!--//code-block-->

Use CRUD SQL commands:
<div class="code-block">
<pre><code class="language-markup">SELECT * from MyGuests;

UPDATE MyGuests SET email = 'new@email.com' WHERE id = '3';

INSERT INTO MyGuests (firstname,lastname,email) values("Jax","Code","code@jaxcode.com");

DELETE FROM MyGuests WHERE id = '3';
</code></pre>
</div><!--//code-block-->

To leave MySQL enter <code>exit;</code>.

</div>
</div>
</section><!--//doc-section-->


<section id="crontab" class="doc-section">
<h2 class="section-title">Crontab</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
The crontab is a list of commands that you want to run on a regular schedule, and also the name of the command used to manage that list. Crontab stands for cron table,  because it uses the job scheduler cron to execute tasks; cron itself is named after chronos,  the Greek word for time. <em>cron</em> is the system process which will automatically perform tasks for you according to a set schedule. The schedule is called the crontab, which is also the name of the program used to edit that schedule.<br><br>
<p><strong>Linux Crontab Format</strong></p>
<pre>
MIN HOUR DOM MON DOW CMD
</pre>
<p><strong>Crontab Fields and Allowed Ranges (Linux Crontab Syntax)</strong></p>
<pre>
<strong>Field    Description    Allowed Value</strong>
MIN      Minute field    0 to 59
HOUR     Hour field      0 to 23
DOM      Day of Month    1-31
MON      Month field     1-12
DOW      Day Of Week     0-6
CMD      Command         Any command to be executed.
</pre>

<p><strong>Examples of Cron jobs</strong><br />
<strong>1. Scheduling a Job For a Specific Time</strong></p>
<p>The basic usage of cron is to execute a job in a specific time as shown below. This will execute the Full backup shell script (full-backup) on 10th June 08:30 AM.</p>
            
<p>The time field uses 24 hours format. So, for 8 AM use 8, and for 8 PM use 20.</p>
<pre>
30 08 10 06 * /home/jaxcodeshare/full-backup
</pre>
<p>30  30th Minute<br />
08  08 AM<br />
10  10th Day<br />
06  6th Month (June)<br />
*  Every day of the week</p>
<br>
more examples:<br>
<img src="lessonssr/crontabexamples.png">
<br><br>
<p><strong>2.To view the Crontab entries</strong></p>

<div class="code-block">
<pre><code class="language-markup">crontab -l</code></pre>
</div><!--//code-block-->

<p><strong>3.To edit Crontab Entries</strong><br />

<div class="code-block">
<pre><code class="language-markup">crontab -e</code></pre>
</div><!--//code-block-->

crontab will default to the Linux VI editor. Common VI commands:
<pre>
To begin editing enter 'i' for insert mode.
'esc' key to exit insert mode.
':wq' to write and quit.
</pre>
<a href="https://kb.iu.edu/d/afdc" target="_blank">A quick reference list of vi editor commands</a>



</div>
</div>
</section><!--//doc-section-->




<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Use SFTP and connect to your Webfaction account</li>
	<li>Use SSH and connect to the Webfaction server</li>
	<li>Practice Linux commands on the command line
		<ul>
	<li>pwd</li>
	<li>		ls, ls -l, ls -a</li>
	<li>		cd</li>
	<li>		mkdir & rmdir</li>
	<li>		touch</li>
	<li>		cp</li>
	<li>		mv</li>
	<li>		rm</li>
	<li>		man & --help </li>
	<li>		df </li>
	<li>		du</li>
	<li>		tar</li>
	<li>		zip</li>
	<li>		uname -a</li>
	<li>		chmod</li>
	<li>		ping</li>
	<li>		clear</li>
</ul>

		
	</li>
	<li>Setup a crontab job to automatically backup one or more of your databases every night. <a href="http://docs.webfaction.com/user-guide/databases.html#backing-up-a-database-automatically" target="_blank">Webfaction instructions</a></li>
	<li>Enter the following crontab entry to delete any backup older than 4 days<br>
	<code>0 7 * * * /usr/bin/find $HOME/db_backups/ -type f -mtime +4 -exec rm -rf {} \;</code></li>
</ol>

</div>
</div>
</section><!--//doc-section-->


