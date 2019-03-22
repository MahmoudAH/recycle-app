@extends('layouts.app2')

@section('content')

<div class="container" >
@include('partials.error')
<div class="card bg-light" style="">
<article class="card-body mx-auto" style="max-width: 400px;background-color: #CEDEE3;margin-top: 15px;margin-bottom: 15px">
        <p>
        <a href="{{route('login.google')}}" class="btn btn-block btn-google" style="background-color: #FF1618;color: #fff"> <i class="fa fa-google-plus" aria-hidden="true"></i>
           Login with google</a>
        <a href="{{route('login.facebook')}}" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
        </p>
        <p class="divider-text">
           <span class="bg-light">OR</span>
        </p>

        <h4 class="card-title mt-3 text-center" style="color: #3949AB;font-size: 20px">Create Account</h4>
   
  <form method="POST" action="{{ route('register') }}">
                        @csrf

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full name" type="text">
        @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" value="{{ old('email') }}"  class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" type="email">
        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;">
            <option selected="">+20</option>
            
        </select>
        <input name="phone" required value="{{ old('phone') }}"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone number" type="text">
        @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
        </div>
        <select  name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}">
            <option selected=""> Select city</option>
            <option>shalby</option>
            <option>shahen city</option>
            <option>a5sa5</option>
        </select>
        @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input  name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Create password" type="password">
        <p id="passwordHelpBlock" class="form-text text-muted">
        Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
</p>
        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
    </div> <!-- form-group// -->
   <!-- <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

          <div class="col-md-6">     
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        </div>
   -->
       <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
       
     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password">
    </div> <!-- form-group// -->                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="{{ route('login') }}">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
