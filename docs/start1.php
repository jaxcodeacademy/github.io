<?php
if(!isset($_COOKIE['jaxcodeid'])) {
header("Location: index.php");
}
?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Jax Code Academy Documentation</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="../favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Jax</span><span class="text-bold">Code</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Quick Start</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Roster</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            
                            <section id="gettingstarted-section" class="doc-section">
                                <h2 class="section-title">Students for Sep 10</h2>
                                <div id="gettingstarted-laptop"  class="section-block">
                                    <h3 class="block-title">Roster</h3>
                                    <p> <?php
$servername = "localhost";
$username = "jaxcodeacademy";
$password = "Jc@c@d3my";
$dbname = "jaxcodeacademy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM preregistrations ORDER BY email";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["prereg_id"]. " - Name: " . $row["fullname"]. " " . $row["paymentoption"]. " email: ".$row["email"]."<br>";
    }
} else {
    echo "0 results";
}




echo '<br><br><h1>In Both Databases</h1>';

$sql = "SELECT * FROM preregistrations, preregistrations_bootcamp WHERE preregistrations_bootcamp.email = preregistrations.email ORDER BY preregistrations_bootcamp.email";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["prereg_id"]. " - Name: " . $row["fullname"]. " " . $row["paymentoption"]. " email: ".$row["email"]."<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($conn);
?> 
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-webhostingaccount"  class="section-block">
                                    <h3 class="block-title">Web Hosting Account</h3>
                                    <p>You will need a web hosting account from WebFaction for this course. The cost is $10 per month and you can cancel after the course if you decide not to keep it. Create a <a href="https://www.webfaction.com/?aid=26231" target="_blank">WebFaction Account</a>
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="gettingstarted-graphicseditor"  class="section-block">
                                    <h3 class="block-title">Graphics Editor</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                    <div class="code-block">
                                        <h6>Default code example:</h6>
                                        <p><code>bower install &lt;package&gt;</code></p>
                                        <p><code>npm install &lt;package&gt;</code></p>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="gettingstarted-ftpprogram"  class="section-block">
                                    <h3 class="block-title">FTP Program</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <div id="gettingstarted-texteditor"  class="section-block">
                                    <h3 class="block-title">Text Editor</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                    <div class="code-block">
                                        <h6>Default code example:</h6>
                                        <p><code>bower install &lt;package&gt;</code></p>
                                        <p><code>npm install &lt;package&gt;</code></p>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                               
                            
                            <section id="code-section" class="doc-section">
                                <h2 class="section-title">Code</h2>
                                <div class="section-block">
                                    <p>
                                        <a href="http://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here. You can <a href="http://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="html" class="section-block">
                                    
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Useful Tip:</h4>
                                            <p>You can use this online <a href="https://mothereff.in/html-entities" target="_blank">HTML entity encoder/decoder</a> to generate your code examples.</p>
                                        </div><!--//content-->
                                    </div>
                                    <div class="code-block">
                                        <h6>HTML Code Example</h6>
                                        <pre><code class="language-markup">&lt;!DOCTYPE html&gt; 
&lt;html lang=&quot;en&quot;&gt; 
    ...
    &lt;div class=&quot;jumbotron&quot;&gt; 
        &lt;h1&gt;Hello, world!&lt;/h1&gt; 
        &lt;p&gt;...&lt;/p&gt; 
        &lt;p&gt;&lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;&lt;/p&gt; 
    &lt;/div&gt;
    &lt;div class=&quot;jumbotron&quot;&gt; 
        &lt;h1&gt;Hello, world!&lt;/h1&gt; 
        &lt;p&gt;...&lt;/p&gt; 
        &lt;p&gt;&lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;&lt;/p&gt; 
    &lt;/div&gt;
    ...
&lt;/html&gt;</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="css" class="section-block">
                                    <div class="code-block">
                                        <h6>CSS Code Example</h6>
                                        <pre><code class="language-css">/* ======= Base Styling ======= */
