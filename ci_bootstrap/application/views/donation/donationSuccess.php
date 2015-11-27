<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration |  ColomboHome </title>
            <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/font-awesome.min.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/prettyPhoto.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/animate.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/main.css"); ?>" rel="stylesheet">


            <link rel="shortcut icon" href="<?php echo base_url("bootstrap/images/ico/favicon.ico"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-144-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-114-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-72-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-57-precomposed.png"); ?>">

</head><!--/head-->

<body>

    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url("bootstrap/images/logo.png"); ?>" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo site_url("welcome/index")?>">Home</a></li>
                        <li><a href="<?php echo site_url("welcome/about")?>">About Us</a></li>
                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Notifications <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/Main/ColomboHome/user"> Sign Up for Notifications </a></li>
                                                    <li><a href="/Main/8-codeigniter/index.php/blog"> Needs Forum </a></li>
                                                </ul>
                                            </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Donate <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url("guestDonation/index")?>"> Donate As A Guest </a></li>
                                <li><a href="<?php echo site_url("userDonation/index")?>"> Donate As A Registered User </a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4> Thank You for  your donation. Your donation will lead our children and elders to have a better life. </h4>
                </div>
                <div class="col-sm-12">
                    <h3> Stay in touch with Children & Elder Home of Colombo. Sign up with us. </h3>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <br/><br/>

    <div class="row">
        <div class="col-xs-4 col-xs-offset-0">
            <img src="images\elderCare.jpg">
        </div>

        <div class="col-xs-4  col-xs-offset-0">
            <section id="registration" class="container">
                <form class="center" role="form">
                    <fieldset class="registration-form">
                        <div class="form-group">
                            <label> Register Now! </label>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-md btn-block">Register</button>
                        </div>
                    </fieldset>
                </form>
            </section><!--/#registration-->
        </div>
    </div>

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <p>Pellentesque habitant morbi tristique senectus.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Conatct Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                                    <h4>Latest Blog</h4>
                                    <div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url("bootstrap/images/blog/thumb1.jpg");?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                                <small class="muted">Posted 17 Aug 2013</small>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url("bootstrap/images/blog/thumb2.jpg");?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                                <small class="muted">Posted 13 Sep 2013</small>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url("bootstrap/images/blog/thumb3.jpg");?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                                <small class="muted">Posted 11 Jul 2013</small>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url("bootstrap/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap/js/jquery.prettyPhoto.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap/js/main.js"); ?>"></script>

</body>
</html>