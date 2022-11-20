@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<div class="cnt">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="right-side">
                <div class="signin_form s_form">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="login">
                            <h2>
                                Reset Password
                            </h2>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="input_text">
                                <input placeholder="Email" id="email" type="email" class="input_email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="fa-solid fa-envelope"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="login_btn">
                                <button type="submit" class="login_button">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                        <div class="create margin">
                            <a href="{{ route('register') }}" class="create_acc">Create your Account
                            </a>/
                            <a href="{{ route('login') }}" class="create_acc"> Login to your Account
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
