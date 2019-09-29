@extends('layouts.blog_catalog')

@section('title', 'Blog Terbaru')
@section('content')
    <div class="hero is-normal is-dark">
        <div class="hero-body has-text-left">
            <div class="container">
                <h1 class="title">
                    Blog Terbaru
                </h1>
                <h2 class="subtitle">Semua yang ingin anda cari, ada disini.</h2>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9">
                    <div class="panel">
                        <p class="panel-heading">
                            Blog Terbaru
                        </p>
                        @foreach($blog as $item)
                            <a class="panel-block" href="{{ route('blog.index', ['subdomain' => $item->subdomain]) }}">
                                <span class="panel-icon">
                                  <i class="fa fa-blogger-b" aria-hidden="true"></i>
                                </span>
                                {{ $item->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="column is-3">
                    @include('layouts.components.blog_catalog_category_blog')
                </div>
            </div>
        </div>
    </section>
@endsection
@push('push-footer')
@endpush
