<!DOCTYPE html>
<html>
<head>
    @include('WEB_Components.head')
</head>
<body>
    @include('WEB_Components.header')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">HAVE A QUESTION?<br>WE HAVE AN ANSWER.</h3>
                                <div class="sub-heading">Get in touch with us.</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="assets/php/mail.php" method="post" novalidate="novalidate">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="name" type="text" placeholder="Name *" required="">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="email" type="email" placeholder="Email *" required="">
                                            </div>
                                        </div>
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="phone_number" type="text" placeholder="Phone Number..." required="">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="company" type="text" placeholder="Company Name" required="">
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message" placeholder="Brief Message..." required=""></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Services Inquiries</h5>
                                <ul class="conact-info__list">
                                    <li><a href="#" class="hover-style-link">services@ampiOsolutions.com</a></li>
                                    <li><a href="#" class="hover-style-link font-weight--bold">(214) 295-2915 x118</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Sales Inquiries</h5>
                                <ul class="conact-info__list">
                                    <li><a href="#" class="hover-style-link">services@ampiOsolutions.com</a></li>
                                    <li><a href="#" class="hover-style-link font-weight--bold">(214) 295-2915 x116</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Support Inquiries</h5>
                                <ul class="conact-info__list">
                                    <li><a href="#" class="hover-style-link">services@ampiOsolutions.com</a></li>
                                    <li><a href="#" class="hover-style-link font-weight--bold">(214) 295-2915 x117</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="conact-info-wrap">
                                <h5 class="heading mb-20">Address</h5>
                                <ul class="conact-info__list">
                                    <li>325 North Saint Paul Street, Suite 2600 Dallas, TX  75201</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">Get Directions</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">LEVERAGE OUR <span class="text-color-primary">EXPERIENCE</span> AND <span class="text-color-primary">EXPERTISE</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon me-2"></span> Partner with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('WEB_Components.footer')

    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>

    @include('WEB_Components.scripts')

</body>
</html>
