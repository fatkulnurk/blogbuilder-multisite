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
                    <li><a class="nav-link" href="{{ route('dashblog.index', ['blogid' => $blogid]) }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.post.*', 'dashblog.post*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Postingan</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.post.create', ['blogid' => $blogid]) }}">Tambah Postingan</a></li>
                            {{--<li><a class="nav-link" href="{{ route('dashblog.post.index', ['blogid' => $blogid]) }}">Semua Postingan</a></li>--}}
                            <li><a class="nav-link" href="{{ route('dashblog.post-publish.index', ['blogid' => $blogid]) }}">Post Terpublish</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.post-draft.index', ['blogid' => $blogid]) }}">Draft Tersimpan</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.post-trash.index', ['blogid' => $blogid]) }}">Keranjang Sampah</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Active::checkRoute([ 'dashblog.category.*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>Kategori Post</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.category.create', ['blogid' => $blogid]) }}">Tambah Kategori</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.category.index', ['blogid' => $blogid]) }}">Semua Kategori</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.page.*', 'dashblog.page*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Halaman</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.page.create', ['blogid' => $blogid]) }}">Tambah Halaman</a></li>
                            {{--<li><a class="nav-link" href="{{ route('dashblog.page.index', ['blogid' => $blogid]) }}">Semua Halaman</a></li>--}}
                            <li><a class="nav-link" href="{{ route('dashblog.page-publish.index', ['blogid' => $blogid]) }}">Halaman Terpublish</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.page-draft.index', ['blogid' => $blogid]) }}">Draft Halaman</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.page-trash.index', ['blogid' => $blogid]) }}">Trash Halaman</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Active::checkRoute(['dashblog.comment.*']) }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-comment"></i> <span>Komentar</span></a>
                        <ul class="dropdown-menu">
                            {{--<li><a class="nav-link" href="{{ route('dashblog.comment.index', ['blogid' => $blogid]) }}">Semua Komentar</a></li>--}}
                            <li><a class="nav-link" href="{{ route('dashblog.comment-publish.index', ['blogid' => $blogid]) }}">Komentar Aktif</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.comment-pending.index', ['blogid' => $blogid]) }}">Komentar Pending</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.comment-trash.index', ['blogid' => $blogid]) }}">Komentar Trash</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tablet-alt"></i> <span>Template</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="?">Tema Mobile</a></li>
                            <li><a class="nav-link" href="{{ route('dashblog.theme.desktop.index', ['blogid' => $blogid ]) }}">Tema Dekstop</a></li>
                            <li><a class="nav-link" href="">Explore Template</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-toolbox"></i> <span>Pengaturan</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('dashblog.setting.information.edit', ['blogid' => $blogid]) }}">Informasi Blog</a></li>
{{--                            <li><a class="nav-link" href="{{ route('dashblog.setting.blog.edit', ['blogid' => $blogid]) }}">Pengaturan Blog</a></li>--}}
                            <li><a class="nav-link" href="{{ route('dashblog.setting.theme.edit', ['blogid' => $blogid]) }}">Theme Blog</a></li>
                            {{--<li><a class="nav-link" href="">Owner Blog</a></li>--}}
                            {{--<li><a class="nav-link" href="">Statistik</a></li>--}}
                        </ul>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-paper-plane"></i> <span>Komunitas</span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a class="nav-link" href="">Chat Room</a></li>--}}
                            {{--<li><a class="nav-link" href="">Private Chat</a></li>--}}
                            {{--<li><a class="nav-link" href="">Forum</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li><a class="nav-link" href=""><i class="fas fa-hands-helping"></i> <span>Request Fitur</span></a></li>
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i class="fas fa-donate"></i> Donation
                    </a>
                </div>
            </aside>
            </div>
        @show

        <div class="main-content">
            <section class="section">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title', 'Hayo ini judulnya apa')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashblog</a></div>
                            <div class="breadcrumb-item">@yield('title', 'Ini halaman apa')</div>
                        </div>
                    </div>
                    <div class="section-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

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