<?php require 'inc/header.php'; ?>
<style type="text/css">
                                                .right-content a{
                                                    text-decoration: none;
                                                    color: #fe6600;
                                                }
                                            </style>
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
                                    <h3>European Headquarter</h3>
                                    <ul>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="right-content">
                                                Gelsenkirchener Strasse 6, 40472 Düsseldorf, Germany.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="right-content">
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
                                    <h3>USA Registered Address</h3>
                                    <ul>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-title">
                                <h2>Get In <span>Touch.</span></h2>
                            </div>
                            <p>We would love to hear from you, please drop us a message if you have any query.</p>
                            <form id="call-back-form" class="call-back-form" name="call-back-form" action="scripts/contact-form.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6">        
                                        <div class="form-group">
                                            <input type="text" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email-address" class="form-control" value="" placeholder="someone@example.com" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">        
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" value="" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-40">        
                                        <div class="form-group">
                                            <textarea name="form-message" rows="5" class="form-control" placeholder="Message"></textarea>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2297.2096641390126!2d6.809839376634464!3d51.264199167238225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8c9a7dac98211%3A0x48452953520a61c!2sGelsenkirchener%20Str.%2C%2040472%20D%C3%BCsseldorf%2C%20Germany!5e0!3m2!1sen!2sae!4v1616298517701!5m2!1sen!2sae" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        <!--==================================================================== 
            End Map Section
            =====================================================================-->


            <?php require 'inc/footer.php'; ?>