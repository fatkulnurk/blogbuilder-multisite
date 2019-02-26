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
                    <li><a class="nav-link" href="{{ route('dashblog.index', ['blogid' => $blogid]) }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.post.*', 'dashblog.category.*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Postingan</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.post.add', ['blogid' => $blogid]) }}">Tambah Postingan</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.post.index', ['blogid' => $blogid]) }}">Semua Postingan</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.category.add', ['blogid' => $blogid]) }}">Tambah Kategori</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.category.index', ['blogid' => $blogid]) }}">Semua Kategori</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.page.*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Halaman</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.page.add', ['blogid' => $blogid]) }}">Tambah Halaman</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.page.index', ['blogid' => $blogid]) }}">Semua Halaman</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.comment.*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-comment"></i> <span>Komentar</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.comment.index', ['blogid' => $blogid]) }}">Semua Komentar</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.comment.spam', ['blogid' => $blogid]) }}">Komentar Spam</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-toolbox"></i> <span>Blog+</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="">Pengaturan Blog</a></li>
                            <li><a class="nav-link" href="">Tema Mobile</a></li>
                            <li><a class="nav-link" href="">Tema Dekstop</a></li>
                            <li><a class="nav-link" href="">Explore Tema</a></li>
                            <li><a class="nav-link" href="">Statistik</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-paper-plane"></i> <span>Komunitas</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="">Chat Room</a></li>
                            <li><a class="nav-link" href="">Private Chat</a></li>
                            <li><a class="nav-link" href="">Forum</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href=""><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i class="fas fa-donate"></i> Donation
                    </a>
                </div>
            </aside>
            </div>
        @show

    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                @yield('content')
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