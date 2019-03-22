
<nav class="navbar " style="background-color: #354B5E;height: 50px; ">
  <div class="container ">  
      <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- nav brand -->
                      <!--
                      <img src="../images/recycling-symbol-icon-outline-solid-magenta.png" class="img-responsive" alt="our logo" width="80=" height="90" > 
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>-->
                   
      </div>
   
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
          <li class="active" ><a href="/admin" style="margin-top: -10px">Admin <span class="sr-only">(current)</span></a></li>
          <li><a  href="/" style="margin-top: -10px">Website</a>
          </li>
          
                        
        </ul>
        <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right ">
                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-top: -10px">
                                    {{ Auth::user()->name }} <span class="caret" ></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li>
                                    <a href="/profile" class="navbar-item" style="text-decoration: none;">
                                     <span class="icon" >
                                       <i class="fa fa-fw fa-user-circle-o m-r-5" ></i>
                                     </span>
                                     <span style="font-size: 20px">Profile</span> 
                                    </a>
                                  </li>
        
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

