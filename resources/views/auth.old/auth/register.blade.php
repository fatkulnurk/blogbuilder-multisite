@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>{{ __('Register') }}</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="name">{{ __('Username') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" placeholder="Type here" value="{{ old('first_name') }}">

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="middle_name">Middle Name (optional)</label>
                                        <input id="middle_name" type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" placeholder="optional" value="{{ old('middle_name') }}">

                                        @if ($errors->has('middle_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name (optional)</label>
                                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" placeholder="optional" value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="birthday">Birthday (optional)</label>
                                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" max="@php echo date('Y-m-d') @endphp">

                                        @if ($errors->has('birthday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
