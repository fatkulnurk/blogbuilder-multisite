@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" id="modal-2">Buat Pesan</button>
                </div>

                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <a href="{{ route('dashboard.chat.show', ['id' => 1]) }}">
                                <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/avatar/avatar-1.png') }}">
                            </a>
                            <div class="media-body">
                                <a href="{{ route('dashboard.chat.show', ['id' => 1]) }}">
                                    <div class="mt-0 mb-1 font-weight-bold">Hasan Basri</div>
                                    <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                                </a>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/avatar/avatar-2.png') }}">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Bagus Dwi Cahya</div>
                                <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/avatar/avatar-3.png') }}">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Wildan Ahdian</div>
                                <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/avatar/avatar-4.png') }}">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold">Rizal Fakhri</div>
                                <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/prism/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>

@endpush