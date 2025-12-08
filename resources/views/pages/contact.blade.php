<x-layout>
    <!-- contact area start -->
    <section class="tp-section-area p-relative z-index-1 tp-section-spacing">
        <div class="tp-section-bg include-bg" data-background="assets/img/contact/contact-bg.png"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="tp-section-wrapper-2 text-center">
                        <span class="tp-section-subtitle-2 subtitle-mb-9">GET TO KNOW US</span>
                        <h3 class="tp-section-title-2 font-70">Have a project in mind? Let’s talk.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->

    <div class="contact__item-area contact__translate-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon">
                            <img src="assets/img/contact/contact-icon-1.png" alt="">
                        </div>
                        <div class="contact__content">
                            <span class="contact-item-subtitle">Contact</span>
                            <p><a href="mailto:contact@tasmemstudio.com">contact@tasmemstudio.com</a></p>
                            <p> <a href="tel:201554981497">+20 155 498 1497</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon">
                            <img src="assets/img/contact/contact-icon-3.jpg" width="100" height="100" alt="">
                        </div>
                        <div class="contact__content">
                            <span class="contact-item-subtitle">Whatsapp</span>
                            <p> <a href="https://wa.me/201554981497" target="_blank">+20 155 498 1497</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon">
                            <img src="assets/img/contact/contact-icon-2.png" alt="">
                        </div>
                        <div class="contact__content">
                            <span class="contact-item-subtitle">Social Media</span>
                            <p>Follow on social media</p>
                            <div class="contact__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact form area start -->
    <section class="contact__form-area pt-90" style="padding-bottom: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__form-2">
                        <h3 class="contact__form-2-title">Send a message</h3>
                        <form id="contact-form" action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact__input-2">
                                        <input name="name" type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact__input-2">
                                        <input name="email" type="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact__input-2">
                                        <input name="phone" type="text" placeholder="Mobile no" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="contact__input-2">
                                        <textarea name="message" placeholder="Your message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="contact__btn-2">
                                        <button type="submit" class="tp-btn">Send Message</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <p class="ajax-response" style=" 
	margin-top: 15px;
	font-size: 16px;
	font-weight: bold;
"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form area end -->


</x-layout>