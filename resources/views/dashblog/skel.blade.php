@extends('layouts.dashblog')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">usernameblog.domain.com</a></div>
                <div class="breadcrumb-item">ini halaman</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer bg-whitesmoke">
                    This is card footer
                </div>
            </div>
        </div>
    </section>
@endsection

@push('push-footer')
@endpush