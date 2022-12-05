<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEDILAB</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}" type="text/css">



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay" ></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html">
                <img src="{{url('frontend/img/LOGO-nbg.png')}}" alt="">

            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Appointment</a>
        </div>
        <ul class="offcanvas__widget"  >
            <li ><i class="fa fa-phone"></i> 01949039887</li>
            <li><i class="fa fa-map-marker"></i> Road#27, Lalmatia, Dhaka-1207</li>
            <li><i class="fa fa-clock-o"></i> 24Hours Available</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top"  style="background-color: rgb(26, 77, 26) ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> 01949039887</li>
                            <li><i class="fa fa-map-marker"></i> Road#27, Lalmatia, Dhaka-1207 </li>
                            <li><i class="fa fa-clock-o"></i>24Hours Available</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"  >
            <div class="row"  >
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a style="color: Green; font-size: 20px;" href="/user"><img style="width: 70px;" src="{{url('frontend/img/LOGO-nbg.png')}}" alt="">MEDILAB</a>
                    </div>
                </div>
                <div class="col-lg-10" style=" padding-top:20px;">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <!-- {{-- class="active" --}} -->
                                <li ><a href="/user">Home</a></li>
                                <li><a href="/userabout">About</a></li>
                                <li><a href="/userservice">Services</a></li>
                                <!-- {{-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./pricing.htm-l">Pricing</a></li>
                                        <li><a href="./doctor.htm-l">Doctor</a></li>
                                        <li><a href="./blog-details.htm-l">Blog Details</a></li>
                                    </ul>
                                </li> --}} -->

                                <!-- <i class="fas fa-angle-down drop-icon"></i> -->
                                <li><a href="#">Profile<i class="fas fa-angle-down drop-icon"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="./pricing.htm-l">My profile</a></li>
                                        <li><a href="./doctor.htm-l">My Order History</a></li>
                                        <li><a href="./blog-details.htm-l">My Cart</a></li>
                                        <li><a href="./blog-details.htm-l">Logout</a></li>

                                    </ul>
                                </li>
                                <!-- <i class="fas fa-angle-down drop-icon"></i>  -->

                                <!-- NOTIFICATION ICON WITH MODAL-->
                                <a href="" data-toggle="modal" data-target="#exampleModalLong"><i class="fa-solid fa-bell"></i></a>




                                <!-- Button trigger modal -->
                                <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">NOTIFICATIONS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: left">
          ..HERE WILL BE A NOTIFICATION TABLE.
          <hr>
          <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
          <hr>
          <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


                                <!-- CART ICON -->

                                <!-- <i class="fa-sharp fa-solid fa-cart-plus"></i> -->


                                <!-- <li><a href="./blog.html">News</a></li> -->
                             {{-- <li><a href="./contact.blade.p-hp">Contact</a></li> --}}

                                    {{-- <a href="#profile" class="primary-btn ">Profile<i class="fas fa-angle-down drop-icon"></i></a>
                                    <ul class="dropdown">
                                    <li><a href="#userprofile">My profile</a></li>
                                    <li><a href="#Userhistory">My Order History</a></li>
                                    <li><a href="#usercart">My Cart</a></li>
                                    <li><a href="#logout">logout</a></li>
                                    </ul> --}}


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
