@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="{{url('public')}}/Client/assets/img/logo-1.png" width="110px"></a>
    </div>
</nav>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li class="{{checkRouteActive('Client/beranda')}}">
                <a href="{{url('Client/beranda')}}"><i class="fa fa-dashboard"></i> Beranda </a>
            </li>
            <li class="{{checkRouteActive('Client/seller')}}">
                <a href="{{url('Client/seller')}}"><i class="fa fa-dashboard"></i> Seller </a>
            </li>
            <li class="{{checkRouteActive('Client/tanaman')}}">
                <a href="{{url('Client/tanaman')}}"><i class="fa fa-dashboard"></i> Tanaman </a>
            </li>
        </ul>
    </div>
</nav>