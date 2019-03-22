@extends('layouts.master')

@section('content')
  <div class="flex-container">
        @include('partials.error')

    <div class="columns ">
      <div class="column">
        <h1 class="title">Create New Role</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('roles.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title " >Role Details:</h1>
                  <div class="field">
                    <p class="control">
                      <label for="display_name" class="">Name (Human Readable)</label>
                      <input type="text" class="input" name="display_name" value="{{old('display_name')}}" id="display_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="">Slug (Can not be changed)</label>
                      <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="">Description</label>
                      <input type="text" class="input" value="{{old('description')}}" id="description" name="description">
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
                        <input type="checkbox" name="permissions[]" value="{{$permission->id}}">
                        {{$permission->name}} <em>({{$permission->description}})</em>
                      </div>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->

          <button class="button is-primary" type="submit">Create new Role</button>
        </div>
      </div>
    </form>
  </div>
@endsection


