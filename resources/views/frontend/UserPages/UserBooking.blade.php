@extends('frontend.user.usermain')
@section('main-container')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="{{url('frontend/img/banner6.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: rgb(30, 27, 27)">Our Services</h2>
                        <div class="breadcrumb__links">
                            <a href="./index">Home</a>
                            <span style="color: green"> Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

        <!-- Pricing Section Begin -->
        <section class="pricing spad" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pricing__item">
                            <div class="pricing__item__title">
                                {{-- <p>MEDICAL TEST</p> --}}
                                <h3>DOMESTIC MEDICAL TEST & CHECKUP<span>one-stop Appontment for Medical test and checkup at home</span></h3>
                            </div>
                            <ul>
                                <li>
                                    <h6>Order Test (Hospitalwise)</h6>
                                    {{-- <span>1000BDT/-</span> --}}
                                </li>
                                <li>
                                    <h6>Order Medical Checkup (General/Hospitalwise)</h6>
                                    {{-- <span>1000BDT/-</span> --}}
                                </li>
                                <li>
                                    <h6>Emergency Physiotherapy (According to need)</h6>
                                    {{-- <span>10000BDT/-</span> --}}
                                </li>

                            </ul>


                            <a href="#" class="primary-btn" style="background-color: rgb(43, 158, 43); border: none;color: white">Browse</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pricing__item">
                            <div class="pricing__item__title">
                                {{-- <p>Medicine</p> --}}
                                <h3>EMERGENCY BLOOD BANK SERVICE<span>Donate or receive blood via reputed institutes/Organizations</span></h3>
                            </div>
                            <ul>
                                <li>
                                    <h6>Donate Blood (Volunteers Team respective to locations)</h6>
                                    {{-- <span>10000BDT</span> --}}
                                </li>
                                <li>
                                    <h6>Emergency Blood Availability (Goranization/Hospital)</h6>
                                    {{-- <span>1000BDT</span> --}}
                                </li>
                                <li>
                                    <h6>Donor Recruitment (Upto-date donor list)</h6>
                                    {{-- <span>100000</span> --}}
                                </li>

                            </ul>


                            <a href="#" class="primary-btn" style="background-color: rgb(43, 158, 43); border: none;color: white">Browse</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pricing__item">
                            <div class="pricing__item__title">
                                {{-- <p>FACIAL PROCEDURES</p> --}}
                                <h3>EQUIPMENT AND FUND DONATION<span>Emergency necessities and financial donations from Organizations</span></h3>
                            </div>
                            <ul>
                                <li>
                                    <h6>Donate Fund (Organization/Hospital)</h6>
                                    {{-- <span>1000000</span> --}}
                                </li>
                                <li>
                                    <h6>Apply for Fund (Emergency Application)</h6>
                                    {{-- <span>100000</span> --}}
                                </li>
                                <li>
                                    <h6>Donate Equipments (For Hospitals only)</h6>
                                    {{-- <span>1000000</span> --}}
                                </li>

                            </ul>

                            <a href="#" class="primary-btn" style="background-color: rgb(43, 158, 43); border: none; color: white">Browse</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->
@endsection
