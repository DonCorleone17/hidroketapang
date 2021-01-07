@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<aside class="main-sidebar sidebar-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="margin-top: 20px; margin-left: 5px;">
      <img src="{{url('public')}}/Admin/img/logo.png" width="220px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="{{checkRouteActive('Admin/beranda')}}">
            <a href="{{url('Admin/beranda')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="{{checkRouteActive('Admin/seller')}}">
            <a href="{{url('Admin/seller')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Toko Hidroponik
              </p>
            </a>
          </li>
           <li class="{{checkRouteActive('Admin/tanaman')}}">
            <a href="{{url('Admin/tanaman')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Tanaman
              </p>
            </a>
          </li>
          <li class="{{checkRouteActive('Admin/user')}}">
            <a href="{{url('Admin/user')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>