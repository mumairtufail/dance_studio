<!--==============================
	Footer Area
==============================-->

<style>
/* Fix Text Colors for Black Background */
@media (max-width: 767px) {
    /* Scroll Top Button Positioning */
    .scroll-top {
        width: 40px !important;
        height: 40px !important;
        right: 15px !important;
        bottom: 15px !important;
        position: fixed !important;
        z-index: 999 !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    .scroll-top svg {
        width: 40px !important;
        height: 40px !important;
    }
    
    /* Fix SVG visibility and color */
    .scroll-top path {
        stroke-width: 2px !important;
        stroke: #ff3e3e !important; /* Red circle border */
    }
    
    /* Add background for better visibility */
    .scroll-top:before {
        content: "" !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: rgba(0, 0, 0, 0.5) !important;
        border-radius: 50% !important;
        z-index: -1 !important;
    }
    
    /* Add red arrow inside the circle */
    .scroll-top:after {
        content: "↑" !important;
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
        color: #ff3e3e !important;
        font-size: 20px !important;
        font-weight: bold !important;
        z-index: 1 !important;
    }
    
    /* Add footer top margin on mobile */
    .footer-wrapper {
        margin-top: 200px !important;
    }
    
    /* Make the logo smaller */
    .footer-wrapper .about-logo img {
        max-width: 120px !important;
        height: auto !important;
        padding: 20px;
        margin-left: 30vw;
    }
    
    /* Fix text colors for black background */
    .footer-wrapper {
        color: #ffffff !important;
    }
    
    .footer-wrapper .about-text {
        color: #ffffff !important;
    }
    
    .footer-wrapper .widget_title {
        color: #ff3e3e !important; /* Red color for titles */
        margin-bottom: 15px !important;
    }
    
    .footer-wrapper .title {
        color: #ff3e3e !important; /* Red color for titles */
    }
    
    .footer-wrapper .social-title {
        color: #ff3e3e !important; /* Red color for titles */
    }
    
    .footer-wrapper .desc {
        color: #ffffff !important;
    }
    
    /* Menu links */
    .footer-wrapper .menu li a {
        color: #ffffff !important;
    }
    
    .footer-wrapper .menu li a:hover {
        color: #ff3e3e !important; /* Red color on hover */
    }
    
    /* Contact info */
    .footer-wrapper .info-box_text,
    .footer-wrapper .info-box_link {
        color: #ffffff !important;
    }
    
    .footer-wrapper .info-box_link:hover {
        color: #ff3e3e !important; /* Red color on hover */
    }
    
    /* Contact icons */
    .footer-wrapper .info-box_icon i {
        color: #ff3e3e !important; /* Red color for icons */
    }
    
    /* Social icons */
    .footer-wrapper .th-social a {
        color: #ffffff !important;
        background-color: rgba(255, 255, 255, 0.1) !important;
    }
    
    .footer-wrapper .th-social a:hover {
        color: #ffffff !important;
        background-color: #ff3e3e !important; /* Red background on hover */
    }
    
    /* Copyright section */
    .copyright-wrap {
        color: #ffffff !important;
    }
    
    .copyright-wrap a {
        color: #ff3e3e !important; /* Red color for links */
    }
    
    .copyright-wrap a:hover {
        color: #ffffff !important;
    }
}
</style>
<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/img_10.jpeg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="assets/img/Logo_Spandan_2.png" alt="Danza"></a>
                                </div>
                               <p class="about-text">Dedicated to the art of dance, we inspire students of all ages to discover their creative potential in a supportive and professional environment.</p>
                                <div class="th-social-wrapper">
                                    <div class="office-hour">
                                        <h4 class="title">opening hour:</h4>
                                        <span class="desc">Monday to Saturday 10:00 AM - 09:00 PM</span>
                                    </div>
                                    <div class="th-social">
                                        <h6 class="social-title">Follow Us:</h6>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.google.com/"><i class="fa-brands fa-google"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Now</h3>
                            <div class="th-widget-contact">
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    </div>
                                    <p class="info-box_text">
                                        835 Middle Country Rd, NY 11784, USA
                                    </p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <p class="info-box_text">
                                        <a href="tel:+(163)-1202-0088" class="info-box_link">+(163)-1202-0088</a>
                                        <a href="tel:+(163)-1202-0099" class="info-box_link">+(163)-1202-0099</a>
                                    </p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <p class="info-box_text">
                                        <a href="mailto:help24/7@gmail.com" class="info-box_link">help24/7@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6 col-xl-3">-->
                    <!--    <div class="widget footer-widget">-->
                    <!--        <h3 class="widget_title">Newsletter</h3>-->
                    <!--        <form class="newsletter-widget">-->
                    <!--            <p class="footer-text">Sign Up to get updates & news about us.</p>-->
                    <!--            <div class="form-group">-->
                    <!--                <input class="form-control" type="email" placeholder="Enter your email" required="">-->
                    <!--            </div>-->
                    <!--            <button type="submit" class="th-btn red-btn style5 btn-fw">SUBSCRIBE NOW</button>-->
                    <!--        </form>-->
                    <!--    </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025
                            By
                            <a href="#">SpandanArts</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-copyright-right">
                            <ul>
                                <li><a href="terms-conditions.html">Terms of use </a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- imagesloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope pkgd -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Tweenmax File -->
    <script src="assets/js/tweenmax.min.js"></script>
    <!-- Tweenmax File -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>