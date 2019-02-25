@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card chat-box" id="mychatbox">
                <div class="card-header">
                    <h4>Chat with Rizal</h4>
                </div>
                <div class="card-body chat-content">
                </div>
                <div class="card-footer chat-form">
                    <form id="chat-form">
                        <input type="text" class="form-control" placeholder="Type a message">
                        <button class="btn btn-primary">
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
    <script src="{{ asset('assets/js/page/components-chat-box.js') }}"></script>
@endpush