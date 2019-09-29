<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- Library -->
@stack('push-head')
<!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                @if (\Illuminate\Support\Facades\Auth::user())
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary"><i class="fas fa-fire"></i> <span>Logout</span></button>
                        </form>
                @endif
                <li><a href="{{ getenv('APP_URL') }}" class="nav-link nav-link-lg"><i class="fas fa-home"></i></a></li>
            </ul>
        </nav>
        @section('sidebar')
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="?CEMUNGUT">Dibumi.Com</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="?CEMUNGUT">DCOM</a>
                    </div>
                    <ul class="sidebar-menu">
                        @if (!\Illuminate\Support\Facades\Auth::user())
                            <li class="menu-header">Menu Auth</li>
                            <li><a class="nav-link {{ Active::checkRoute('login') }}" href="{{ route('login') }}"><i class="fas fa-user"></i> <span>Login</span></a></li>
                            <li><a class="nav-link {{ Active::checkRoute('register') }}" href="{{ route('register') }}"><i class="fas fa-sign"></i> <span>Signup</span></a></li>
                            <li><a class="nav-link {{ Active::checkRoute('password.reset') }}" href="{{ route('password.request') }}"><i class="fas fa-user-secret"></i> <span>Forgot Password</span></a></li>

                        @endif
                        <li class="menu-header">Tos & Privacy</li>
                        <li><a class="nav-link" href=""><i class="fas fa-user-secret"></i> <span>Tos</span></a></li>
                        <li><a class="nav-link" href=""><i class="fas fa-user-secret"></i> <span>Policy Privacy</span></a></li>
                    </ul>
                </aside>
            </div>
        @show
        <div class="main-content">
            <section class="section">
                @yield('content')
            </section>
        </div>
    </div>
</div>


<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->
@stack('push-footer')

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>