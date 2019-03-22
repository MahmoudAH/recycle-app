@extends('layouts.master')
@section('content')
  <div class="flex-container">
    <div class="columns ">
      <div class="column">
        <h1 class="title">{{$role->name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
        <h5></h5>
      </div>
      <div class="column">
        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
      </div>
    </div>
    <div class="panel-body" style="background-color: #ffcdd2;text-align: center;color: #4CAF50;padding: 0;margin: 0 80px;font-size: 20px">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title">Permissions:</h1>
                  @if( ! isset($role->permissions) )
                  <ul>
                    @foreach ($role->permissions as $r)
                    <li>{{$r->name}} <em class="m-l-15">({{$r->description}})</em></li>
                    @endforeach
                  </ul>
                  @else
                  <p style="color: black">No permissions for this role</p>
                  @endif
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
