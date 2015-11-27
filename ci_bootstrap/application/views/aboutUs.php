<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | ColomboHome </title>
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
                <div class="col-sm-6">
                    <h1>About Us</h1>
                    <p>What we are and what we do...</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>What we are</h2>
                <p><b>"Colombo municipal home is a residance for children age 5-18 who are provided with shelter, food, an education, and access to medical treatment.And also a home for the plight of destitute senior citizens with no means of support.The children attend a nearby school, participate in extra-curricular activities, are offered religious instruction in the faith of their family, and interract with the elders of Home.  
                Elder Home opened in May 2005 and in 2013, includes more than 40 seniors able to live out their lives in peace and dignity.

Elder Home provides a home, meals and medical care to residents referred by various social groups or agencies. In recent years Mercy Home has been named among the best facilities of its kind in the nation."</b></p>
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
                <h2>Our Targets</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span>Protect Children</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span>Protect Elders</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>People can join and Contribute</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            <span>Donate</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span>Discuss</span>
                        </div>
                    </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        <div class="gap"></div>
        <h1 class="center">Meet the Team</h1>
        <p class="lead center">We are like to see you</p>
        <div class="gap"></div>

        <div id="meet-the-team" class="row">
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url("bootstrap/images/member.jpg");?>" alt="" ></p>
                    <h5>D.M.wijerathne<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url("bootstrap/images/member.jpg");?>" alt="" ></p>
                    <h5>D.M.wijerathne<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url("bootstrap/images/member.jpg");?>" alt="" ></p>
                    <h5>D.M.wijerathne<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url("bootstrap/images/member.jpg");?>" alt="" ></p>
                    <h5>D.M.wijerathne<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div><!--/#meet-the-team-->
    </section><!--/#about-us-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Colombo municipal home is a residance for children age 5-18 who are provided with shelter, food, an education, and access to medical treatment.And also a home for the plight of destitute senior citizens with no means of support</p>
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
                        <strong>73</strong><br>
                        Wickramasinhapura<br>
                        Baththaramulla<br>
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