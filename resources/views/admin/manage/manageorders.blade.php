@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Orders</h1>
        </div>
         <div class="column">
          <a href="#" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit Orders</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
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
                            </tbod
          </table>
        </div>
      </div> <!-- end of .card -->

    </div>
    
@endsection
