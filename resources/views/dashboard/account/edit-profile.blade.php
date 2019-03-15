@extends('layouts.dashboard')

@section('title', 'Edit Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Profil</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('dashboard.account.profile.update') }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" placeholder="Type here" value="{{ old('first_name', Auth::user()->userDetail->first_name) }}">

                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="dropdown-divider"></div>

                    <div class="form-group col-md-6">
                        <label for="middle_name">Middle Name (optional)</label>
                        <input id="middle_name" type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" placeholder="optional" value="{{ old('middle_name', Auth::user()->userDetail->middle_name) }}">

                        @if ($errors->has('middle_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('middle_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name (optional)</label>
                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" placeholder="optional" value="{{ old('last_name', Auth::user()->userDetail->last_name) }}">
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birthday">Birthday (optional)</label>
                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday', Auth::user()->userDetail->birthday) }}" max="@php echo date('Y-m-d') @endphp">

                        @if ($errors->has('birthday'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone_number">Phone Number (optional)</label>
                        <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number', Auth::user()->userDetail->phone_number) }}" max="@php echo date('Y-m-d') @endphp">

                        @if ($errors->has('phone_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birthday">Address (optional)</label>
                        <textarea class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="address">{{ old('address', Auth::user()->userDetail->address) }}</textarea>
                        @if ($errors->has('birthday'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bio">Bio (optional)</label>
                        <textarea class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" name="bio">{{ old('bio', Auth::user()->userDetail->bio) }}</textarea>
                        @if ($errors->has('bio'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer bg-whitesmoke">
            This is card footer
        </div>
    </div>
@endsection

@push('push-footer')
@endpush