@extends('user.layout.app')
@section('content')


<!--owl-carousel -->
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.theme.green.css')}}" rel="stylesheet">

<!--owl-carousel -->
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/jquery.min.js')}}"></script>
<script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.min.js')}}"></script>




@foreach ($subcategories as $key=>$pr )
   
<!-- Banner Start -->
<div class="container-fluid" 
     style="background: linear-gradient(rgba(94, 95, 97, 0.5), rgba(184, 190, 201, 0.5)), url({{ asset('https://choudharytravels.in/public/img/'.$pr->banner_image) }}); background-position: center center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; padding: 150px 0 50px 0;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">{{ $pr->title }}</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">{{ $pr->title }}</li>
        </ol>
    </div>
</div>
<!-- Banner End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                            <!-- <img src="{{asset('https://choudharytravels.in/public/img/'.$pr->image)}}" class="img-fluid w-100 h-100" alt=""> -->
                        @php
                            $images = json_decode($pr->multiple_image);
                        @endphp
                        <div class="owl-carousel owl-theme">
                            @if(!empty($images))
                                @foreach($images as $key => $image)
                                <div class="item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset('https://choudharytravels.in/public/images/' . $image) }}" class="img-fluid w-100 h-100" alt="">
                                </div>
                                @endforeach
                            @else
                                No Images Available
                            @endif
                        </div>
                    </div>

                         
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">{{ $pr->title }}</h5>

                        <h1 class="mb-4">Welcome to <span style="color: #9c405a;">Choudhary</span> <span>Travels</span></h1>
                        <p class="mb-4">{!! $pr->description !!}</p>
                                 </div>
                </div>
            </div>
        </div>
        <!-- About End -->

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





