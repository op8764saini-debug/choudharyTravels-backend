<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Choudhary Travels - Best Travel Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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

<style>
    /* Default style for the image */
    #b {
        width: 15%; /* Default width */
        position: absolute;
        left: 0;
        top: 15%;
        transform: translateY(-50%); /* Center vertically */
    }

    /* Media query for small screens (up to 600px wide) */
    @media (max-width: 600px) {
        #b {
            width: 40%; /* Increase size on small screens */
        }
    }

    /* Media query for medium screens (601px to 1024px wide) */
    @media (min-width: 601px) and (max-width: 1024px) {
        #b {
            width: 40%; /* Adjust size for tablets */
        }
    }

    /* Media query for large screens (above 1024px wide) */
    @media (min-width: 1025px) {
        #b {
            width: 10%; /* Default size for desktops */
        }
    }
</style>




    <!-- Thanks Start -->
    <div class="container-fluid py-5" style="background: linear-gradient(rgba(19, 53, 123, 0.3), rgba(19, 53, 153, 0.3)); height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- <i id="b" class="bi bi-emoji-smile display-1 text-primary" style="position:absolute; left:0;  top:16%"></i> -->
                    <img id="b" class="display-1 text-primary" src="{{asset('https://choudharytravels.in/public/user/assets/img/blue-modern-luxury-car.png')}}">
                    
                    <h1 class="display-1">Thanks</h1>
                    <h1 class="mb-4 text-dark">Submission Successful—Pack Your Bags, the World Awaits!</h1>
                    <h3 class="mb-4 text-dark">We've Received Your Submission—Adventure Awaits!</h3>
                    <p class="mb-4 text-dark">Thanks for Reaching Out—Let’s Turn Your Travel Plans Into Reality!</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('home')}}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>

    <script>
                        $(document).ready(function() {
                            // Function to move the car to the center
                            function moveToCenter() {
                                const centerPosition = ($(window).width() / 2) - ($("#b").width() / 2); // Calculate center position
                                $("#b").animate({
                                    left: centerPosition
                                }, 3000, "swing"); // Move to center
                            }

                            // Start by moving the car to the center
                            moveToCenter();
                        });
                    </script>


    <!-- Thanks End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('https://choudharytravels.in/public/user/assets/lib/lightbox/js/lightbox.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{asset('https://choudharytravels.in/public/user/assets/js/main.js')}}"></script>

    <!-- for the icon running  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <!--owl-carousel -->
    <script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/jquery.min.js')}}"></script>
    <script src="{{asset('https://choudharytravels.in/public/user/assets/owl-carousel/owl.carousel.min.js')}}"></script>
</body>

</html>