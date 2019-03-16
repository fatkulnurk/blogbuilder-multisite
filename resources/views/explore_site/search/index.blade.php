@extends('layouts.explore_site')

@section('title', 'Dashboard')
@section('content')

    <div class="hero is-normal is-info">
        <div class="hero-body has-text-left">
            <div class="container">
                <h1 class="title is-capitalized">
                    @if ($key == null)
                        Pencarian Data
                        @else
                        Hasil pencarian "{{ $key }}"
                    @endif
                </h1>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">

                    <div class="tabs is-centered is-medium">
                        <ul>
                            <li><a href="{{ route('public.search', ['type' => 'blog', 'key' => $keyword]) }}">Artikel</a></li>
                            <li><a href="{{ route('public.search', ['type' => 'blog', 'key' => $keyword]) }}">Blog</a></li>
                            <li><a href="{{ route('public.search', ['type' => 'profile', 'key' => $keyword]) }}">Profil</a></li>
                            <li><a href="{{ route('public.search', ['type' => 'forum', 'key' => $keyword]) }}">Forum</a></li>
                        </ul>
                    </div>
                    @if($type == 'profile')
                        <div class="box">
                            @foreach($data as $user)
                                <article class="media">
                                    <figure class="media-left">
                                        <p class="image is-64x64">
                                            <a href="{{ route('public.profile', $user->name) }}" title="Profile {{ $user->name }}"><img class="icon-profile" src="{{ route('content.images.thumbnail.user', $user->id) }}" alt="Profile {{$user->name}}"></a>
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <strong>{{ optional($user->userDetail)->first_name.' '.optional($user->userDetail)->middle_name.' '.optional($user->userDetail)->last_name }}</strong> <small>{{ '@'.$user->name }}</small> <small>31m</small>
                                                <br>
                                                {{ Illuminate\Support\Str::limit(optional($user->userDetail)->bio, 100) }}.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        @elseif ($type == 'blog')
                    @else
                    <div class="box">
                        @foreach($data as $post)
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>{{ $post->title }}</strong> <small>{{ '@'.$post->user->name}}</small>
                                            <br>
                                            {{ strip_tags(substr($post->body, 1, 200)) }}.
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
                    @endif
                    {{ $data->appends(\Illuminate\Support\Facades\Input::except('page'))->render('vendor.pagination.simple-bulma') }}
                </div>
                <div class="column is-4" data-sticky-container>
                    <div class="box sticky">
                        <p class="subtitle">
                            <strong>Gabung Juga Yuk</strong>
                        </p>
                        <div class="tags are-medium">
                            <p>Gabung bersama kami & mari kita sebarkan informasi ke semua orang.</p>
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