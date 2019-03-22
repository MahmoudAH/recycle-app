@extends('layouts.app')

  @section('content')

<div class="container bootstrap snippet" style="margin-top:100px;margin-bottom: 80px">
@if (Session::has('success'))
  
  <div class="alert alert-success" role="alert">
    <strong>Success:</strong> {{ Session::get('success') }}
  </div>

@endif

@if (count($errors) > 0)

  <div class="alert alert-danger" role="alert">
    <strong>Errors:</strong>
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach  
    </ul>
  </div>

@endif
    <div class="row">
        <div class="panel-body" style="text-align: center;color: #009688;padding: 0;margin: 0 auto;font-size: 20px;width: 50%;">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</div>

        <!--
        <div class="col-sm-10"><h1>User name</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>-->
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
              

      <div class="text-center" style="position: relative;">
       
        <form class="form" action="{{route('profile.update_avatar')}}" method="post" id="registrationForm2" enctype="multipart/form-data" >
{{csrf_field()}}
          {{method_field('PUT')}}
          <!-- <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 100%" id="img">-->
        @if(Auth::user()->avatar )
         <img src="/images/{{ Auth::user()->avatar }}" class="avatar img-circle " alt="avatar" style="border-radius: 100%" >
 
      @else
      <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 100%" id="img"> 
       @endif
          
        <h6 style="margin-bottom: 10px">Update photo...</h6>
        <input type="file" class="text-center center-block file-upload" name="avatar" id="avatar"  onChange="readURL(this);" id="upload">
        <button class="btn btn-lg btn-success text-center center-block send" type="submit" style="margin-top: 10px;background-color: #3F51B5" style="pointer-events: none;
  cursor: default;"></i> Upload</button>      


</form>
      </div></hr><br>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="/profile/#home" data-toggle="tab" style="text-decoration:none;">Home</a> </strong></span> </li>

            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="" style="text-decoration: none;">Orders</a> </strong></span>
             <strong style="color: #4CAF50; font-size: 20px"> {{auth()->user()->orders}} </strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="/profile/#messages" style="text-decoration: none;" data-toggle="tab">Points</a> </strong></span> <strong style="color: #4CAF50; font-size: 20px"> {{auth()->user()->points}} </strong></li>
            
            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="/contactus" style="text-decoration:none;">Contact</a> </strong></span> </li>
            <li class="list-group-item text-right">

           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span  class="pull-left">
             <strong>Logout</strong> </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
        <div class="col-sm-9" style="margin-top: 100px">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#messages">points</a></li>
                
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{route('profile.update', Auth::user()->id )}}" method="post" id="registrationForm1">
{{csrf_field()}}
          {{method_field('PUT')}}

                      <div class="form-group" >
                          
                          <div class="col-xs-12"
                          >
                              <label for="name"><h4 >Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="name" title="enter your first name if any." value=" {{ Auth::user()->name }} ">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                          </div>
                      </div>
                      
          
                      <div class="form-group">
                          
                          <div class="col-xs-12"    >
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." value=" {{ Auth::user()->phone }} ">
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
          
                      
                      <div class="form-group">
                          
                          <div class="col-xs-12"   >
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value=" {{ Auth::user()->email }} ">
                                    
                          </div>
                          @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12"   >
                              <label for="city"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="city" id="city" placeholder="somewhere" title="enter a location" value=" {{ Auth::user()->city }} ">
                                    @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12"  >
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12" >
                            <label for="password"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group ">
                           <div class="col-xs-12 saveprofile">
                                <br>
                                
                                <button class="btn btn-lg btn-success" type="submit" onclick="submitForms()"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                
                            </div>
                      </div>
                      <div class="form-group ">
                           <div class="col-xs-12 resetprofile">
                                <br>
                                <button class="btn btn-lg btn-info" type="reset" onclick="resetForm('registrationForm1'); return false;" name="reset" type="reset"><i class="glyphicon glyphicon-repeat" ></i> Reset</button>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
               <div class="container " style="margin-top: -150px;margin-right: 10px">
                <div class="row" style="margin-top: 150px">
                  <div class="col-md-8">
                    
        
