<?php require 'inc/header.php'; ?>

        <!--==================================================================== 
            Start Page Banner Section
            =====================================================================-->
            <section class="page-banner overlay">
                <div class="container">
                    <div class="banner-inner">
                        <h2 class="wow fadeInUp" data-wow-duration="1.5s">Contact Us.</h2>
                        <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
        <!--==================================================================== 
            End Page Banner Section
            =====================================================================-->


        <!--==================================================================== 
            Start Get In Touch Section
            =====================================================================-->
            <section class="get-in-touch py-150 rpy-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-sidebar">
                                <div class="sidebar-widget bg-snow">
                                    <h3>Location:</h3>
                                    <ul>
                                        <h6>European Headquarter</h6>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="right-content">
                                                Gelsenkirchener Strasse 6, 40472 Düsseldorf, Germany.
                                            </div>
                                        </li>
                                        <h6>USA Registered Address</h6>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="right-content">
                                                DOMINION FINANCE CORPORATION INC.
                                                Street Address: 108 West 13th Street 
                                                Wilmington Delaware 19801
                                                United States of America
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="right-content">
                                                <a href="tel:+492115861076">+492115861076</a><br>
                                                <a href="tel:+492115861942">+492115861942</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="right-content">
                                                <a href="mailto:info@domain.com">info@domain.com</a><br>
                                                <a href="mailto:support@domain.com">support@domain.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-widget bg-black text-white">
                                    <h3>Location: 02</h3>
                                    <ul>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="right-content">
                                                61 South Big Rock Cove Zurich, Villad 60047
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <style type="text/css">
                                                .right-content a{
                                                    text-decoration: none;
                                                    color: #fe6600;
                                                }
                                            </style>
                                            <div class="right-content">
                                                <a href="callto:+88999666444">+88-999-666-444</a><br>
                                                <a href="callto:+88888555777">+88-888-555-777</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="right-content">
                                                <a href="mailto:info@domain.com">info@domain.com</a><br>
                                                <a href="mailto:support@domain.com">support@domain.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-title">
                                <h2>Get In <span>Touch.</span></h2>
                            </div>
                            <p>We would lpve to hear from you, please drop us a message if you have any query.</p>
                            <form id="call-back-form" class="call-back-form" name="call-back-form" action="scripts/contact-form.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6">        
                                        <div class="form-group">
                                            <input type="text" name="full-name" class="form-control" value="" placeholder="Name Here" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email-address" class="form-control" value="" placeholder="Email Here" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">        
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" value="" placeholder="Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-40">        
                                        <div class="form-group">
                                            <textarea name="form-message" rows="7" class="form-control" placeholder="Text here..."></textarea>
                                        </div>
                                    </div>                                              
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <!--==================================================================== 
            End Get In Touch Section
            =====================================================================-->


        <!--==================================================================== 
            Start Map Section
            =====================================================================-->
            <div class="contact-map pb-150 rpb-100">
                <div class="container">
                    <div class="map-inner">
                        <div class="map" id="map"></div>
                    </div>
                </div>
            </div>
        <!--==================================================================== 
            End Map Section
            =====================================================================-->


            <?php require 'inc/cta.php'; ?>

            <?php require 'inc/footer.php'; ?>