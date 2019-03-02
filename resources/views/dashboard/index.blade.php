@extends('layouts.dashboard')

@section('title', 'Dashboard')

@push('push-head')
<style>
    /* display this row with flex and use wrap (= respect columns' widths) */

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }


    /* vertical spacing between columns */

    [class*="col-"] {
        margin-bottom: 30px;
    }

    .content {
        height: 100%;
        padding: 20px 20px 10px;
]    }
</style>

@endpush

@section('content')
    <div class="card shadow-dark">
        <a href="{{ route('dashboard.blog.add') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Create New Blog</a>
    </div>
    <div class="row row-flex">
        @foreach($blogs as $blog)
            <div class="col-12 col-md-6 col-lg-6 row-eg-height">
                <div class="content card shadow-dark">
                    <div class="card-header">
                        <h4>{{ $blog->title }}</h4>
                        <div class="card-header-action">
                            <a href="{{ route('dashblog.index', ['blogid' => $blog->id]) }}" class="btn btn-primary btn-block">
                                Manage Blog
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{ $blog->subdomain}}.{{$blog->domain->domain}}</p>
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Example Card</h4>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-footer bg-whitesmoke">
                This is card footer
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
@endpush