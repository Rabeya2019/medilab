@extends('frontend.layout.main');
@section('main-container');


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span style="color: rgb(48, 162, 48) ;">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Address</h5>
                            <p> Road#27, Lalmatia, Dhaka-1207 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Hotline</h5>
                            <p>01235667765 • 0175546688</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Email</h5>
                            <p>Support@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact__content">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__pic">
                            <img src="img/contact-pic.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <h3>Get in touch</h3>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Website">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
