@extends('layouts.master')
@section('title',"Bejelentkezés")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-5"></div>
                            <div class="col-2">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-5"></div>
                        </div>

                        <div class="row text-center mb-0">
                            <div class="col-5"></div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-5"></div>
                        </div>     
                        <div class="row text-center mt-3">
                            <div class="col-12">
                                <a href="{{ route('password.request') }}">Elfelejtetted a jelszavad?</a>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('register') }}">Nincs még profilod?</a>
                            </div>

                            

                        </div>        
                        

                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
