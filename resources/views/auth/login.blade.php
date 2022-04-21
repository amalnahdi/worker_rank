@extends('layouts.app2')

@section('child')

<div class="container-fluid d-none">
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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container   min-vh-100">
    <div class="row">
        <div class="col-sm-3" style="display: flex;justify-content:center;align-items:center;flex:1;flex-direction:column;">
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="152" viewBox="0 0 466 152">
                <text id="WorkerRank" transform="translate(2 101)" fill="#fff" font-size="90" font-family="Pacifico-Regular, Pacifico"><tspan x="0" y="0">Worker</tspan><tspan y="0" font-family="Poppins-Medium, Poppins" font-weight="500">Rank</tspan></text>
              </svg>
            <h3 style="text-align: center;color:white">
                Tools for the world's
most customer-centric
projects and businesses
            </h3>
              
        </div>
        <div class="col-sm-9" style="display: flex;flex-direction:column;align-items:center;justify-content:center;height:100vh">
            <div style="display: flex;flex-direction:column;justify-content:center">
                    <h2 class="text-white text-center">Sign in</h2>
                    <h3 class="text-center  text-muted">To interact with your account</h3>
            </div>
            <div>
               <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group">
                   <div>Email <input type="email" name="email" style=" background-color:#E8EFFC ; margin-bottom: 30px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  </div>
                   <div>Password <input type="password" name="password" style="background-color:#E8EFFC  ; margin-bottom: 30px" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter password">  </div>
                </div>
               <div class="preference">
                    <label for="cheese">Remember me </label>
                    <input type="checkbox" name="remember" id="rememberMe"> 
                    <a href="#" class="link-info">Forget Password</a>                    
                </div>
                <div> <button type="submit" class="btn btn-secondary btn-dark">Sign In</button>
                    <td width="100%"> 
                    <div class="container btn-inline"> </div>
              
                </form>


            </div>
            <div> <p>Don't have an account yet? Read Our </p><button type="button" class="btn btn-link">Terms and Policy</button>
                {{-- Don't have an account yet? Sign Up --}}
            </div>

        </div>
    </div>
</div>
@endsection
