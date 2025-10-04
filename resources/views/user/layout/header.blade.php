<style>
@media (max-width: 768px) {
    .navbar-light .navbar-brand span {
    color: #000000
  }
}
</style>


<!-- Spinner Start -->
{{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="mailto:omkarmalchoudhary220@gmail.com"><small class="me-3 text-light"><i class="fas fa-envelope me-2"></i> omkarmalchoudhary220@gmail.com</small></a>
                <a href="tel:+919799287792"><small class="me-3 text-light"><i class="fas fa-phone me-2"></i> +91 9799287792</small></a>

                <!-- <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a> -->
                <!-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i><span style="color: #9c405a;">Choudhary</span> <span>Travels</span> </h1>
            {{-- <img src="img/logo.png" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>

                @php
                    $categories = App\Models\category::where('parent_id',0)->where('status',1)->limit(3)->get();
                @endphp
                @foreach ($categories as $cat)

                <div class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{$cat->title}}</a>
                    <div class="dropdown-menu m-0">
                        @php
                            $subcategories = App\Models\category::where('parent_id',$cat->id)->where('status',1)->get();
                        @endphp
                        @foreach ($subcategories as $subcat)
                        <a href="{{ route('products', $subcat->id) }}" class="dropdown-item">{{ $subcat->title }}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach

                @php
                    $service = App\Models\service::where('status',1)->get();
                @endphp

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        @foreach ($service as $ser)
                            <a href="{{ route('services',$ser->id)}}" class="dropdown-item">{{ $ser->travel_name }}</a>
                        @endforeach
                    </div>
                </div>


                {{-- <a href="{{route('packages')}}" class="nav-item nav-link">Packages</a> --}}
                <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>

                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            @if(Auth::check())
        <strong>Hello&nbsp;{{ Auth::user()->name }}</strong> |
        <a href="{{ route('account.logout') }}" style="text-decoration: none">Logout</a>
    @else
        <a href="{{ route('account.login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Please Login</a>
    @endif
        </div>
    </nav> 