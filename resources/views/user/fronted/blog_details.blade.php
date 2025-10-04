@extends('user.layout.app')
@section('content')

@foreach ($blog as $key=>$bl )
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">{{ $bl->title }}</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-white">{{ $bl->title }}</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Blog Details</h5>
            <!-- <h1 class="mb-0">Awesome Blogs</h1> -->
        </div>
        <div class="row">
        
            <div class="col-md-8 ">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="mb-3">{{ $bl->title }}</h2> 
                    </div>
                    <div class="col-md-2">
                        <p class="mb-0">{{ $bl->date }}
                        </p>
                    </div>
                </div>
                <div class="packages-img">
                    <img src="{{ asset('https://choudharytravels.in/public/img/'. $bl->image) }}" class="img-fluid w-100 rounded-top" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                    <div class="col">
                        <div class="row align-items-center" style="border-bottom: 2px solid var(--bs-primary) !important;width: 200px; margin-left: 100px">
                            <h6 class="text-center px-3" style="color: #9c405a">Related Blogs</h6>
                        </div>&nbsp;&nbsp;
                        @php
                        $bl_data = App\Models\blog::where('status',1)->get();
                        @endphp
                        @foreach ($bl_data as $key => $bl_dt)
                        <div class="row mt-4 ms-2">
                            <div class="col-md-4">
                                <div class="service-icon p-2">
                                    <a href="{{ route('blog_details', $bl_dt->id) }}"><img src="{{ asset('https://choudharytravels.in/public/img/'. $bl_dt->image) }}" class="img-fluid w-100 rounded" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="service-content">
                                    <a href="{{ route('blog_details', $bl_dt->id) }}"><h5 class="mb-2">{{ $bl_dt->title }}</h5></a>
                                    <p class="mb-0">{{ $bl_dt->date }}
                                    </p>
                                </div>
                            </div>
                        </div><br>
                        @endforeach
                        <!-- <div class="row ms-2">
                            <div class="col-md-4">
                                <div class="service-icon p-2">
                                    <a href="#"><img src="{{asset('https://choudharytravels.in/public/user/assets/oth_img/tour/australia.jpg')}}" class="img-fluid w-100 rounded" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="service-content">
                                    <a href="#"><h5 class="mb-2">WorldWide Tours</h5></a>
                                    <p class="mb-0">16-Jan-2025
                                    </p>
                                </div>
                            </div>
                        </div><br> -->
                        <!-- <div class="row ms-2">
                            <div class="col-md-4">
                                <div class="service-icon p-2">
                                    <a href="#"><img src="{{asset('https://choudharytravels.in/public/user/assets/oth_img/tour/australia.jpg')}}" class="img-fluid w-100 rounded" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="service-content">
                                    <a href="#"><h5 class="mb-2">WorldWide Tours</h5></a>
                                    <p class="mb-0">16-Jan-2025
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        &nbsp;&nbsp;
        <div class=" text-left mb-5" style="max-width: 900px;">
        {{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
        </p>&nbsp; --}}
        <p class="mb-0">
            {{ $bl->description }}
        </p>
        </div>
    </div>
</div>
@endforeach
<!-- Packages End -->



@endsection