</div>
                  </div>
                </div>
                 <div class="row tab-pane2" style="margin-top: -100px">
                   <div class="col-md-4 col-xs-4" style="margin-top: 195px">
                     <h3 style="font-family: 'Courgette', cursive ;font-size: 40px">points<i class="fa fa-hand-o-right hidden-xs" aria-hidden="true" style="color: #AB47BC;padding: 5px"></i>
</h3>
                   </div>
                   <div class="col-md-4 col-xs-4" style="margin-top: 220px">
                     <strong style=" border-radius: 50%;margin-left: 30px;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
 
  padding: 15px;
  background: #CDDC39;
  border: 2px solid #666;
  text-align: center;
  font: 32px Arial, sans-serif;">{{auth()->user()->points}}</strong>
                   </div>
                   <div class="col-md-4 col-xs-4" style="margin-top: 225px">
                                 <div class="progress">
  <div class="progress-bar progress-bar-success active" role="progressbar" style="width:40%" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100">
    
  </div>
  <div class="progress-bar progress-bar-warning active" role="progressbar" style="width:10%">
  </div>
  <div class="progress-bar progress-bar-danger active" role="progressbar" style="width:20%">
  </div>
                   </div>
                   
                 </div>
                 <div class="row" style="margin-top: 50px">
                     <div class="col-md-12 ">
                       <i class="fa fa-bell" aria-hidden="true" style="padding: 10px;color: #d50000;font-size: 40px"> <strong style="font-family:'Courgette', cursive ;font-size: 20px ">if you have more points you can replace now...</strong></i>
                     
                        
                       

                     </div>
                   </div>
                    <div class="row" style="margin-top: 150px;text-align: center;">
                     <div class="col-md-8 col-sm-12 replacepoints">
                      <a href="/exchange" style="text-decoration:none; ">
                      <button class="button is-primary" style="font-size: 40px;border-radius: 5%;margin-left: 100px;cursor: pointer;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;"><i class="fa fa-handshake-o" aria-hidden="true"></i>
<span style="padding: 5px">Replace</span> </button>
 </a>

                     </div>
                   </div>

               </div>
               <!--
                  <div style="float: left;width: 50%;font-family: 'Courgette', cursive ;font-size: 50px;">points
                  </div>

<div style="display: inline;width: 50%;float: right;">
                  <h3 ><strong style=" border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
 
  padding: 15px;
  background: #CDDC39;
  border: 2px solid #666;
  color: #666;

  text-align: center;
  font: 32px Arial, sans-serif;">{{auth()->user()->points}}</strong> <br>
        </h3></div>-->

             </div><!--/tab-pane-->
            
             <div class="tab-pane" id="settings">
                    
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>--
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    </form></div></div> </div></div></div>                                               
<!--
<div class="container">
    <div class="row" >
        <div class="col-md-10 " style="margin-left: 100px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="field">
            <p class="control">
              <input type="file" class="input" name="image" id="image">
            </p>
            @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
          </div>
<div style="border-radius: 100%">
    {{ Auth::user()->avatar }}    
</div>
                
                </div>
<!--
                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                 username: {{ Auth::user()->name }}    <br>
                 email: {{ Auth::user()->email }}<br>

                 email: {{ Auth::user()->phone}}<br>
                 email: {{ Auth::user()->city }}<br>

                </div>
                <div class="columns m-t-5" style="width: 50%;float: left;">
     
      <div class="column">
        <a href="" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Name:</label>
          <pre>{{ Auth::user()->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Email:</label>
            <pre>{{Auth::user()->email}}</pre>
          </div>
        </div>
       <div class="field">
          <label for="city" class="label">City:</label>
          <pre>{{Auth::user()->city}}</pre>
        </div>
 <div class="field">
          <label for="phone" class="label">phone:</label>
          <pre>{{Auth::user()->phone}}</pre>
        </div>

                <div class="field">
          
        </div>




      </div>
  </div>
            </div>
        </div>
    </div>
</div>
   --> 
@endsection
