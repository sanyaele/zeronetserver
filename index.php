<?php
session_start();

if (empty($_SESSION['dotorg']) && strpos($_SERVER['HTTP_HOST'], 'otomatikserver.org') !== false){
	// set session before redirecting
	$_SESSION['dotorg'] = 1;
	header ("Location: donations.html");
	echo $_SERVER['HTTP_HOST'];
	exit();
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="alternate" href="http://zeronetserver.com" hreflang="en-ng" />

        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--
Accord Template
http://www.templatemo.com/tm-478-accord
-->
        <title>ZeroNet Servers - Distribute your content wirelessly without Internet</title>
    </head>

    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/zeronet.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="gallery.html">Gallery
                <span class="sr-only">(current)</span>
              </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container topdiv">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-img justify-content-center">
                        <h3>ZeroNet <br>
                         <span>Portable Offline Servers</span></h3>
                    </div> 
                    <p>The <strong>ZeroNet Server</strong> is a portable battery powered Wireless Server with no Internet connection and accessible from a User's mobile device via WiFi, this Server is ideal for delivering content to areas where Internet and Electricity are major deal breakers.</p>
                    <p>
                        With over 127 million people having access to smartphones in Africa, any content provider not targeting Mobile is shooting blanks in today's market. And with the crippling Internet connection challenges here in Africa, instead of waiting for your consumers to come and collect content from you via the Internet, why not assure they get your content by taking it to them with ZeroNet? 
                    </p>
                </div>
                <div class="col-lg-4">
                <div class="attentn">
                    <img src="images/big_server.jpg" alt="The Portable ZeroNet Server" class="img-fluid">
                    <div>
                        <h3>ZeroNet Server Specs:</h3>
                        CPU: <span>1.2GHz</span><br> RAM: <span>1GB</span><br> Storage: <span>256GB SSD (expandible)</span><br> Networking: <span>> 100m wireless radius</span><br> Battery: <span>105,000 Mah (3 Days without Charge)</span><br> Solar Panel: <span>80w</span><br> OS: <span>Debian Linux</span><br> Web Server: <span>NGINX</span><br> PHP: <span>7.0</span>
                    </div>   
                </div>
                </div>
            </div>
        </div>
</header>

    <section class="features" id="features">
        <div class="container">
            <div>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-energy text-primary"></i>
                                    <h3>It is Automated</h3>
                                    <p class="text-muted">Chatbots are automated and so do not mind responding to the same questions over and over again from different customers.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-heart text-primary"></i>
                                    <h3>Always Polite</h3>
                                    <p class="text-muted">Because they are robots, Chatbots cannot get angry at a customer for any reason. They simply do not bring their drama to work.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-hourglass text-primary"></i>
                                    <h3>Available 24/7</h3>
                                    <p class="text-muted">Any time of the day you message a Chatbot, you will always get answers. This helps in improving sales and customer satisfaction.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-bubbles text-primary"></i>
                                    <h3>Handling Customers</h3>
                                    <p class="text-muted">Humans can only handle a few customers at the same time, however, a chatbot can handle hundreds of conversations at the same exact time.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-wallet text-primary"></i>
                                    <h3>Saves Money</h3>
                                    <p class="text-muted">By employing a Chatbot to answer your most asked questions, you would ultimately save the cost of employing first-level support staff</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-emotsmile text-primary"></i>
                                    <h3>Satisfies Most Customers</h3>
                                    <p class="text-muted">At the end of the session, the customer is usually able to get the information he/she wants. As far as it is in the system, the Chatbot knows it.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-user-female text-primary"></i>
                                    <h3>Personalized Replies</h3>
                                    <p class="text-muted">The chatbot by default has your basic Facebook information, so can personalize messages by calling your name or identifying your gender.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-directions text-primary"></i>
                                    <h3>Simpler to Follow</h3>
                                    <p class="text-muted">The most effective chatbots are built with guides that are simple to follow for customers to get the answers they are looking for</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Work on any Device</h3>
                                    <p class="text-muted">Since messenger applications work on Smartphones, Tablets, and Desktops, your chatbot can handle customers accessing from different devices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


            <div class="container">
                <div class="row">
                    <div class="main-page">

                        <aside class="main-navigation">
                            <div class="main-menu">

                                <div class="menu-container">
                                    <div class="block-keep-ratio block-keep-ratio-2-1 block-width-full home">
                                        <a href="index.php" class="block-keep-ratio__content  main-menu-link">
                                        <span class="main-menu-link-text">
                                                 
                                        </span>                                        
                                    </a>
                                    </div>
                                </div>

                                <div class="menu-container">
                                    <iframe width="310" height="174" src="https://www.youtube.com/embed/ZUJ-oiqBSnE" frameborder="0" allowfullscreen></iframe>
                                </div>

                                <!-- sidebar carousel -->
                            </div>
                            <!-- main-menu -->
                        </aside>
                        <!-- main-navigation -->

                        <div class="content-main">
                            <div class="pull-right">
                                <strong>
                                    <a href="gallery.html" class="text-primary">Gallery</a> | <a href="contact.html" class="text-danger">Contact Us</a>
                                </strong>
                            </div>
                            <div class="row margin-b-30">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="banner-main-home">
                                        <div class="banner-main-home-text">
                                            <!-- <div class="heading">
                                                <p class="text-uppercase">ZeroNet No-Internet Servers</p>

                                            </div> -->
                                            <div class="desc">
                                            <img src="images/black-business-woman-on-phone.jpg" alt="Accessing Otomatik on Mobile" class="img-responsive">    
                                            <p>The <strong>ZeroNet Server</strong> is a portable battery powered Wireless Server with no Internet connection and accessible from a User's mobile device via WiFi, this Server is ideal for delivering content to areas where Internet and Electricity are major deal breakers.</p>
                                                <p>
                                                    With over 127 million people having access to smartphones in Africa, any content provider not targeting Mobile is shooting blanks in today's market. And with the crippling Internet connection challenges here in Africa, instead of waiting for your consumers to come and collect content from you via the Internet, why not assure they get your content by taking it to them with ZeroNet? 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="attentn">
                                            <img src="images/big_server.jpg" alt="The Portable ZeroNet Server" class="img-fluid"><br> <h3>ZeroNet Server Specs:</h3>
                                            CPU: <span>1.2GHz</span><br> RAM: <span>1GB</span><br> Storage: <span>256GB SSD (expandible)</span><br> Networking: <span>> 100m wireless radius</span><br> Battery: <span>105,000 Mah + 80w Solar Panel</span><br> OS: <span>Debian Linux</span><br> Web Server: <span>NGINX</span><br> PHP: <span>7.0</span><br>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="box bottom-main">
                                        <div class="info float-container">
                                            <div class="col-sm-12 bottom-title">
                                                <h3 class="text-uppercase">ZeroNet Servers</h3>
                                                <h4 class="text-uppercase">The different types of Specialty Servers we build</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="bottom-img">
                                                        <img src="images/health.jpg" alt="Image">
                                                        <p class="second">ZeroNet Health</p>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="bottom-img">
                                                        <img src="images/education.jpg" alt="Image">
                                                        <p class="first">ZeroNet Education</p>
                                                    </div>
                                                </div>

                                                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="bottom-img">
                                                        <img src="images/sme.jpg" alt="Image">
                                                        <p class="third">ZeroNet SME</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="bottom-desc">At the moment, we are working with content developers working in the Education, Health, and SME Sector. </p>
                                            <p class="bottom-desc">If you have content you are targeting at delivering to schools, instead of putting it on the Internet and assuming students will get money to buy Internet access or putting it on CD or DVD and assuming students will have access to laptops or desktops with working CD drives, <strong>why not make it ZeroNet?</strong></p>
                                            <p class="bottom-desc">Do you want to distribute medical and Health related Documents, images, and even Videos? why not make it <strong>ZeroNet</strong>? And provide access to such information in even rural places with irregular or no power supply and Zero Internet</p>

                                            <hr />
                                            <div class="col-sm-12 location-main">
                                                <div class="pull-right bottom-user">
                                                    <a href="#"><i class="fa fa-caret-right"></i><span>READ MORE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-b-30">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="box london">
                                        <div class="box-icon">
                                            <img src="images/students_teachers.jpg" alt="Image" class="img-responsive">
                                        </div>
                                        <div class="info float-container">
                                            <div class="col-sm-12 london-title">
                                                <h3 class="text-uppercase">JAMB and WAEC Practice</h3>
                                                <h4 class="text-uppercase"><span style="color: #666">Featured:</span> The Examina</h4>
                                            </div>
                                            <p><strong>The ZeroNet Education Server</strong> contains an examination practice and testing portal (Examina) that not only enhances performance in examinations, but also encourages collaboration with peers and teachers while learning.</p>
                                            <hr />
                                            <div class="col-sm-12 location-main">
                                                <div class="pull-left location">
                                                    <i class="fa fa-map-marker fa-2x"></i><span>ZeroNet Education</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="box paris">
                                        <div class="box-icon">
                                            <img src="images/ije.jpg" alt="Image" class="img-responsive">
                                        </div>
                                        <div class="info float-container">
                                            <div class="col-sm-12 london-title paris-title">
                                                <h3 class="text-uppercase">an adaptation of Rachel</h3>
                                                <h4 class="text-uppercase"><span style="color: #666">Featured:</span> Ije eLibrary</h4>
                                            </div>
                                            <p><strong>Ijé eLibrary</strong> is an extensive eLibrary which is an adaptation of the Rachel Server of The WorldPossible Organization, this is a combination of curated content and locally sourced content from various Authors and Publishers.</p>
                                            <hr />
                                            <div class="col-sm-12 location-main">
                                                <div class="pull-left location location2">
                                                    <i class="fa fa-map-marker fa-2x"></i><span>ZeroNet Education</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <!-- row -->
                        </div>
                        <!-- .content-main -->
                    </div>
                    <!-- .main-page -->
                </div>
                <!-- .row -->
                <footer class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                        <p class="copyright">Copyright © 2016-2018 <span style="color: #F00; font-weight: bold;">Otomatik Ventures</span> |<strong> Location: </strong>3 Thorborn Avenue, Sabo, Yaba, Lagos State, Nigeria</p>
                    </div>
                </footer>
                <!-- .row -->
            </div>
            <!-- .container -->

        <!-- JavaScript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
