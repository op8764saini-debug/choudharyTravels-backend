<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Choudhary Travels - Best Travel Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('https://choudharytravels.in/public/user/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('https://choudharytravels.in/public/user/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('https://choudharytravels.in/public/user/assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('https://choudharytravels.in/public/user/assets/css/style.css')}}" rel="stylesheet">
        
        <!--owl-carousel -->
        <link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.theme.green.css')}}" rel="stylesheet">
        
    </head> 

    <body>
@include('user.layout.header')
@yield('content')
@include('user.layout.footer')

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/lightbox/js/lightbox.min.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{asset('https://choudharytravels.in/public/user/assets/js/main.js')}}"></script>
        
        <!--owl-carousel -->
        <script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/jquery.min.js')}}"></script>
        <script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.min.js')}}"></script>
    </body>

</html>

<style>
    html, body{
        width: 100%;
        overflow-x: hidden;
    }
</style>
