<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>admin</title>

        <!-- Bootstrap Core CSS -->
        
        <!-- MetisMenu CSS -->
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('js/raphael.min.js')}}"></script>
        <script src="{{ asset('js/morris.min.js')}}"></script>
        <script src="{{ asset('js/morris-data.js')}}"></script>
        <script src="{{ asset('js/userprofile.js') }}" defer></script>
        
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/startmin.js')}}"></script>
    </head>
    <body>

        <div id="wrapper">

            
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #9D0CC1;height: 50px">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="font-size: 25px;padding: 5px">Admin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                

<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manageusers.dashboard')}}" class="{{ Nav::isRoute('manageusers.dashboard')}} ">
      Dashboard</a></li>
         <li><a href="{{route('manageorders.manageorders')}}">Manage Orders</a></li>

    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manageusers.index')}}">Manage Users</a></li>
      
      <li><a href="{{route('manageorders.manageorders')}}">Manage Orders</a></li>
      <li>
        <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
        <ul>
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
              
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->


                </div>
            </div>
        </div>
    </div>

</div>

