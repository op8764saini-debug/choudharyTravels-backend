@extends('user.layout.app')
@section('content')

<!--owl-carousel -->
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.theme.green.css')}}" rel="stylesheet">

<!--owl-carousel -->
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/jquery.min.js')}}"></script>
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- banner Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-white">About</li>
            </ol>
    </div>
</div>
<!-- banner End -->


<!-- About Start -->
@foreach($ab_data as $key => $ab_data)
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
            @php
                $images = json_decode($ab_data->multiple_image);
            @endphp
                <div class="h-100" style="border: 50px solid; border-color: transparent #9c405a transparent #9c405a;">
                    <div class="owl-carousel owl-theme">
                    @if(!empty($images))
                        @foreach($images as $key => $image)
                        <div class="item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('https://choudharytravels.in/public/img/' . $image) }}" class="img-fluid w-100 h-100" alt="">
                        </div>
                        @endforeach
                    @else
                        No Images Available
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4"> <span class="text-primary">{{$ab_data->title}}</span></h1>

                <p class="mb-4">{{$ab_data->description}}</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a> -->
            </div>
            <p class="mb-4">{!!$ab_data->description2!!}</p>

        </div>
    </div>
</div>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
@endforeach
<!-- About End -->




@endsection