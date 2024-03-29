<?php
if(!isset($_COOKIE['jaxcode'])) {
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-orange">
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
                    <li class="active">Internship</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Prepare for Bootcamp</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: <?=date('M d, Y')?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="license" class="doc-section">
                                <h2 class="section-title">PrettyDocs License</h2>
                                <div class="section-block">
                                    <div class="jumbotron text-center">
                                        <h1>CC BY 3.0</h1>
                                        <p>PrettyDocs is made by UX designer <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a> for developers and is 100% <strong>FREE</strong> under the <a class="dotted-line" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License (CC BY 3.0)</a></p>
                                        <div class="author-profile text-center">
                                            <a class="center-block" href="https://twitter.com/3rdwave_themes" target="_blank"><img src="assets/images/demo/author-profile.png" alt=""></a>
                                        </div><!--//author-profile-->
                                        <div class="speech-bubble">                    
                                            <h3 class="speech-title">Want to get more freebies in the future?</h3>

                                            <p>I tweet and share <strong>#UX</strong> and <strong>#webdev</strong> related resources/content at <a href="https://twitter.com/3rdwave_themes" target="_blank">@3rdwave_themes</a> <br> Follow me on twitter and I will keep you informed about my next free template there. :)</p>
                                        </div>
                                        
                                        <div class="list list-inline center-block">
                                            <a class="btn btn-cta btn-orange" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> Follow Xiaoying on Twitter</a>
                                        </div>
                                    </div><!--//jumbotron-->
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->
                            <section id="credits" class="doc-section">
                                <h2 class="section-title">PrettyDocs Credits</h2>
                                <div class="section-block">
                                    <ul class="list list-unstyled">
                                        
                                        <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link-square"></i> Bootstrap</a></li>
                                        <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link-square"></i> FontAwesome</a></li>
                                        <li><a href="http://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><i class="fa fa-external-link-square"></i> Elegant icon font</a></li>
                                        <li><a href="http://www.google.com/webfonts" target="_blank"><i class="fa fa-external-link-square"></i> Google Fonts</a></li>
                                        <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link-square"></i> jQuery</a></li>
                                        <li><a href="http://prismjs.com/index.html" target="_blank"><i class="fa fa-external-link-square"></i> Prism</a></li>
                                        <li><a href="http://ashleydw.github.io/lightbox/" target="_blank"><i class="fa fa-external-link-square"></i> Bootstrap Lightbox</a></li>
                                        <li><a href="http://flesler.blogspot.co.uk/2007/10/jqueryscrollto.html" target="_blank"><i class="fa fa-external-link-square"></i> jQuery ScrollTo</a></li>
                                        <li><a href="http://brm.io/jquery-match-height/" target="_blank"><i class="fa fa-external-link-square"></i> jQuery Match Height</a></li>
                                        
                                    </ul>
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->

                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#license">License</a></li>
                                <li><a class="scrollto" href="#credits">Credits</a></li>
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
        <div id="promo-block" class="promo-block promo-block-2">
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
                                    <a class="btn btn-cta" href="#hook">View Demo</a>
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
    <script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                 
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

