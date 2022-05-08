
<?

$slugs = array("helloworld|Hello World","webhosting|Web Hosting", "webserver|SFTP, Telnet, Command Line, Linux", "sides|Client side vs. Server side", "mysql|MySQL database and SQL", "webforms|Web Forms", "phpglobals|PHP Global Variables", "phpvalidation|PHP Form Validation" , "phpmailfunction|PHP Mail Function", "phpmysql|PHP & MySQL", "html|HTML", "phpbasics|PHP Basics", "graphicseditor|Using a Graphics Editor", "favicon| Favicons", "css|CSS", "bootstrap|Bootstrap", "phpfunctions|PHP Functions", "phpsessions|PHP Sessions", "phpinclude|PHP Include", "phpfile|PHP File Create/Write", "jsjquery|Javascript & JQuery", "dns|Domain Names and SSL");

$count = 1;
echo '<ul class="list list-unstyled">';
foreach ($slugs as $slug) {
$pieces = explode("|", $slug);
echo '<li><a href="lesson.php?lessonslug='.$pieces[0].'" target="_blank"><i class="fa fa-check"></i> <span style="color:#000000;text-decoration:underline;">';

// Use this code to create lesson pages in /lessons
/*
$newfile = $pieces[0].'.php';
$myfile = fopen("lessons/$newfile", "w") or die("Unable to open file!");
$txt = '<section id="ADD-ID-HERE" class="doc-section">
<h2 class="section-title"><?=$lessontitle?></h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h6>Web Faction</h6>
	HELLO
</div>
</div>
</section><!--//doc-section-->     
                     
                     
<section id="assignment" class="doc-section">
<h2 class="section-title">Assignment</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                                        
<p>Hello</p>
</div>
</div>
</section><!--//doc-section-->  ';
fwrite($myfile, $txt);
fclose($myfile);
*/




if($count <10) { 
echo 'Lesson 0'.$count.': ';
} else {
echo 'Lesson '.$count.': ';
}
echo ''.$pieces[1].'</span></a></li>';
$count++;
}
echo '</ul>';

?>

