@extends('layouts.explore_site')

@section('title', 'Profile User')
@section('content')
    <section class="section" style="background-image: url({{ asset('svg/waves.svg') }}); background-repeat: no-repeat; background-position: bottom;">
    <div class="columns is-centered has-shadow">
        <div class="column is-half has-background-white box">
            <div class="columns is-mobile">
                <div class="column is-8-mobile is-9-tablet">
                    <h1 class="title is-4 is-fullwidth">{{ $user->userDetail->full_name }}</h1>
                    <h2 class="subtitle is-5-mobile is-4-tablet has-text-weight-light">@ {{ $user->name }}</h2>
                    <p>"
                        {{ $user->userDetail->bio }}
                        "
                    </p>
                </div>
                <div class="column has-text-centered">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/96x96.png" style="border-radius:50%;">
                    <button class="button is-info is-fullwidth">Follow</button>
                </div>
            </div>
            <div class="level is-mobile">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title has-text-info">3,456</p>
                        <p class="heading has-text-weight-semibold">Post</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title has-text-info">123</p>
                        <p class="heading has-text-weight-semibold">Following</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title has-text-info">456K</p>
                        <p class="heading has-text-weight-semibold">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns is-centered">
        <div class="column is-half box">
            <h3 class="subtitle is-3">Blog</h3>
            @foreach($user->blogs as $item)
                <div class="box">
                    <a href="{{ route('blog.index', ['subdomain' => $item->subdomain]) }}">{{ $item->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