body {
    font-family: 'Open Sans', arial, sans-serif; 
    color: #333; 
    font-size: 16px; 
    -webkit-font-smoothing: antialiased; 
    -moz-osx-font-smoothing: grayscale; 
}</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="less" class="section-block">
                                    <div class="code-block">
                                        <h6>LESS Code Example</h6>
                                        <pre><code class="language-css">/*
* Template Name: prettyDocs - Responsive Website Template for documentations 
* Version: 1.0 
* Author: Xiaoying Riley 
* License: Creative Commons Attribution 3.0 License 
* Twitter: @3rdwave_themes 
* Website: http://themes.3rdwavemedia.com/ 
*/ 
@import &quot;mixins.less&quot;; 
@import &quot;theme-default.less&quot;; 
@import &quot;base.less&quot;; 
@import &quot;doc.less&quot;; 
@import &quot;landing.less&quot;; 
@import &quot;responsive.less&quot;;</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="sass" class="section-block">
                                    <div class="code-block">
                                        <h6>Sass Code Example</h6>
                                        <pre><code class="language-sass">#main {
    $width: 5em; 
    width: $width; 
}

#sidebar { 
    width: $width; 
}</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="javascript" class="section-block">
                                    <div class="code-block">
                                        <h6>JavaScript Code Example</h6>
                                        <pre><code class="language-javascript">&lt;script&gt; 
    function myFunction(a, b) { 
        return a * b; 
    } 
    
    document.getElementById(&quot;demo&quot;).innerHTML = myFunction(4, 3); 
&lt;/script&gt;</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="python" class="section-block">
                                    <div class="code-block">
                                        <h6>Python Code Example</h6>
                                        <pre><code class="language-python">&gt;&gt;&gt; x = int(input(&quot;
Please enter an integer: &quot;)) Please enter an integer: 42 
&gt;&gt;&gt; if x &lt; 0: 
... x = 0 
... print('Negative changed to zero') 
... elif x == 0: 
... print('Zero') 
... elif x == 1: 
... print('Single') 
... else: 
... print('More') 
... More</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="php" class="section-block">
                                    <div class="code-block">
                                        <h6>PHP Code Example</h6>
                                        <pre><code class="language-php">&lt;?php 
$txt = &quot;Hello world!&quot;; 
$x = 5; 
$y = 10.5; 

