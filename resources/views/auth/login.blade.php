@extends('layouts.app')

@section('content')
<div class="container-scroller">
    <div class="container-fluid">
      <div class="content-wrapper">
        <div class="row flex-grow">
          <div class="col-lg-6 ">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <!--<img src="{{ asset('images/login/logo.svg') }}" alt="logo">-->
              </div>
              <h4>Bienvenidos</h4>
              <h6 class="font-weight-light">Ingresa</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input id="email" type="email" class="form-control form-control-lg border-left-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-unlock-alt"></i>
                      </span>
                    </div>
                    <input id="password" type="password" class="form-control form-control-lg border-left-0{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif                      
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>  
                        </label>
                  </div>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection
