@extends('layouts.explore_site')

@section('title', 'Ini Landing Page')
@section('content')
    <div class="tabs is-fullwidth" style="padding-bottom: 0; margin-bottom: 0;">
        <ul>
            <li><a>Berita</a></li>
            <li><a href="{{ route('public.blog.index') }}">Blogging</a></li>
            <li><a href="{{ route('group.index') }}">Grup Diskusi</a></li>
            <li><a href="{{ route('lyrics.index') }}">Lirik Lagu</a></li>
            <li><a href="{{ route('meme.index') }}">Meme</a></li>
            <li><a>Chatting</a></li>
            <li><a href="{{ route('public.donation.index') }}">Donasi</a></li>
        </ul>
    </div>
    <div class="hero is-medium is-info">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">
                    Lebih banyak pengetahuan lebih bagus
                </h1>
                <h2 class="subtitle">Buat blog dan terhubung ke teman baru secara gratis.</h2>
                @auth
                    <a href="{{ route('dashboard.index') }}" class="button is-info is-inverted">Create Story</a>
                @else
                    <a href="{{ route('register') }}" class="button is-info is-inverted">Daftar Sekarang</a>
                @endauth
            </div>
        </div>
    </div>

{{--    <div class="hero is-medium is-info">--}}
{{--        <div class="hero-body has-text-centered">--}}
{{--            <div class="container">--}}
{{--                <h1 class="title">--}}
{{--                    Lebih banyak pengetahuan lebih bagus--}}
{{--                </h1>--}}
{{--                <h2 class="subtitle">Buat blog dan terhubung ke teman baru secara gratis.</h2>--}}
{{--                @auth--}}
{{--                    <a href="{{ route('dashboard.index') }}" class="button is-info is-inverted">Create Story</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('register') }}" class="button is-info is-inverted">Daftar Sekarang</a>--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <section class="section">
        <div class="container">
            @include('layouts.explore.categoryBlog')

            <div class="columns">
                <div class="column is-8">
                    <div class="box">
                        @foreach($posts as $post)
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong><a href="{{ route('blog.show', ['subdomain' => $post->blog->subdomain , 'slug' => $post->slug]) }}">{{ $post->title }}</a></strong> <small><a href="{{ route('public.profile', $post->user->name) }}">{{ '@'.$post->user->name}}</a></small>
                                            <br>
                                            {{ $post->body_short }}.
                                        </p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M, d Y') }} - {{ $post->categoryPost->name }}</p>
                                        </div>
                                    </nav>
                                </div>
                                <div class="media-right is-hidden-mobile">
                                    <figure class="image is-128x128" style="overflow: hidden">
                                        <img src="{{ route('content.images.thumbnail.post', $post->id) }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                    <figure class="image is-64x64">
                                        <img src="{{ route('content.images.thumbnail.post', $post->id) }}" alt="Image">
                                    </figure>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    {{ $posts->appends(\Illuminate\Support\Facades\Request::except('page'))->render('vendor.pagination.simple-bulma') }}
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

@endsection
@push('push-footer')
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script>
        var sticky = new Sticky('.sticky');
    </script>
@endpush
