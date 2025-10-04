
<style>
  .sidebar .nav .nav-item.active > .nav-link {
    background: #c74d6f;
    position: relative;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
    background: #c74d6f;
    color: #ffffff;
}

</style>


<div class="container-scroller d-flex" >
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: #9c405a;">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p> 
          <span></span>
        </li> 
        <li class="nav-item" >
          <a class="nav-link" href="{{ route('admin_index')}}">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Product Pages</span>
            <i class="menu-arrow"></i>
               </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li> --}}
             <li class="nav-item"> <a class="nav-link" href="{{route('admin_category')}}">Categories</a></li> 
              <li class="nav-item"> <a class="nav-link" href="{{ route('slider') }}">Sliders</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin_services') }}">Services</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin_about') }}">About</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin_package') }}">Package</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin_blog') }}">Blog</a></li>
              <!-- <li class="nav-item"> <a class="nav-link" href="{{ route('admin_tour') }}">Tour</a></li> -->
              <li class="nav-item"> <a class="nav-link" href="{{ route('client') }}">Client</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('form_element')}}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Form elements</span>
          </a>
        </li>
   
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tour_deals') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Tour Deals</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact_details') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Contact Details</span>
        </a>
    </li>
    
        {{-- 
         
      
       <li class="nav-item">
          <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
          </a>
        </li> --}}
          <!-- <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li> -->
        <li class="nav-item sidebar-category">
          <p>Pages</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              
              <li class="nav-item"> <a class="nav-link" href="{{route('admin.logout')}}"> Logout  </a></li>
            
              <!-- <li class="nav-item"> <a class="nav-link" href="{{route('lock_screen')}}"> Lockscreen </a></li> -->
            </ul>
          </div>
        </li>
        {{-- <li class="nav-item sidebar-category">
          <p>Apps</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docs/documentation.html">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
            <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
          </a>
        </li> --}}
      </ul>
    </nav>
