<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Dominion Finance Corporation</title>
    
    <!-- Fav Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/spacing.min.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<body>
    <div class="page-wrapper">
        
        <!-- Preloader -->
        <div class="preloader"></div>
        
        <!--==================================================================== 
            Start Header area
            =====================================================================-->
            <header class="main-header">
                
                <div class="header-top bg-orange">
                    <div class="container">
                        <div class="top-inner">
                            <ul class="top-left" style="margin-top: 5px;">
                                <li><i class="fas fa-envelope"></i> <a href="mailto:support@dominionfinance.com" target="_blank">support@dominionfinance.com</a></li>
                                <li><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/w44VJoWjCAeREjYw9" target="_blank">Berlin, Germany.</a></li>
                            </ul>
                            
                            <div class="top-right ml-auto">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="container clearfix">
                        
                        <div class="header-inner d-lg-flex align-items-center">
                            
                            <div class="logo-outer d-flex align-items-center">
                                <div class="logo"><a href="index.php"><img src="assets/images/logo-1.png" alt="Logo" title="Dominion Finance"></a></div>
                            </div>
                            
                            <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-lg">
                                    <div class="navbar-header clearfix">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <?php
                                    $page = basename($_SERVER['PHP_SELF']);
                                    switch ($page) {
                                        case 'index.php': ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li><a href="404.php">AUM</a></li>
                                            </ul>
                                        </div>
                                        <?php break; ?>
                                        <?php
                                        case 'about.php': ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li class="current-menu-item"><a href="about.php">About</a></li>
                                                <li><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li><a href="404.php">AUM</a></li>
                                            </ul>
                                        </div>
                                        <?php break; ?>
                                        <?php
                                        case 'service-details.php': ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li class="current-menu-item"><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li><a href="404.php">AUM</a></li>
                                            </ul>
                                        </div>
                                        <?php break; ?>
                                        <?php
                                        case 'contact.php': ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li> -->
                                                <li class="current-menu-item"><a href="contact.php">Contact Us</a></li>
                                                <li><a href="404.php">AUM</a></li>
                                            </ul>
                                        </div>
                                        <?php break; ?>
                                        <?php
                                        case 'aum.php': ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li class="current-menu-item"><a href="404.php">AUM</a></li>
                                            </ul>
                                        </div>
                                        <?php break;
                                        default: ?>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="service-details.php">Services</a></li>
                                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="case-details.php">Case Details</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                    </ul>
                                                </li>
                                            -->
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="404.php">AUM</a></li>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                    
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            
                            <div class="menu-number">
                                <i class="fas fa-phone-alt"></i> <a href="tel:+492115861942" style="text-decoration: none;color: #fe6600">+492115861942</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--End Header Upper-->
            </header>
            <!--==================================================================== 
                End Header area
                =====================================================================-->