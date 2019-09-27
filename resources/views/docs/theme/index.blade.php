<!DOCTYPE html>
<html lang="en" class="route-index">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clean documentation template">

    <title>Documentation</title>

    <link rel="canonical" href="http://localhost:4000/">

    <link href="{{ asset('assets/docs/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/docs/css/highlight.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Load Font Awesome 5 -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
</head>

<body class="is-fullwidth">
<div class="mobile-burger burger is-hidden-desktop" data-target="#doc-menu">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="columns is-gapless">
    <div id="doc-menu" class="column is-2 has-background-grey-lighter menu is-mobile">
        <section class="section">
            <h1 class="title is-4 has-text-weight-semibold has-text-centered">Theme <span class="is-size-5 has-text-primary has-text-weight-light">doc</span></h1>
        </section>

        <ul class="menu-list">
            <li>
                <a class="menu-item" href="#">Aturan Dasar</a>
            </li>
            <li class="menu-item has-dropdown">
                <a class="menu-title">
                    Komponen Halaman
                    <span class="menu-caret"></span>
                </a>
                <ul class="menu-dropdown">
                    <li><a class="menu-item" href="#">Index</a></li>
                    <li><a class="menu-item" href="#">Post & Comment</a></li>
                    <li><a class="menu-item" href="#">Page</a></li>
                    <li><a class="menu-item" href="#">Search</a></li>
                    <li><a class="menu-item" href="#">Category</a></li>
                    <li><a class="menu-item" href="#"></a></li>
                </ul>
            </li>
            <li>
                <a class="menu-item" href="#">Lapor Kesalahan</a>
            </li>
            <li>
                <a class="menu-item" href="#"></a>
            </li>
        </ul>

    </div>
    <div class="column" style="overflow-x: hidden">
        <div class="hero is-light">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title is-2 is-spaced has-text-weight-semibold">Theme Docs</h1>

                    <h2 class="subtitle is-6 has-text-weight-light">Dokumentasi Penggunaan Theme Untuk Mobile dan Desktop</h2>
                    <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@verbatim @endverbatim</code></pre></figure></p>

                </div>
            </div>
        </div>
        <section class="section">
            <div class="container is-fluid">

                <a href="#aturan_dasar" id="aturan_dasar" class="title is-4 has-text-weight-normal is-spaced anchor">
                    <span class="anchor-name">Aturan Dasar</span>
                </a>
                <p>Tidak ada variabel yang bisa digunakan untuk bersarang, setiap variabel yang</p>

                <a href="#aturan_dasar" id="aturan_dasar" class="title is-4 has-text-weight-normal is-spaced anchor">
                    <span class="anchor-name">Syntax Template</span>
                </a>
                <ul>
                    <li>
                        <h5 class="title is-5">General</h5>
                        <p>Semua kode dibatasi oleh kurung kurawal ganda @verbatim({{ }}) @endverbatim. Pembatas ini dipilih untuk mengurangi kemungkinan konflik dengan JavaScript dan CSS.</p>
                        <p class="helper">berikut ini contoh penggunannya.</p>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@verbatim {{ name  }} @endverbatim </code></pre></figure></p>
                    </li>
                    <li>
                        <h5 class="title is-5">Whitespace</h5>
                        <p>Spasi putih sebelum atau setelah pembatas diizinkan, namun, dalam kasus tertentu, spasi putih dalam tag dilarang (dijelaskan pada bagian berikut).</p>
                        <h6 class="title is-6">Ini Contoh Benar</h6>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">
@{{ name }}
@{{name }}
@{{ name}}
@{{  name  }}
@{{
     name
}}
</code></pre></figure></p>
                        <h6 class="title is-6">Ini Contoh Salah</h6>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@{{ na me }}
{ {name} }</code></pre></figure></p>

                    </li>
                    <li>
                        <h5 class="title is-5">Cegah Parsing</h5>
                        <p>Anda dapat mencegah parser dari parsing blok kode dengan memasukkannya ke syntax @{{ noparse }} @{{ /noparse }} .</p>
                        <p class="helper">berikut ini contoh penggunannya.</p>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@{{ noparse }}
    Hello, @{{ name }}
@{{ /noparse }}</code></pre></figure></p>
                    </li>
                </ul>


                <a href="#aturan_dasar" id="aturan_dasar" class="title is-4 has-text-weight-normal is-spaced anchor">
                    <span class="anchor-name">Variable Tags</span>
                </a>
                <p>Saat berurusan dengan variabel, Anda dapat: mengakses variabel tunggal, mengakses variabel yang bersarang di dalam array / objek, dan mengulangi array. Anda bahkan dapat mengulang array yang bersarang.</p>
                <ul>
                    <li>
                        <h5 class="title is-5">Penggunaan Dasar</h5>
                        <p>Semua kode dibatasi oleh kurung kurawal ganda @verbatim({{ }}) @endverbatim. Pembatas ini dipilih untuk mengurangi kemungkinan konflik dengan JavaScript dan CSS.</p>
                        <p class="helper">berikut ini contoh penggunannya.</p>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@verbatim {{ name  }} @endverbatim </code></pre></figure></p>
                    </li>
                    <li>
                        <h5 class="title is-5">Looping</h5>
                        <p>Spasi putih sebelum atau setelah pembatas diizinkan, namun, dalam kasus tertentu, spasi putih dalam tag dilarang (dijelaskan pada bagian berikut).</p>
                        <h6 class="title is-6">Ini Contoh Benar</h6>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@{{ page }} Some Content Here @{{ /page }}

</code></pre></figure></p>
                        <h6 class="title is-6">Ini Contoh Salah</h6>
                        <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">@{{ page }} Some Content Here @{{/ page }}</code></pre></figure></p>

                    </li>
                </ul>

            </div>
        </section>
    </div>
</div>

<script src="{{ asset('assets/docs/js/doc.js') }}"></script>
</body>
</html>