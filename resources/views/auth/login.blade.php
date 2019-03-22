
@extends('layouts.app3')
@section('content')
<div class="container">
    <div class="panel-body" style="background-color: #ffcdd2;text-align: center;color: #4CAF50;padding: 0;margin: 0 80px;font-size: 20px">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</div>
 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
   
          <div class="card card-container">
  
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
 


<div class="form-group">
                            
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        
                                </div>
                            </div>
@if ($errors->has('email'))
                           <span class="invalid-feedback">
                           <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
                        </div>




                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                  

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="{{ route('password.request') }}" class="forgot-password">
                Forgot the password?
                 <a href="{{ route('register') }}">NOt member yet?</a> 

            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

            </div>
        </div>
    </div>
</div>
@endsection
