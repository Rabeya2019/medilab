<!-- Footer Section Begin -->
<footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <a style="color:green ;" href="#"><img style="width: 70px;" src="{{url('frontend/img/LOGO-nbg.png')}}" alt="">MEDILAB</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__newslatter">
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Departments</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">Packages</a></li>
                            <li><a href="#">Pharma</a></li>
                            <li><a href="#">Donation Bank</a></li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Road#27, Lalmatia, Dhaka-1207</li>
                            <li><i class="fa fa-phone"></i>01949039887</li>
                            <li><i class="fa fa-envelope"></i> Support@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="footer__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                        height="190" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
    <script src="{{ asset('med/js/jquery.min.js')}}"></script>
    <script src="{{ asset('med/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('med/js/popper.min.js')}}"></script>
    <script src="{{ asset('med/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('med/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('med/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('med/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('med/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('med/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('med/js/aos.js')}}"></script>
    <script src="{{ asset('med/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('med/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('med/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('med/js/google-map.js')}}"></script>
    <script src="{{ asset('med/js/main.js')}}"></script>
    {{-- ajax --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

<script>
    $(document).ready(function(){
        // alert();
        $(document).on('click','.pagination a', function(e){
           e.preventDefault();
           let page = $(this).attr('href').split('page=')[1]
           medicine(page)
        });

        function medicine(page){
            $.ajax({
                url:"/pagination/paginate-data?page="+page,
                   success:function(res){
                    //
                    $('.containerpage').html(res);
                   }
            });
        }

        //search
        $(document).on('keyup', function(e){
            e.preventDefault();
            let search_string = $('#search').val();
            $.ajax({
               url:"{{ route('search.product') }}",
               method:'GET',
               data:{search_string:search_string},
               success:function(res){
                $('.containerpage').html(res);
                if(res.status=='nothing_found'){
                    $('.containerpage').html('<span class="text-danger">'+'Nothing Found'+'</span>');
                }
               }

            });
        })
    });
</script>


</body>

</html>
