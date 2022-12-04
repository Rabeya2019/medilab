
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
         <section class="consultation_yasir"  style="text-align:center; padding:50px;  margin-left: 400px; width: 100%; -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>Log In Here</span>

                        </div>

                        @if(Session::get('LogInFailed'))
                                <div class="alert alert-danger">
                                        {{ Session::get('LogInFailed')}}
                                </div>
                        @endif

                        <form action="LogInFunc" method="POST" class="login">
                        @csrf
                            <input type="email" placeholder="Email" name="email"  required>
                            <input type="password" placeholder="Password"  name="password"  required>

                            <button type="submit" name="submit"  class="site-btn" style="background:rgb(43, 158, 43)">Log in</button>
                        </form>
                        <div class="breadcrumb__links">
                            <a href="login.blade.php"><span style="color: rgb(48, 162, 48) ;">Forget Password?</span></a>
                        </div>
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

