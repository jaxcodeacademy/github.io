<section id="sftp" class="doc-section">
<h2 class="section-title">SFTP</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
FTP stands for File Transfer Protocol and, as the name implies, it is a way of transferring files between computers. It is also one of those wonderful computer terms that's both a noun and a verb.<br><br>

Secure File Transfer Protocol (SFTP) is a secure version of File Transfer Protocol (FTP), which facilitates data access and data transfer over a Secure Shell (SSH) data stream. It is part of the SSH Protocol. This term is also known as SSH File Transfer Protocol
<br><br><br><br>
<h4>Create a connection to WebFaction</h4>
<p>Put in a <em><strong>Name (can be anything), Hostname, Username, and Password.</strong></em></p>
<img src="lessons/images/sftp1.jpg" class="img-responsive">
<br><br>

<div class="section-block">
<div class="callout-block callout-info">
<div class="icon-holder">
<i class="fa fa-info-circle"></i>
</div><!--//icon-holder-->
<div class="content">
<h4 class="callout-title">FYI</h4>
<p>Your SFTP username and password are the same as your Webfaction username and password.</p>
</div><!--//content-->
</div><!--//callout-block-->

<br><br>
<h4>Where to find Hostname (you can use IP or subdomain name)</h4><img src="lessons/images/sftp4.jpg" style="width:100%;">
<br><br><br><br>
<h4>Upload files to the correct folder in <em>WEBAPPS</em></h4><img src="lessons/images/sftp2.jpg" class="img-responsive">
<br><br><br><br>


</div>
</div>
</section><!--//doc-section-->


<section id="telnet" class="doc-section">
<h2 class="section-title">Telnet</h2>
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
</ol>

</div>
</div>
</section><!--//doc-section-->