echo $txt; 
echo &quot;&lt;br&gt;&quot;; 
echo $x; 
echo &quot;&lt;br&gt;&quot;; 
echo $y; 
?&gt;</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="handlebars" class="section-block">
                                    <div class="code-block">
                                        <h6>Handlebars Code Example</h6>
                                        <pre><code class="language-handlebars">Handlebars.registerHelper('list', function(items, options) { 
  var out = &quot;&lt;ul&gt;&quot;; 
  
  for(var i=0, l=items.length; i&lt;l; i++) { 
    out = out + &quot;&lt;li&gt;&quot; + options.fn(items[i]) + &quot;&lt;/li&gt;&quot;; 
  } 
  
  return out + &quot;&lt;/ul&gt;&quot;; 
});</code></pre>
                                    </div><!--//code-block-->
                                    <div class="code-block">
                                        <h6>Git Code Example</h6>
                                        <pre><code class="language-git">$ git add Documentation.txt</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="callouts-section" class="doc-section">
                                <h2 class="section-title">Callouts</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                </div>

                                <div class="section-block">
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Aenean imperdiet</h4>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-warning">
                                        <div class="icon-holder">
                                            <i class="fa fa-bug"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Morbi posuere</h4>
                                            <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link example</a> tellus vel diam viverra elementum.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Lorem ipsum dolor sit amet</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link example</a> aenean commodo ligula eget dolor.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-danger">
                                        <div class="icon-holder">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Interdum et malesuada</h4>
                                            <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                </div>
                            </section><!--//doc-section-->
                            <section id="tables-section" class="doc-section">
                                <h2 class="section-title">Tables</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                                <div class="section-block">
                                    <h6>Basic Table</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Bordered Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Striped Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="buttons-section" class="doc-section">
                                <h2 class="section-title">Buttons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Basic Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                                <li><a href="#" class="btn btn-green">Green Button</a></li>
                                                <li><a href="#" class="btn btn-blue">Blue Button</a></li>
                                                <li><a href="#" class="btn btn-orange">Orange Button</a></li>
                                                <li><a href="#" class="btn btn-red">Red Button</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>CTA Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary btn-cta"><i class="fa fa-download"></i> Download Now</a></li>
                                                <li><a href="#" class="btn btn-green btn-cta"><i class="fa fa-code-fork"></i> Fork Now</a></li>
                                                <li><a href="#" class="btn btn-blue btn-cta"><i class="fa fa-play-circle"></i> Find Out Now</a></li>
                                                <li><a href="#" class="btn btn-orange btn-cta"><i class="fa fa-bug"></i> Report Bugs</a></li>
                                                <li><a href="#" class="btn btn-red btn-cta"><i class="fa fa-exclamation-circle"></i> Submit Issues</a></li>
                                            </ul>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="video-section" class="doc-section">
                                <h2 class="section-title">Video</h2>
                                <div class="section-block">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Responsive Video 16:9</h6>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Responsive Video 4:3</h6>
                                            <!-- 4:3 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            <section id="icons-section" class="doc-section">
                                <h2 class="section-title">Icons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>Elegant Icon Font</h6>
                                    <a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img class="img-responsive" src="assets/images/demo/elegant-icon-font.jpg" alt="elegant icons" /></a>
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>FontAwesome Icon Font</h6>
                                    <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><img class="img-responsive" src="assets/images/demo/fontawesome-icons.png" alt="fontawesome" /></a>
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->
                            
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu" data-spy="affix">
                                <li><a class="scrollto" href="#gettingstarted-info">Bootcamp info</a> <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#gettingstarted-location">Location</a></li>
                                        <li><a class="scrollto" href="#gettingstarted-parking">Parking</a></li>
                                         </ul><!--//nav--></li>
                                <li>
                                    <a class="scrollto" href="#gettingstarted-section">Things You'll Need</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#gettingstarted-laptop">Laptop</a></li>
                                        <li><a class="scrollto" href="#gettingstarted-webhostingaccount">Web Hosting Account</a></li>
                                        <li><a class="scrollto" href="#gettingstarted-graphicseditor">Graphics Editor</a></li>
                                         <li><a class="scrollto" href="#gettingstarted-ftpprogram">FTP Program</a></li> 
                                         <li><a class="scrollto" href="#gettingstarted-texteditor">Text Editor</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li>
                                    <a class="scrollto" href="#code-section">Code</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#html">HTML</a></li>
                                        <li><a class="scrollto" href="#css">CSS</a></li>
                                        <li><a class="scrollto" href="#less">LESS</a></li>
                                        <li><a class="scrollto" href="#sass">Sass</a></li>
                                        <li><a class="scrollto" href="#javascript">JavaScript</a></li>
                                        <li><a class="scrollto" href="#python">Python</a></li>
                                        <li><a class="scrollto" href="#php">PHP</a></li>
                                        <li><a class="scrollto" href="#handlebars">Handlebars</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#callouts-section">Callouts</a></li>
                                <li><a class="scrollto" href="#tables-section">Tables</a></li>
                                <li><a class="scrollto" href="#buttons-section">Buttons</a></li>
                                <li><a class="scrollto" href="#video-section">Video</a></li>
                                <li><a class="scrollto" href="#icons-section">Icons</a></li>
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
        <div id="promo-block" class="promo-block">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fa fa-heart"></i> <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">AppKit - Bootstrap Angular Admin Theme for Developers</a></h3>
                    <div class="row">
                        <div class="figure-holder col-md-5 col-sm-6 col-xs-12">
                            <div class="figure-holder-inner">
                                <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/appkit-widgets-thumb.jpg" alt="AppKit Theme" /></a>
                                <a class="mask" href="#hook"><i class="icon fa fa-heart pink"></i></a>
                                
                            </div>
                        </div><!--//figure-holder-->
                        <div class="content-holder col-md-7 col-sm-6 col-xs-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                    <h4 class="content-title"><strong>Love this free documentation theme?</strong></h4>
                                    <p>Check out AppKit - an Angular admin theme I created with my developer friend <a href="https://twitter.com/tnajdek">Tom Najdek</a> for developers. AppKit uses modern front-end technologies and is packed with useful components and widgets to speed up your app development.</p>
                                    <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open Source, you can use this area to promote your other projects or hold third party adverts like Bootstrap and FontAwesome do!</p>
                                </div><!--//desc-->
                                <div class="author"><a href="http://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                            </div><!--//content-holder-inner-->
                        </div><!--//content-holder-->
                    </div><!--//row-->
                </div><!--//promo-block-inner-->  
            </div><!--//container-->
        </div><!--//promo-block-->
        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Copyright &copy; <a href="https://jaxcodeacademy.com/">Jax Code Academy</a></small>
            
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

