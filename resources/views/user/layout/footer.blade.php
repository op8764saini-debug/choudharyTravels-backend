


        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> Near Nav Jyotic School, Benar Road Jaipur</a>
                            <a href="mailto:omkarmalchoudhary220@gmail.com"><i class="fas fa-envelope me-2"></i> omkarmalchoudhary220@gmail.com</a>
                            <a href="mailto:travelschoudhary5@gmail.com"><i class="fas fa-envelope me-2"></i>travelschoudhary5@gmail.com</a>
                             <a href="tel:+919799287792"><i class="fas fa-phone me-2"></i> +91 9799287792</a>
                            <a href="tel:+919928655674" class="mb-3"><i class="fas fa-phone me-2"></i> +91 9928655674</a>
                            <a href="tel:+919057808010" class="mb-3"><i class="fas fa-phone me-2"></i> +91 9057808010</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Service</a>
                            <a href="{{route('blog')}}"><i class="fas fa-angle-right me-2"></i>Blog</a>
                            <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i>Contact</a>
                        </div>
                    </div>
                 
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Categories</h4>
                            @php
                            $category =  App\Models\category::where('parent_id',0)->get();
                          @endphp

                          @foreach($category as $cat)
                          <a href=""><i class="fas fa-angle-right me-2"></i> {{$cat->title}}</a>
                          @endforeach
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Location</h4>
                            <div class="rounded">
                                <iframe class="rounded w-100"
                                style="height: 280px;" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3555.4459663419475!2d75.74262947527417!3d26.984438976604444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db29311e1f257%3A0xa616ff4b4dca39e7!2sNavjyoti%20Sr%20Sec%20School%2C%20Dev%20Nagar%2C%20Charan%20Nadi!5e0!3m2!1sen!2sin!4v1736348246249!5m2!1sen!2sin" width="200" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Choudhary Travels</a>, All right reserved.
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                   
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                     Designed By <a href="https://digigrowinfotech.com/">Digi Grow Infotech</a>
                </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>
