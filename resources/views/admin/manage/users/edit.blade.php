@extends('layouts.manage')

@section('content')
  <div class="flex-container">
        @include('partials.error')
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('manageusers.update', $user->id)}}" method="POST">
          {{csrf_field()}}
      {{method_field('PUT')}}
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>
 <div class="field">
            <label for="city" class="label">City:</label>
            <p class="control">
              <input type="text" class="input" name="city" id="city" value="{{$user->city}}">
            </p>
          </div>

           <div class="field">
            <label for="phone" class="label">Phone:</label>
            <p class="control">
              <input type="text" class="input" name="phone" id="phone" value="{{$user->phone}}">
            </p>
          </div>
          <div class="field">
            <label for="password" class="label">Password</label>
            
              <div class="field">
                <input type="radio" name="password_options[]" value="keep" class="m-t-10" checked>
                Do Not Change Password
              </div>
              <div class="field">
                <input type="radio" name="password_options[]" value="auto" class="m-t-15">Auto-Generate New Password
              </div>
              <div class="field">
                <input type="radio" name="password_options[]" value="manual" class="m-t-15">Manually Set New Password
                <p class="control">
                  <input type="text" class="input" name="password" id="password"  placeholder="Manually give a password to this user">
                </p>
              </div>
          </div>
        </div> <!-- end of .column -->
          <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />
          
            @foreach ($roles as $role)
              <div class="field">
               <input type="checkbox" name="roles[]" value ="{{$role->id}}" class="m-t-15">
                  {{$role->display_name}}
              </div>
            @endforeach
          
        </div>
      </div>
        <input type="submit" class="button is-primary" name="" value="Edit User">
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection


