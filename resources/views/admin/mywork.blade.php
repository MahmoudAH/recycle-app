@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2> Admin Dashboard </h2></div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

               
                    <div class="table-responsive">
                        
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Address</th>
                                    <th>Return</th>
                                    <th>glass</th>
                                    <th>paper</th>
                                    <th>food</th>
                                    <th>steal</th>
                                    <th>plastic_containers</th><th>kanz_containers</th><th>plastic_bages</th><th>electronic</th>

                                    <th>Instructions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                       
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->return }}</td>
                                        <td>{{ $order->paper }}</td>
                                         <td>{{ $order->glass }}</td>
                                         <td>{{ $order->food }}</td><td>{{ $order->steal }}</td><td>{{ $order->plastic_containers }}</td><td>{{ $order->plastic_bages }}</td><td>{{ $order->electronic }}</td><td>{{ $order->kanz_containers }}</td>
                                        <td>{{ $order->instructions }}
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end table-responsive -->
 
 <table>
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>User</th>
        <th>Manager</th>
        <th>Admin</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <form action="{{ route('admin.assign') }}" method="post">
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }}
                    <td><button type="submit">Assign Roles</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
