@extends('layouts.master')

@section('content')
  <div class="flex-container">
        @include('partials.error')

    <div class="columns ">
      <div class="column">
        <h1 class="title">Edit {{$role->display_name}}</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('roles.update', $role->id)}}" method="POST">
      {{ method_field('PUT') }}
            {{ csrf_field() }}

      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Role Details:</h1>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="">Name (Human Readable)</label>
                      <input type="text" class="input" name="name" value="{{$role->name}}" id="name">
                    </p>
                  </div>
                  
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Permissions:</h1>
                  @foreach ($permissions as $permission)
                      <div class="field">
                        <input type="checkbox" name="permissions[]" value="{{$permission->id}}" @if($role->permissions->contains($permission->id)) checked=checked @endif>
                        {{$permission->name}} <em>({{$permission->description}})</em>
                      </div>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->

          <button class="button is-primary">Save Changes to Role</button>
        </div>
      </div>
    </form>
  </div>
@endsection


