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

        @include('layouts.navbar')

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
                        <li class="menu-header">Dashboard</li>
                        <li class="{{ Active::checkRoute(['dashboard.index']) }}"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li class="{{ Active::checkRoute(['dashboard.chatroom.*']) }}"><a class="nav-link" href="{{ route('dashboard.chatroom.index') }}"><i class="fas fa-comment-alt"></i> <span>Chat Room</span></a></li>
                        <li class="{{ Active::checkRoute(['dashboard.chat.*']) }}"><a class="nav-link" href="{{ route('dashboard.chat.index') }}"><i class="fas fa-comment"></i> <span>Message</span></a></li>
                        <li class="{{ Active::checkRoute(['dashboard.notification.*']) }}"><a class="nav-link" href="{{ route('dashboard.notification.index') }}"><i class="fas fa-bell"></i> <span>Notification</span></a></li>
                        <li class="{{ Active::checkRoute(['dashboard.index']) }}"><a class="nav-link" href=""><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="#" class="btn btn-info btn-lg btn-block btn-icon-split">
                            <i class="fas fa-donate"></i> Donation
                        </a>
                    </div>
                </aside>
            </div>
    @show

    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title', 'Hayo ini judulnya apa')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                            <div class="breadcrumb-item">@yield('title', 'Ini halaman apa')</div>
                        </div>
                    </div>
                    <div class="section-body">
                        @include('layouts.notification')
                        @yield('content')
                    </div>
                </section>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2019 Dibumi.Com
            </div>
            <div class="footer-right">
                Build with <i class="fas fa-heart text-danger"></i> in Surabaya
            </div>
        </footer>
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