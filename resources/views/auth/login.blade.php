@extends('layouts.applogin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <style>
                .animate__animated.animate__fadeInLeft {
                    --animate-duration: 1.5s;
                }
                .animate__animated.animate__fadeInRight {
                    --animate-duration: 1.5s;
                }
            </style>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>
            <div class="row">
                <div class="col-md-6 col-lg-5 animate__animated animate__fadeInLeft bg-primary text-white p-5 text-center rounded-left">
                    <h1 class="display-4">Selamat Datang</h1>
                    <p class="lead">Silakan daftar atau login untuk mengakses halaman admin</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-outline-light btn-lg" href="{{ route('register') }}" role="button">Daftar</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 animate__animated animate__fadeInRight">
                    <div class="card">
                        <div class="card-header bg-primary text-white">{{ __('Login') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

