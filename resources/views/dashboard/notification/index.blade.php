@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Pemberitahuan</h4>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="{{ route('dashboard.notification.show', ['id' => 1]) }}" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
        </div>
        <div class="card-footer bg-whitesmoke">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Load More</button>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
@endpush