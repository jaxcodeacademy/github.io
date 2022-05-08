<?
$breadcrumb = 'Quick Start';
$bodycolor = "body-green";
include 'header.php';



// Students enrolled and calculated tuition

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT course_id FROM bootcamp_enrollments WHERE student_id='{$_SESSION['student_id']}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {


$sql2 = "SELECT * FROM bootcamps_courses WHERE course_id='{$row['course_id']}'";
$result2 = mysqli_query($conn, $sql2);

while($row2 = mysqli_fetch_assoc($result2)) {
$location = $row2['location'];
//$datestart = $row2['datestart'];
$datestart = 'September 13, 2021';
$dateend = 'December 1, 2021';
//$dateend = $row2['dateend'];
$bootcamp = $row2['bootcamp'];
$format = $row2['format'];
}
















}
} else {
echo 'You have not enrolled in a course';
}

?>
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Prepare for Bootcamp</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            
                            <section id="gettingstarted-info" class="doc-section">
                                <h2 class="section-title">Bootcamp Info</h2>
              Student ID: <?=$_SESSION['student_id']?>
              
                                <div id="gettingstarted-datetime"  class="section-block">
                                    <h3 class="block-title">Course, Date, & Time</h3>
                                    <p>Bootcamp: Web Development & Cybersecurity <br>
                                    Dates: September 13, 2021 to December 1, 2021<br>
                                    Hours: 
                                    <?
                                    if($_SESSION['dayornight'] == 'day') {
                                    echo '10am to 2pm, Monday through Wednesday';
                                    }
                                    
                                    if($_SESSION['dayornight'] == 'night') {
                                    echo '7:30pm to 10:30pm, Monday through Thursday';
                                    }
                                    ?>
                                    
                                    </p>
                                    
                                </div><!--//section-block-->
 
 
