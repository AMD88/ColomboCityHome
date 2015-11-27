<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration | Flat Theme</title>
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>images/ico/apple-touch-icon-57-precomposed.png">
</head>
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
                <a class="navbar-brand" href="/Main/ci-bootstrap/index.php"><img src="<?php echo base_url()?>images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/main/ci_bootstrap/">Home</a></li>
                    <li><a href="/main/ci_bootstrap/index.php/welcome/about">About Us</a></li>
                    <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Notifications <i class="icon-angle-down"></i></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="/Main/ColomboHome/user"> Sign Up for Notifications </a></li>
                                                                        <li><a href="/Main/8-codeigniter/blog"> Needs Forum </a></li>
                                                                    </ul>
                                                                </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Donate <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/main/ci_bootstrap/index.php/guestDonation/index"> Donate As A Guest </a></li>
                                                    <li><a href="/main/ci_bootstrap/index.php/userDonation/index"> Donate As A Registered User </a></li>
                                                </ul>
                                            </li><li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Home in Need </h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada hey</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blog Item</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
<body>

	<div class="container">

		<h1>Needs Forum</h1>
		<h3><?php echo anchor('blog/create', 'Add Post'); ?></h3>
		<hr />
