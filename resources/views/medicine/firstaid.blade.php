@extends('medicine.medlayout.medmain')
@section('main-container')

<div class="hero-wrap hero-bread set-bg" data-setbg="{{url('med/images/background6.jpg')}}">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">MEDICINEHOME</a></span> <span>FIRSTAID</span></p>
          <h1 class="mb-0 bread">MEDICINES</h1>
        </div>
      </div>
    </div>
  </div>
  <br>
  {{-- <section class="ftco-section"> --}}

    <div class="container text-center" style="text-align: ">
        <marquee direction="right" 
        behavior="alternate" >search medicines</marquee>
        <div class="row justify-content-center" >
  <div class="col-md-4">
  <form class="d-flex" role="search">
    <input class="form-control me-2 fw-bold fs-4 rounded-pill" type="search" placeholder="Search" aria-label="Search">
    
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  </div>
            </div>
    </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                      <li><a href="/medicinecategory" >All</a></li>
                      <li><a href="/tablet">TABLETS & CAPSULES</a></li>
                      <li><a href="#" class="active">FIRSTAID</a></li>
                      <li><a href="/syrup">SYRUPS</a></li>
                      <li><a href="/other">OTHERS</a></li>
                  </ul>
              </div>
          </div>
       

          <section>
		
            <div class="container">
                    
             <div class="row">
                @foreach ($data as $medicine)
                 @if ($medicine['category'] == 'FirstAid')
                <div class="col-md-6 col-lg-3 ftco-animate">
                    
                    <div class="product">
                            
                          
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/{{$medicine['product_image']}}" width="350px" height="150px" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$medicine['product_name']}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>{{$medicine['product_price']}}TK</span></p>
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
                @endif
                @endforeach
            </div>
            {{ $data->links() }}
            </div>
            
            </section>

         

     
     
  </section>


@endsection