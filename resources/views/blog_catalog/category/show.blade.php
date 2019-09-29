@extends('layouts.blog_catalog')

@section('title', 'Kategori '.$cat->name)
@section('content')
    <div class="hero is-normal is-dark">
        <div class="hero-body has-text-left">
            <div class="container">
                <h1 class="title">
                    Kategori {{ $cat->name }}
                </h1>
                <h2 class="subtitle">Blog terbaru berdasarkan kategori {{ $cat->name }}.</h2>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9">
                    <div class="panel">
                        <p class="panel-heading">
                            Kategori {{ $cat->name }}
                        </p>
                        @foreach($blog as $item)
                            <a class="panel-block" href="{{ route('blog.index', ['subdomain' => $item->subdomain]) }}">
                                <span class="panel-icon">
                                  <i class="fa fa-blogger" aria-hidden="true"></i>
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
