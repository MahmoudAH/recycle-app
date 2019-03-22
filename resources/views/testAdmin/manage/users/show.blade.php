@extends('layouts.master')
@section('content')
  <div class="flex-container m-t-10" >
            @include('partials.error')

    <div class="columns p-t-20" >
      <div class="column">
        <h1 class="title">View User Details</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('manageusers.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
      </div>
    </div>
    <hr class="m-t-0">
    <div class="panel-body" style="background-color: #ffcdd2;text-align: center;color: #4CAF50;padding: 0;margin: 0 80px;font-size: 20px">
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif
    </div>
    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" >Name:</label>
          <pre>{{$user->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" >Email:</label>
            <pre>{{$user->email}}</pre>
          </div>
        </div>
        <div class="field">
          <label for="city" >City:</label>
          <pre>{{$user->city}}</pre>
        </div>
        <div class="field">
          <label for="phone" >phone:</label>
          <pre>{{$user->phone}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" >Roles</label>
            <ul>
              {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
              @foreach ($user->roles as $role)
              <li>{{$role->name}} ()</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
