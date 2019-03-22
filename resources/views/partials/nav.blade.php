<nav class="navbar is-active"  style="background-color:#d9d9f3 ;height: 90px;margin-bottom: 0;padding-bottom: 0;text-decoration: none;" >
  <div class="container ">
    <div class="navbar-brand">
      
      <button class="button navbar-burger" aria-label="menu" aria-expanded="true">
       <span ></span>
       <span ></span>
       <span ></span>
     </button>

    </div>  
       
   
    <div class="navbar-menu" id=" id="navMenu"">
      <div class="navbar-start" id="bs-example-navbar-collapse-1">
        <a class="navbar-item is-tab is-active test "  href="/" style=" padding: 5px;margin: 0;text-decoration: none;
        font-family: 'Bitter', serif;
        margin-right: 5px;margin-left: 0">HOME</a>
        <a class="navbar-item is-tab " href="/makeorder" style=" padding: 5px;margin: 15px;text-decoration: none;font-family: 'Bitter', serif;">MAKE ORDER</a>
        <a class="navbar-item is-tab" href="/points" style=" padding: 5px;margin: 15px;text-decoration: none;font-family: 'Bitter', serif;">POINTS</a>
        <a class="navbar-item is-tab"  href="/about" style=" padding: 5px;margin: 15px;text-decoration: none;font-family: 'Bitter', serif;">ABOUT</a>
        <a class="navbar-item is-tab"  href="/contactus" target="_self" style=" padding: 5px;margin: 15px;text-decoration: none;font-family: 'Bitter', serif;">CONTACT US</a>
        @if (Auth::check())
        <a class="navbar-item is-tab" href="/admin" target="_self" style=" padding: 5px;margin: 15px;font-family: 'Bitter', serif;text-decoration: none">Admin</a>
        @endif
        @if (Auth::check())
        <a class="navbar-item is-tab" href="/test-admin" target="_self" style=" padding: 5px;margin: 15px;font-family: 'Bitter', serif;text-decoration: none">testAdmin</a>
        @endif

    </div>
        <div class="navbar-end nav-menu" style="
                         overflow: visible">

         @guest

             <a class="nav-link navlogin" style=" padding: 10px;margin-top: 20px;font-size: 18px;color:#02b3e4;font-family: 'Bitter', serif;" href="{{ route('login') }}">{{ __('Login') }}</a>
             
              <a class="nav-link navregister" style="color: #e6e6e6;font-size: 18px;padding-top: 10px;margin-top: 20px;margin-left: 25px;margin-bottom: 20px;background-color: #55acee;border-radius: 10%;text-align: center;" href="{{ route('register') }}">{{ __('Get started') }}</a>
         @else
                       <div class="navbar-item has-dropdown is-hoverable">
                       <a class="navbar-link" style="font-family: 'Bitter', serif;"> 
                       @if(Auth::user()->avatar )
                       <img src="/images/{{ Auth::user()->avatar }}" class="avatar img-circle" alt="avatar" style="border-radius: 100%" width="20px" style="padding: 10px">
                       @endif
                       <span style="padding-left: 5px;color: #e4d1d3"> Hey {{Auth::user()->name}}</span> </a>
            <div class="navbar-dropdown is-right" >
              <a href="/profile" class="navbar-item" style="text-decoration: none;">
                <span class="icon" >
                  <i class="fa fa-2x fa-user-circle-o m-r-5" ></i>
                </span>
                <span style="font-size: 15px">Profile</span> 
              </a>

              <a href="#" class="navbar-item" style="text-decoration: none;">
                <span class="icon">
                  <i class="fa fa-2x fa-cog m-r-5"></i>
                </span>
                <span style="font-size: 15px">Settings</span> 
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-2x fa-sign-out m-r-5"></i>
                </span>
               <em style="font-size: 15px">Logout</em> 
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
        @endguest
      </div>
    </div>
 </nav>
