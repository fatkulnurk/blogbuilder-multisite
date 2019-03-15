@extends('layouts.dashboard')

@section('title', 'Change Email')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Surel</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('dashboard.account.email.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <input type="email" class="form-control pwstrength" data-indicator="pwindicator" name="email">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-title">Informasi Tambahan</div>
                    <p>Pastikan anda masih punya akses ke surel tersebut.
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer bg-whitesmoke">
            This is card footer
        </div>
    </div>
@endsection

@push('push-footer')
@endpush