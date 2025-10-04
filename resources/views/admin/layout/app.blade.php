<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Choudhary Travels | Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('https://choudharytravels.in/public/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('https://choudharytravels.in/public/admin/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('https://choudharytravels.in/public/admin/assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('https://choudharytravels.in/public/admin/assets/css/images/favicon.png')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- fa fa icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/> --}}
</head>
  {{-- jquery cdn link --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <!-- SweetAlert CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
 <!-- SweetAlert JS -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>


@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" style="position: fixed; top: 280px; right: 20px; width: 300px; z-index: 9999; background-color: #28a745; color: white;" role="alert">
<i class="bi bi-check2-circle"></i> <strong>{{ session('success') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="progress-line"></div>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" style="position: fixed; top: 280px; right: 20px; width: 300px; z-index: 9999;" role="alert">
  <i class="bi bi-exclamation-circle"></i> <strong>{{ implode('', $errors->all(':message')) }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="progress-line"></div>
</div>
@endif

@if(session('alert'))
<div class="alert alert-warning alert-dismissible fade show" style="position: fixed; top: 280px; right: 20px; width: 300px; z-index: 9999; background-color: #ffc107; color: white;" role="alert">
<i class="bi bi-exclamation-octagon"></i> <strong>{{ session('alert') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="progress-line"></div>
</div>
@endif


@if(session('error'))
<div class="alert alert-warning alert-dismissible fade show" style="position: fixed; top: 280px; right: 20px; width: 300px; z-index: 9999; background-color: #dc3545; color: white;" role="alert">
<i class="bi bi-exclamation-triangle"></i> <strong>{{ session('error') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="progress-line"></div>
</div>
@endif


<style>
  .form-control{
    height: 2.370rem;
  }
</style>

{{-- alert css --}}
<style>
    .alert {
  position: relative;
  overflow: hidden;
}



@keyframes fill {
  from { width: 0%; }
  to { width: 100%; }
}

.progress-line {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: white; /* White progress bar */
  animation: fill 3s linear forwards;
}

@keyframes progress {
  from {
    width: 100%;
  }
  to {
    width: 0;
  }
}


</style>

{{-- alert js --}}

<script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(() => {
    document.querySelectorAll('.alert').forEach(alert => {
      alert.classList.remove('show');
      alert.classList.add('hide');  // Optional for fade-out effect
    });
  }, 5000); // 3 seconds
});
</script>


@include('admin.layout.sidebar')
@include('admin.layout.header')

@yield('content') 

@include('admin.layout.footer')




 </div> 
<!-- main-panel ends -->

<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
</div> 











<!-- base:js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('https://choudharytravels.in/public/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('https://choudharytravels.in/public/admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('https://choudharytravels.in/public/admin/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('https://choudharytravels.in/public/admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('https://choudharytravels.in/public/admin/assets/js/template.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('https://choudharytravels.in/public/admin/assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>
