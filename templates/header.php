<?php
/*
 * File: header.php
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 27-Jan-2016 00:22:31
 * 
 * Purpose: Header and navigation template
 * 
 * Modification History:
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/SkyLEDPanels2/public/assets/favicons/favicon.ico">
        <title>Sky LED Panels - Home Page</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/SkyLEDPanels2/public/assets/css/styles.css">
        <link rel="stylesheet" href="/SkyLEDPanels2/public/assets/css/showhidepass.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Javascripts -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/SkyLEDPanels2/public/assets/js/resizemain.js"></script>
    </head>
    <body>
        <div id="mywrapper"> 
            <header>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" 
                                    class="navbar-toggle collapsed" 
                                    data-toggle="collapse" 
                                    data-target="#collapsemenu"
                                    aria-expanded="false">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>   
                            <a href="/index.php" class="navbar-brand">
                                <img src="/SkyLEDPanels2/public/assets/images/LED4.jpg" class="pull-left" alt="Sky LED Panels - Branding">
                                Sky LED Panels
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="collapsemenu">
                            <ul class="nav navbar-nav">
                                <li id="index" class="active"><a href="/SkyLEDPanels2/public/index.php">Home</a></li>
                                <li class="dropdown" id="thecompany">
                                    <a href="#" class="dropdown-toggle SM" data-toggle="dropdown">The Company<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li id="aboutus"><a href="/SkyLEDPanels2/public/aboutus.php">About Us</a></li>
                                        <li id="contactus"><a href="/SkyLEDPanels2/public/contactus.php">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" id="products">
                                    <a href="#" class="dropdown-toggle SM" data-toggle="dropdown">Products<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="/SkyLEDPanels2/public/skyledpanels.php">Sky LED Panels</a></li>
                                       <li><a href="/SkyLEDPanels2/public/wallpanels.php">Wall Panels Panels</a></li>
                                       <li><a href="/SkyLEDPanels2/public/bespokedesigns.php">Bespoke Designs</a></li>
                                       <li><a href="/SkyLEDPanels2/public/specifications.php">Specifications</a></li>
                                       <li><a href="/SkyLEDPanels2/public/installation.php">Installation</a></li>
                                       <li><a href="/SkyLEDPanels2/public/pricinganddelivery.php">Pricing &amp; Delivery</a></li>
                                    </ul>
                                </li>                                
                                <li id="gallery"><a href="/SkyLEDPanels2/public/gallery.php">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


