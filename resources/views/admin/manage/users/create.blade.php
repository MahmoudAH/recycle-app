@extends('layouts.manage')

@section('content')
  <div class="flex-container">
        @include('partials.error')

    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New User</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('manageusers.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password"  placeholder="Manually give a password to this user" >
                <input type="checkbox" name="auto_generate" value="" class="m-t-15">Auto Generate Password
            </p>
          </div>
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

            @foreach ($roles as $role)
              <div class="field">
                   <input type="checkbox" name="roles[]" value="{{$role->id}}" >
                   {{$role->display_name}}
              </div>
            @endforeach
        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Create New User</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        
      }
    });
  </script>
@endsection
