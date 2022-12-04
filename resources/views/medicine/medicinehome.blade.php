@extends('medicine.medlayout.medmain')
@section('main-container')
    <!-- END nav -->
    <section id="home-section" class="hero ">
		  <div class="home-slider owl-carousel ">
            <div class="slider-item set-bg" data-setbg="{{url('med/images/background5.jpg')}}">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Get Medicines Delivered At Your Doorstep</h1>
	              <h2 class="subheading mb-4">We deliver Authentic Medicines  &amp; FirstAid products</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item set-bg" data-setbg="{{url ('med/images/background6.jpg')}}">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Authentic &amp; Convenient</h1>
	              <h2 class="subheading mb-4">We deliver Authentic Medicines  &amp; FirstAid products</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
		<br>
		<hr size="8" color="black">
		<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over 1000 TK</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-check"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Safe Delivery</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
			<hr size="8" color="black">

		</section>
		{{-- <br> --}}

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex set-bg"  data-setbg="{{url('med/images/backg2.jpg')}}">
									<div class="text text-center">
										<h2>Medicines</h2>
										<p>Protect the health of every home</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end set-bg"  data-setbg="{{url('med/images/tabletbg1.jpg')}}">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Tablets & Capsules</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end set-bg"  data-setbg="{{url('med/images/syrupbg2.jpg')}}">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Syrups</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end set-bg"  data-setbg="{{url('med/images/firstaid1.jpg')}}">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">FirstAid</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end set-bg"  data-setbg="{{url('med/images/insulin1.jpg')}}">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Others</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section">
				<div class="container">
						<div class="row justify-content-center mb-3 pb-3">
				  <div class="col-md-12 heading-section text-center ftco-animate">
					  <span class="subheading">Featured Products</span>
					<h2 class="mb-4">Our Products</h2>
				  </div>
				</div>   		
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/tablet1.jpg')}}" alt="">
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Ace plus</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc">120.00 TK</span><span class="price-sale">80.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/pill1.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Anxitol</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/syrup5.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Napa</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/s4.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Ontin</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
		
		
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/insulin2.jpg')}}" alt="">
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Ansulin</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc">120.00 TK</span><span class="price-sale">80.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/insulin3.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Larsulin</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/inhaler2.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Asmalin</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{url('med/images/inhaler3.jpg')}}" alt="">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#">Salamol</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>120.00 TK</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<hr size="20" color="black">
			<section class="ftco-section img set-bg" data-setbg="{{url ('med/images/firstaid5.jpg')}}">
			<div class="container">
					<div class="row justify-content-end">
			  <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
				  <span class="subheading" style="color: black;">Best Price For You</span>
				<h2 class="mb-4">Deal of the day</h2>
				<p>Scissors,Patches,Plusters,Safetypins,Bandages,Tweezers and all necessary prosucts!!</p>
				<h3><a href="#" style="color: black;">FirstAid Box</a></h3>
				<span class="price">1500 TK <a href="#" style="color: black">now 1000 TK only</a></span>
				<div id="timer" class="d-flex mt-5" >
							  <div class="time" style="color: rgb(0, 0, 0);" id="days"></div>
							  <div class="time pl-3" style="color: rgb(0, 0, 0);" id="hours"></div>
							  <div class="time pl-3" style="color: rgb(0, 0, 0);" id="minutes"></div>
							  <div class="time pl-3" style="color: rgb(0, 0, 0);" id="seconds"></div>
							</div>
			  </div>
			</div>   		
			</div>
			
		</section>
	<hr size="20" color="black">
		
	</section>
		</section>
		
    </section>
	

    @endsection

