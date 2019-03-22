@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Users</h1>
        </div>
        
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Phone</th>
                <th>Date Created</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->city}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                     <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('manageusers.show', $user->id)}}">View</a><a class="button is-light" href="{{route('manageusers.edit', $user->id)}}">Edit</a></td>
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$users->links()}}
    </div>


    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Orders</h1>
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
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbod>
          </table>
        </div>
      </div> <!-- end of .card -->

    </div>

    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Contacts</h1>
        </div>
         
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
                                <tr>
                                    <th>id </th>
                                    <th>name </th>
                                    <th>email</th>
                                    <th>telephone</th>
                                    <th>message</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                       
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->telephone }}</td>
                                         <td>{{ $contact->message }}</td>
                                         
                                    </tr>
                                @endforeach
                            </tbod>
          </table>
        </div>
      </div> <!-- end of .card -->

    </div>
@endsection
