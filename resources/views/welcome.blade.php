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
</head>
<body class="is-fullwidth">
<header>
    <nav class="navbar is-white" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="?OH">
                    <h1 class="title">DCOM</h1>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Cari Informasi
                    </a>
                </div>

                <div class="navbar-end">
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

@auth
    <div class="hero is-normal is-info">
@else
    <div class="hero is-fullheight-with-navbar is-info">
@endauth
    <div class="hero-body has-text-centered">
        <div class="container">
            <h1 class="title">
                Lebih banyak pengetahuan lebih bagus
            </h1>
            <h2 class="subtitle">Buat blog dan terhubung ke teman baru secara gratis.</h2>
            <a href="{{ route('register') }}" class="button is-info is-inverted">Daftar Sekarang</a>
        </div>
    </div>
</div>


<section class="section">
    <div class="container">
        <div class="tabs">
            <ul>
                <li class="has-text-weight-bold is-uppercase">Choose Topics</li>
                <li class="is-active"><a>Arts & Entertainment</a></li>
                <li><a>Industry</a></li>
                <li><a>Innovation & Tech</a></li>
                <li><a>Life</a></li>
                <li><a>Society</a></li>
                <li><a>Other</a></li>
            </ul>
        </div>

        <div class="columns">
            <div class="column is-8">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Ini Pokoknya Judulnya, Aku gtw panjanga</strong> <small>@johnsmith</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <p>Agustus 2, 2019 - Lorem imsum dotsum</p>
                                </div>
                            </nav>
                        </div>
                        <div class="media-right is-hidden-mobile">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-right is-hidden-tablet">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </article>
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Ini Pokoknya Judulnya, Aku gtw panjanga</strong> <small>@johnsmith</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <p>Agustus 2, 2019 - Lorem imsum dotsum</p>
                                </div>
                            </nav>
                        </div>
                        <div class="media-right is-hidden-mobile">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-right is-hidden-tablet">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </article>
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Ini Pokoknya Judulnya, Aku gtw panjanga</strong> <small>@johnsmith</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <p>Agustus 2, 2019 - Lorem imsum dotsum</p>
                                </div>
                            </nav>
                        </div>
                        <div class="media-right is-hidden-mobile">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-right is-hidden-tablet">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </article>
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Ini Pokoknya Judulnya, Aku gtw panjanga</strong> <small>@johnsmith</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <p>Agustus 2, 2019 - Lorem imsum dotsum</p>
                                </div>
                            </nav>
                        </div>
                        <div class="media-right is-hidden-mobile">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-right is-hidden-tablet">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </article>
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Ini Pokoknya Judulnya, Aku gtw panjanga</strong> <small>@johnsmith</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <p>Agustus 2, 2019 - Lorem imsum dotsum</p>
                                </div>
                            </nav>
                        </div>
                        <div class="media-right is-hidden-mobile">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-right is-hidden-tablet">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </article>
                    <article class="media">
                        <div class="media-content">
                            <div class="content has-text-centered">
                                <a class="button is-loading">Loading</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="column is-4" data-sticky-container>
                <div class="box sticky">
                    <p class="subtitle">
                        <strong>Topik Pilihan</strong>
                    </p>
                    <p>
                        sakj . skajsa. oiwjw . fdfdsf. dasee . wrwerwer
                    </p>
                    <hr>
                    <p class="subtitle">
                        <strong>Populer Tags</strong>
                    </p>
                    <div class="tags are-medium">
                        <span class="tag">All</span>
                        <span class="tag">Medium</span>
                        <span class="tag">Size</span>
                        <span class="tag">Kadal</span>
                        <span class="tag">Ovo</span>
                        <span class="tag">Gopay</span>
                        <span class="tag is-info">Indonesia</span>
                        <span class="tag">Startup</span>
                        <span class="tag">Oyo</span>
                        <span class="tag">Korupsi</span>
                        <span class="tag">Politik</span>
                        <span class="tag">Boneka Politik</span>
                    </div>
                    <hr>
                    <p>&copy; Dcom - Platform Publikasi & Social Media</p>
                    <p>Term of service . Policy Privasi . Dmca . Contact</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container has-text-centered">
        <p>&copy; Dcom - Platform Publikasi & Social Media</p>
        <p>Term of service . Policy Privasi . Dmca . Contact</p>
    </div>
</footer>

<script src="{{ asset('js/sticky.js') }}"></script>

<script>
    var sticky = new Sticky('.sticky');

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