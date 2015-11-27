<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration | ColomboHome </title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/font-awesome.min.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/prettyPhoto.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/animate.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/main.css"); ?>" rel="stylesheet">
            <link href="<?php echo base_url("bootstrap/css/datepicker.css"); ?>" rel="stylesheet">


            <link rel="shortcut icon" href="<?php echo base_url("bootstrap/images/ico/favicon.ico"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-144-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-114-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-72-precomposed.png"); ?>">
            <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("bootstrap/images/ico/apple-touch-icon-57-precomposed.png"); ?>">
    <style type="text/css">
                .error{
                    color:red;
                }
                .control-label{
                    font-size: 16px;
                    float: left;
                }
                #heading{
                    font-family:new century schoolbook;
                    	font-weight:bold;
                    	font-style: italic;
                    	color:#F7384E;
                }
                #subHeading{
                    float: left;
                    font-family:new century schoolbook;
                    font-style: italic;
                    color: #F7384E;
                }
            </style>

</head><!--/head-->

<body>

    <?php include 'pages\userDonation.php';?>

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

    <section id="registration" class="container">
        <form class="col-xs-12 col-xs-offset-0 center" role="form" method="POST">
                    <fieldset class="registration-form">

                    <div id="heading">
                        <h1>Donation </h1>
                        <p> Your support for Children & Elder Home of Colombo helps us to provide a better life for them. </p>

                        <br/>
                    </div>

                        <!-- Donation amount -->
                                <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-xs-4"> Select Gift Amount: </label>
                                            <div class="col-xs-6 col-xs-offset-2">
                                                <input type="text" name="amount" value="<?php echo $amount; ?>"/>
                                                <span class="error">* <?php echo $amountErr; ?> </span>
                                                <br><br>
                                            </div>
                                        </div>
                                 </div>



                        <div class="row">
                                                    <hr>
                                                </div>

                                                <div class="row">
                                                    <h3 id="subHeading"> PAYMENT INFORMATION </h3>
                                                </div>

                                                <br/>

                                    <div class="row">
                                        <img src="<?php echo base_url("bootstrap/images/creditCards.gif"); ?>" style="float:left;" />
                                        <br/><br/>
                                    </div>

                                        <!--Credit Card Number-->
                                        <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-xs-4"> Credit Card Number: </label>
                                            <div class="col-xs-6 col-xs-offset-2">
                                                <input type="text" name="cNum" value="<?php echo $cNum; ?>" maxlength="20" />
                                                <span class="error">* <?php echo $cNumErr; ?> </span>
                                                <br><br>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                            <label class="control-label col-xs-4"> Expiration Date: </label>
                                            <div class="col-xs-6 col-xs-offset-2">
                                                <input type="text" id="datepicker" name = "expiryDate"/>
                                                <span class="error">* <?php echo $expiryDateErr; ?> </span>
                                                <br><br>
                                            </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <hr>
                                    </div>

                                    <div class="row">
                                        <h3 id="subHeading"> DONATION INFORMATION </h3>
                                    </div>

                                    <br/>

                                        <!--Comments-->
                                        <div class="row">
                                        <div class="form-group">
                                            <label class="control-label col-xs-4"> Message : </label>
                                            <div class="col-xs-6 col-xs-offset-2">
                                                <textarea type="text" name="comment" value="<?php echo $comment; ?>"> </textarea>
                                                <br><br>
                                            </div>
                                        </div>
                                        </div>

                        <!--form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                        ">
                        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form-->

                        <div class="form-group">
                                                            <div class="col-xs-11 col-xs-offset-1">
                                                                <button class="btn btn-success" type="submit" value="Donate Now"> Donate Now </button>
                                                            </div>
                                                        </div>
                    </fieldset>
                </form>
    </section><!--/#registration-->

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
        <script src="<?php echo base_url("bootstrap/js/bootstrap-datepicker.js"); ?>"></script>


    <script type=text/javascript>
        $('#datepicker').datepicker({
            format: 'mm-dd-yyyy'
        });
    </script>
</body>
</html>