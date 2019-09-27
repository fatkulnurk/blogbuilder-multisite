<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">

    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <style>
        body,button,input,select,textarea{
            font-family:-apple-system,BlinkMacSystemFont,"Open Sans",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,Arial,sans-serif
            /*font-family: 'Segoe UI';*/
        }

        .section{
            padding: 1rem;
        }

        .search-navbar{
            border-radius: 2px;
            width: 45vw;
        }

        .box, .button, .btn{
            border-radius: 0;
        }

        .icon-profile{
            border-radius: 50%;
        }

        @media screen and (max-width: 800px) {
            .search-navbar{
                width: 100%;
            }
        }
    </style>

    @stack('push-head')
</head>
<body class="is-fullwidth">
<header>
    <nav class="navbar is-white has-shadow" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ getenv('APP_URL') }}">
                    <h1 class="title">DIBUMI</h1>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">

                    <div class="navbar-item field">
                        <form action="{{ route('public.search') }}" method="get">
                            <p class="control has-icons-right">
                                <input class="input is-info search-navbar" type="search" placeholder="Kata Kunci ..." name="key">
                                <span class="icon is-small is-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ddd" d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>
                            </span>
                            </p>
                        </form>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon"><i class="fas fa-th"></i></span> <span>Explore</span>
                        </a>

                        <div class="navbar-dropdown">
                            <a href="{{ route('public.blog.index') }}" class="navbar-item">
                                Blog
                            </a>
                            <a href="{{ route('public.forum.index') }}" class="navbar-item">
                                Forum
                            </a>
                            <a href="{{ route('public.chatting.index') }}" class="navbar-item">
                                Chatting
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Page
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Term of Service
                            </a>
                            <a class="navbar-item">
                                Policy Privacy
                            </a>
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item">
                        <div class="buttons">
                            @auth
                                <a href="{{ route('dashboard.index') }}" class="button is-light">Dashboard</a>
                            @else
                                <a href="{{ route('register') }}" class="button is-info">
                                    <strong>Daftar</strong>
                                </a>
                                <a href="{{ route('login') }}" class="button is-light">
                                    Masuk
                                </a>

                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer class="footer">
    <div class="container has-text-centered">
        <p>&copy; Dcom - Platform Publikasi & Social Media</p>
        <p>Term of service . Policy Privasi . Dmca . Contact</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@stack('push-footer')
<script>

    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body>
</html>