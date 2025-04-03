
@include('partials.navbar')



    <div class="breadcumb-wrapper " data-bg-src="assets/img/img_2.jpeg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!--==============================
Contact Info Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-info text-center">
                        <div class="contact-info_icon">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title">Our Office Address</h4>
                            <span class="contact-info_text">835 Middle Country Rd, Selden, NY 11784, United States</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-info text-center">
                        <div class="contact-info_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title">Call Us Anytime</h4>
                            <span class="contact-info_text">
                                <a href="mailto:info.example@gmail.com">help24/7@gmail.com</a>
                                <a href="tel:+163-1202-0088">(+163)-1202-0088</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-info text-center">
                        <div class="contact-info_icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title">Work Time</h4>
                            <span class="contact-info_text">9:00am - 6:00pm ( Monday - Friday ) Saturday & Sunday Half Day</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="space-bottom overflow-hidden" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-image">
                        <img src="assets/img/img_26.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area mt-n1 mb-35">
                        <span class="sub-title style1">Get In Touch</span>
                        <h2 class="sec-title">Let’s Talk to an expert</h2>
                        <p class="">Efficiently integrate wireless value whereas cross-platform e-tailers.</p>
                    </div>
                    <form action="mail.php" method="POST" class="contact-us-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fa-regular fa-phone-flip"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Subject</option>
                                    <option value="Contemporary">Contemporary</option>
                                    <option value="Ballet">Ballet</option>
                                    <option value="Hip-hop">Hip-hop</option>
                                    <option value="Classic">Classic</option>
                                    <option value="Modern">Modern</option>
                                    <option value="Kid’s">Kid’s</option>
                                    <option value="Pole Dance">Pole Dance</option>
                                    <option value="Tango">Tango</option>
                                    <option value="Pole Dance">Bachata</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="contact-form-btn col-12">
                                <button class="th-btn">Send Message</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="shape-mockup ripple-animation d-none d-xl-block" data-bottom="15%" data-left="5%"><img src="assets/img/shape/shape_7.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="-45%" data-right="0%"><img src="assets/img/shape/contact_shape.svg" alt="shape"></div>

    </div>
    <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sThemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>



@include('partials.footer')