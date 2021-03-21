<!--==================================================================== 
            Start Call Back Section
        =====================================================================-->
<section class="call-back-section text-white py-150 rpt-90 rpb-100">
    <div class="call-back-shap"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title wow fadeInUp" data-wow-duration="2s">
                    <h2>Request A Call Back.</h2>
                    <p>Let's talk your business today, submit your details and we will contact you right away. </p>
                </div>
            </div>
            <div class="col-lg-6">
                <form id="call-back-form" class="call-back-form" name="call-back-form" action="scripts/callback-processor.php" method="post">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="" placeholder="Email Here" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="" placeholder="Phone No.">
                            </div>
                        </div>
                    </div>
                    <div class="form-group call-submit text-center">
                        <button class="theme-btn" type="submit" name="callback-btn">Submit Now <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Call Back Section
        =====================================================================-->