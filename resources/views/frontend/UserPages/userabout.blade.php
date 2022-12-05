@extends('frontend.user.usermain')
@section('main-container')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="{{url('frontend/img/banner2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: rgb(44, 51, 44);">About Us</h2>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span style="color: rgb(48, 162, 48) ;">About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__video set-bg" data-setbg="{{url('frontend/img/about-video.jpg')}}">
                        <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>ABOUT OUR CLINIC</span>
                            <h2>All you need to know about <b>MEDILAB</b></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                            <li><i class="fa fa-check-circle"></i> Excellence in Healthcare everyday </li>
                            <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                        </ul>
                        <a href="#" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>Offer for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="{{url('frontend/img/icons/ci-1.png')}}" alt="">
                        <h5>Safe Home Sample Collection</h5>
                        <p>Authorized and experienced Assistance will be provided to collect sample from home.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="{{url('frontend/img/icons/ci-2.png')}}" alt="">
                        <h5>Offers And Affordable Prices</h5>
                        <p>Budget filters for Tests and generically budget-friendly service. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="{{url('frontend/img/icons/ci-3.png')}}" alt="">
                        <h5>Get Digital Report Within 3 Days</h5>
                        <p>Test repors will be provided through emails, messages and deliver hardcopy at your door-step <p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="{{url('frontend/img/icons/ci-4.png')}}" alt="">
                        <h5>Emergency care</h5>
                        <p>Any emergency needs/services can be accesed or aquired within the area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Testimonials Section Begin -->
    {{-- <section class="testimonials spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>Happy clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Catanis Greimar</h5>
                                    <span>Businesswoman</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonials Section End -->

    <!-- Team Section Begin -->
    <!-- <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-1.jpg" alt="">
                        <h5>Caroline Grant</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-2.jpg" alt="">
                        <h5>Dr. Maria Angel</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-3.jpg" alt="">
                        <h5>Nathan Mullins</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Team Section End -->
@endsection
