
@extends('frontend.layout.main')
@section('main-container')



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="{{url('frontend/img/banner2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                      <!-- <h2>log in</h2> -->

                       <div class="contact-section">
        <div class="overlay"></div>




            <!-- here-->

         <!-- Consultation Section Begin -->
         <section class="consultation_yasir" div style="text-align:center; padding:50px;  margin-left: 300px; width: 100%; -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>Required for sign up</span>

                        </div>


                        @if(Session::get('success'))
                                <div class="alert alert-success">
                                        {{ Session::get('success')}}
                                </div>
                        @endif

                        @if(Session::get('failure'))
                                <div class="alert alert-danger">
                                        {{ Session::get('failure')}}
                                </div>
                        @endif

                        <form action="SignUpFunc" method="POST" class="login">

                            @csrf

                            <input type="text" placeholder="Name" name="username" id="username" required>
                            <input type="email" placeholder="Email" name="email" id="email" required>
                            <input type="text" placeholder="Phone" name="phone" id="phone" required>
                            <input type="password" placeholder="Set Password"  name="password" required>
                            <input type="password" placeholder="Confirm Password"  name="confirmpassword" id="confirmpassword" required>

                            <button type="submit" name="submit"  class="site-btn" style="background:rgb(43, 158, 43)">Sign Up</button>
                        </form>

                        <br>
                        <br>


                    </div>
                    <div class="breadcrumb__links">

                            <span style="color: rgb(48, 162, 48);">Already have an account?</span>
                            <br>

                            <a href="/login">
                            <button class="site-btn" style="border: none; width:max-content; padding: right 500px;">Log in</button>
                            </a>
                        </div>
                </div>


            <!-- here-->






                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

@endsection
