@extends('layouts.dashboard')

@section('title', 'Change Password')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Password</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('dashboard.account.password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>New Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="confirmed">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block col-md-6">Change Password</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-title">Informasi Tambahan</div>
                    <p>Pastikan kata sandi yang anda gunakan tidak mudah ditebak. Jangan gunakan
                        kata sandi 12345678, abcdefgh, tanggal lahir, nama mantan, tanggal jadian, karena semua itu mudha di tebak.
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