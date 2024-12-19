@php $getSetting = App\Models\Setting::first(); @endphp

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('upload/' .$getSetting->website_favicon) }}" alt="AdminLTELogo" height="60" width="60" />
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ url('logout') }}">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('upload/' .$getSetting->website_logo) }}" alt="GST Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">{{ $getSetting->website_name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('upload/' .Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/partiesType') }}" class="nav-link @if(Request::segment(2) == 'partiesType') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Parties Type
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/parties') }}" class="nav-link @if(Request::segment(2) == 'parties') active @endif">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Parties
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/gstBills') }}" class="nav-link @if(Request::segment(2) == 'gstBills') active @endif">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            GST Bills
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/myAccount') }}" class="nav-link @if(Request::segment(2) == 'myAccount') active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            My Account
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/setting') }}" class="nav-link @if(Request::segment(2) == 'setting') active @endif">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>