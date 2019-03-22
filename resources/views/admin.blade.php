@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p>No orders yet.</p>
                    <a class="btn btn-success" href="{{ route('user.orders.create') }}">Order </a>

                @else

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
                                    <th>Instructions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->return }}</td>
                                        <td>{{ $order->paper }}</td>
                                         <td>{{ $order->glass }}</td>
                                        <td>{{ $order->instructions }}</td>
                                        <td><a href="{{ route('admin.orders.edit', $order) }}">{{ $order->status->name }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end table-responsive -->

                @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
