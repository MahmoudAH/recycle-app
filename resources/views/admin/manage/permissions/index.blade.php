@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Permissions</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
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

    <div class="card">
      <div class="card-content">
        <table class="table is-wide">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td class="has-text-right"><a class="button is-outlined  m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-outlined " href="{{route('permissions.edit', $permission->id)}}" style="background-color: #9D0CC1">Edit</a>
                        <form method="POST" action="{{route('permissions.destroy', $permission->id)}}">
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                      <button style="background-color: #FF0000;margin-right: -78px;margin-top: -35px" class="button is-light" type="submit" >
                        Delete
                      </button>
                      </form>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->
  </div>
@endsection