<? if($_SESSION['format'] != 'remote') { ?>                               
                                 <div id="gettingstarted-location"  class="section-block">
                                    <h3 class="block-title">In-Person Location</h3>
                                    <p>
                                    <div class="alert alert-info">
  <strong>COVID-19 Message: </strong> Masks are required in the building. Masks are available if you don't have one.
</div>
                                    
                                    
                                    Jax Code Academy<br>The Avenues Mall<br>
                                    10300 Southside Blvd, Jacksonville, FL 32256
                                    <br>Our entrance is between JC Penney and Dillards. Put VisionWorks in your GPS and we're across the hall.
                                    
                                    
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.8472669120465!2d-81.55647518592103!3d30.184356618906634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e5cb7482ce40e5%3A0x5a16daba7a862896!2s10300%20Southside%20Blvd%2C%20Jacksonville%2C%20FL%2032256!5e0!3m2!1sen!2sus!4v1611696960077!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    
                                    
                               
									
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-parking"  class="section-block">
                                    <h3 class="block-title">Free Parking</h3>
                                    <p>Parking lots .
                                    </p>
                                    
                                </div><!--//section-block-->
                                
  <? } ?>                              
                            </section><!--//doc-section-->
                            
                            
                            <section id="gettingstarted-section" class="doc-section">
                                <h2 class="section-title">Things You'll Need Checklist</h2><p>You should have everything on this checklist completed before the first day of class. We will go over this on day 1 so if you can't figure it out don't worry.</p>
                                
                                
                                
                                <div id="gettingstarted-laptop"  class="section-block">
                                    <h3 class="block-title">Laptop</h3>
                                    <p>You will need a laptop for class and to complete your lessons and assignments. We recommend an Apple laptop because of its ease of use and its conduciveness to web design and development. A Windows laptop will work just fine though.<br>



                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-webhostingaccount"  class="section-block">
                                    <h3 class="block-title">Web Hosting Account</h3>
                                    <p>Open a hosting account at Opalstack to use for the course. Select SHARED account. It's $15/month and you can cancel any time. <a href="https://www.opalstack.com/" target="_blank">Opalstack.com</a>
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-graphicseditor"  class="section-block">
                                    <h3 class="block-title">Graphics Editor</h3>
                                    <p>Adobe Photoshop is nice to have but you can use PhotoPea, a free online graphics editor at <a href="https://www.photopea.com/" target="_blank">https://www.photopea.com/</a>
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-browser"  class="section-block">
                                    <h3 class="block-title">Google Chrome Browser</h3>
                                    <p>Chrome is our browser of choice because it has a lot of tools available for web developers. If you don't already have it please <a href="https://www.google.com/chrome/browser/" target="_blank">download it</a> for bootcamp.  <a href="https://developers.google.com/web/tools/chrome-devtools/" target="_blank">Read about web dev tools</a>
                                    </p>
                                </div><!--//section-block-->
                                <div id="gettingstarted-ftpprogram"  class="section-block">
                                    <h3 class="block-title">(S)FTP Program</h3>
                                    <p>The File Transfer Protocol (FTP) is a standard network protocol used for the transfer of computer files between a client and server on a computer network. Please download and install an FTP client on your laptop before bootcamp begins.
                                   <ul>
                                   <li><a href="https://cyberduck.io/download/">Cyberduck</a> - is free and the preferred SFTP program for Windows (or Mac if you don't want to buy Fetch).</li>
                                   <li><a href="https://winscp.net/eng/index.php" target="_blank">WinSCP (Windows)</a> - WinSCP is an open source free SFTP client, FTP client, WebDAV client, S3 client and SCP client for Windows. Its main function is file transfer between a local and a remote computer. Beyond this, WinSCP offers scripting and basic file manager functionality.</li>
	<li> <a href="https://fetchsoftworks.com/" target="_blank">Fetch (Mac)</a>. Try it free for 15 days then pay $29.</li>

</ul>

                                    
                                    </p>
                                </div><!--//section-block-->
                                
                                
                                

                                
                                
                               
                                
                                
                            
<div id="gettingstarted-texteditor"  class="section-block">
                                    <h3 class="block-title">Text Editors</h3>
                                    <br>
                                   
<p>Download and install <a href="https://atom.io/" target="_blank">Atom (Mac or PC)</a> [free]</p>


<p>Download and install <a href="https://code.visualstudio.com/" target="_blank">Visual Studio (Mac or PC)</a> [free]</p>


<p>Download and install <a href="https://www.sublimetext.com/" target="_blank">Sublime Text (Mac or PC)</a> [free]</p>




 </div><!--//section-block-->
 
 
 
 <div id="gettingstarted-virtualization"  class="section-block">
                                    <h3 class="block-title">Virtualization Tool </h3>
                                    <br>
    <p>Download and install <a href="https://www.virtualbox.org/" target="_blank">Virtualbox (Mac or PC)</a> [free] - VirtualBox runs on Windows, Linux, Macintosh, and Solaris hosts and supports a large number of guest operating systems including but not limited to Windows (NT 4.0, 2000, XP, Server 2003, Vista, Windows 7, Windows 8, Windows 10), DOS/Windows 3.x, Linux (2.4, 2.6, 3.x and 4.x), Solaris and OpenSolaris, OS/2, and OpenBSD.

</p>

 </div><!--//section-block-->                             
                               
                            
                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu" data-spy="affix">
<li><a class="scrollto" href="#gettingstarted-info">Bootcamp info</a> <ul class="nav doc-sub-menu">
<li><a class="scrollto" href="#gettingstarted-datetime">Date &amp; Time</a></li>
<? if($_SESSION['format'] != 'remote') { ?>   
<li><a class="scrollto" href="#gettingstarted-location">Location</a></li>
<li><a class="scrollto" href="#gettingstarted-parking">Parking</a></li>
<? } ?>
</ul><!--//nav--></li>
<li>
<a class="scrollto" href="#gettingstarted-section">Things You'll Need</a>
<ul class="nav doc-sub-menu">
<li><a class="scrollto" href="#gettingstarted-laptop">Laptop</a></li>
<li><a class="scrollto" href="#gettingstarted-webhostingaccount">Web Hosting Account</a></li>
<li><a class="scrollto" href="#gettingstarted-graphicseditor">Graphics Editor</a></li>
<li><a class="scrollto" href="#gettingstarted-browser">Chrome Browser</a></li>
<li><a class="scrollto" href="#gettingstarted-ftpprogram">FTP Program</a></li> 
<li><a class="scrollto" href="#gettingstarted-telnet">Telnet/SSH</a></li> 
<li><a class="scrollto" href="#gettingstarted-texteditor">Text Editor</a></li>
<li><a class="scrollto" href="#gettingstarted-virtualization">Virtualization Tool</a></li>


</ul><!--//nav-->
                                </li>
                                
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                    
                    
                    
                    
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
<? include 'footerad.php'; ?>
        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Copyright &copy; <a href="https://jaxcode.com/">Jax Code Academy</a></small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>                                                                
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

