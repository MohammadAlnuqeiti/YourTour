<style>
    .navbar  {
        background-color: #14141F;
    }
</style>

@include('publicUser.navbar')
<br>
<br>
<br>
<br>
<!-- About Start -->
<div class="container-xxl py-5" >
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/users/img/about2.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary">Your Tour</span></h1>
                <p class="mb-4">Reconnect with yourself and take time away from your hectic life.<br>Book one of our special offers  today and take a tour you will remember forever!</p>
                <p class="mb-4">We have the perfect destinations to book your next holiday or get-away. From well-being to sports, adventures, sun, sea and  holiday breaks,Check out some of our latest special offers</p>
                {{-- <div class="row gy-2 gx-4 mb-4"> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div> --}}
                    {{-- <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div> --}}
                {{-- </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<br>
<br>
<br>
<br>
<br>
@include('publicUser.footer')
