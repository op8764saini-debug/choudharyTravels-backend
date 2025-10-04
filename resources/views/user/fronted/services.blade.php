@extends('user.layout.app')
@section('content')

<!--owl-carousel -->
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.theme.green.css')}}" rel="stylesheet">

<!--owl-carousel -->
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/jquery.min.js')}}"></script>
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.min.js')}}"></script>

@foreach ($service as $key=>$ser )

<!-- Banner Start -->
<div class="container-fluid"
    style="background: linear-gradient(rgba(94, 95, 97, 0.5), rgba(184, 190, 201, 0.5)), url({{ asset('https://choudharytravels.in/public/img/'.$ser->banner_image) }}); background-position: center center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; padding: 150px 0 50px 0;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">{{ $ser->travel_name }}</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">{{ $ser->travel_name }}</li>
        </ol>
    </div>
</div>
<!-- Banner End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                @php
                $images = json_decode($ser->multiple_image);
                @endphp
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

            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">{{ $ser->travel_name }}</h5>

                <h1 class="mb-4">Welcome to <span style="color: #9c405a;">Choudhary</span> <span>Travels</span></h1>
                <p class="mb-4">{!! $ser->description !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- why choose us Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">why</h5>
                <h1 class="text-white mb-4">Why Choose Us?</h1>
                <p class="text-white mb-4">
                There are many reasons to choose Choudhary Travels since we deserve it. As a result of hard work, commitment, and the satisfaction of our guests, we have built our own goodwill. Today, Choudhary Travels is a brand offering excellent car and coach rental service in Jaipur. Our Google reviews, guest recommendations are enough and best answer to why you should choose us.
                </p>
                <!-- <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p> -->
                <div class="col-sm-12">
                                <p class="mb-2 text-dark"><i class="fa fa-arrow-right text-primary me-2"></i>We operate a large fleet of
                                vechicles</p>
                            </div>
                            <div class="col-sm-12">
                                <p class="mb-2 text-dark"><i class="fa fa-arrow-right text-primary me-2"></i>Easy & transparent booking
                                process</p>
                            </div>
                            <div class="col-sm-12">
                                <p class="mb-2 text-dark"><i class="fa fa-arrow-right text-primary me-2"></i>Affordable and competitive
                                prices</p>
                            </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4 mb-4">
                    <div class="col-6">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-globe fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">60+</h5>
                                <p>Destinations Connected</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-hotel fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">100%</h5>
                                <p>Transparent Pricing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-6">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-user fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">10000+</h5>
                                <p>Delighted Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-cog fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">20+</h5>
                                <p>Impeccabaly Maintained Vahicles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- why choose us End -->

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



@endsection