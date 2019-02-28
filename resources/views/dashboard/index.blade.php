@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-dark">
                <a href="{{ route('dashboard.blog.add') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Create New Blog</a>
            </div>
        </div>
        @foreach($blogs as $blog)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card shadow-dark">
                    <div class="card-header">
                        <h4>{{ $blog->title }}</h4>
                        <div class="card-header-action">
                            <a href="{{ route('dashblog.index', ['blogid' => $blog->id]) }}" class="btn btn-primary">
                                Manage Blog
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
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