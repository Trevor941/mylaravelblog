@extends('layouts.app')
<style>
    body{
        background: #d7d7d7 !important;
        
    }
    nav{
        display: none !important;
    }
    .card{
        border: 3px solid #737381;
    }
    .card-header{
        background: #737381 !important;
         color: #eee!important; 
         font-size: 25px; 
         font-weight: 900;
    }
    .card-body{
        padding: 60px;
        background: #f2f2f2;
    }
    button{
        background: #737381 !important;
         border: 1px solid #666 !important;
    }
    .card-footer{
        padding:0px; 
        background: #737381 !important;
    }
    input:focus {
      border: 1px solid #737381 !important;
    box-shadow: none !important;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center h-100">
        <div class="col-md-7 my-auto">
            <div class="card card-block shadow-lg">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body" style="">
                    <form method="POST" action="{{ route('login') }}" style="font-size: 16px;">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn form-control btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    @if (Route::has('password.request'))
                    <span class="float-right ">
                    <a class="btn btn-link text-white" href="{{ route('password.request') }}" >
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <a class="text-white" href="/register">Not yet a user? Register</a>
                    </span>
                @endif
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
