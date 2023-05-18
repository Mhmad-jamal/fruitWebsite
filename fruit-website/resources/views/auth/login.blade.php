@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
 
   
    <div class="col-12 d-flex flex-column align-items-center">
        <img class="img-fluid" id="Centerdimg" src="{{asset('user/main-img/Grabs.png')}}" alt="">

        <div class="row"  id="LoginContainer">

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="col-12" id="loginText">
                <h1>Sign in</h1>
                <div class="d-flex align-items-center">
                  <h5 class="mr-2">New user  ?</h5>
                  <a id="CreateNewAccount" href="{{ route('register') }}"><span>Create new account</span></a>
                </div>
                <div class="form-group">
                    <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" id="emailInput" placeholder="Email address :">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
                </div>
                  <div class="form-group mt-2">
                    <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" id="passwordinput" placeholder="Password :">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
                </div>

              </div>
            
              <div class="col-12 d-flex justify-content-end mt-2 mb-2" id="submitbtn">
                <button type="submit" class="btn btn-primary  ">
               Continue
                </button>
             {{--    @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif --}}
              </div>
            
            </form>

        </div>
      </div>
      
</div>
@endsection
