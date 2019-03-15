@extends('layouts.explore_site')

@section('title', 'Dashboard')
@section('content')
    <section class="section">
    <div class="columns is-centered has-shadow" style="box-shadow: 0px 3px #e3e3e3;">
        <div class="column is-half has-background-white">
            <div class="columns is-mobile">
                <div class="column is-8-mobile is-9-tablet">
                    <h1 class="title is-4 is-fullwidth">Fatkul Nur Koirudin</h1>
                    <h2 class="subtitle is-5-mobile is-4-tablet has-text-weight-light">@admin</h2>
                    <p>"
                        loves learning new things and love for technology loves learning new things and love for technology loves learning new things and love for technology l
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
        <div class="column is-half">
            <h3 class="subtitle is-3">Blog</h3>
            <div class="columns">
                <div class="column is-6">
                    <div class="box">
                        aaaaaa
                    </div>
                </div>
                <div class="column is-6">
                    <div class="box">
                        aaaaaa
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6">
                    <div class="box">
                        aaaaaa
                    </div>
                </div>
                <div class="column is-6">
                    <div class="box">
                        aaaaaa
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection