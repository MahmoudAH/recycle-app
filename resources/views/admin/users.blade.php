<!--
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
                                    <th>User ID</th>
                                    <th>User Name</th>
                            
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td><td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end table-responsive -->





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
