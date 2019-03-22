@extends('layouts.master')
@section('content')

    <div class="flex-container">
      <div class="columns">
        <div class="column">
          <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
          <a href="{{route('manageusers.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>

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
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Phone</th>
                <th>Date Created</th>
                <th>status</th>
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
                  <td>{{!empty($user->deleted_at)?'trashed':'published'}}</td>
                     @if(empty($user->deleted_at))
                     <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('manageusers.show', $user->id)}}">View</a><a class="button is-light" href="{{route('manageusers.edit', $user->id)}}" style="background-color: #9D0CC1">Edit</a>
                      <form method="POST" action="{{route('manageusers.destroy', $user->id)}}">
                        <form method="POST" action="{{route('manageusers.destroy', $user->id)}}">
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                      <button style="background-color: #FF0000;margin-right: -78px;margin-top: -35px" class="button is-light" type="submit" >
                        Delete
                      </button>
                      </form>
                    </td>
                    @endif
                    <td>
                      @if($user->deleted_at)
                      <form method="POST" action="{{route('manageusers.restore', $user->id)}}">
                         {{ csrf_field() }}

                        <button style="background-color: #EB6EFF;margin-left: 35px;margin-top: 0px" class="button is-light" type="submit" >Undo
                        </button>
                      </form>
                        @endif
                    </td>
                    <td>
                      @if($user->deleted_at)
                      <form method="POST" action="{{route('manageusers.deleteforever', $user->id)}}">
                         {{ csrf_field() }}

                        <button style="background-color: #CD2B08;margin-left: -18px;margin-top: 0px" class="button is-light" type="submit" >Destroy
                        </button>
                      </form>
                        @endif
                    </td>
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

    </div>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.USERS TABLE -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
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
                    <td>{{!empty($user->deleted_at)?'trashed':'published'}}</td>
                    @if(empty($user->deleted_at))
                    <td >
                      <a class="btn btn-info" href="{{route('manageusers.show', $user->id)}}">View</a>
                      <a class="btn btn-primary" href="{{route('manageusers.edit', $user->id)}}" >Edit</a>
                      
                        <form method="POST" action="{{route('manageusers.destroy', $user->id)}}">
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                         <a class="btn btn-danger" type="submit" >
                          Delete
                        </button>
                      </form>
                    </td>
                    @endif
                    <td>
                      @if($user->deleted_at)
                      <form method="POST" action="{{route('manageusers.restore', $user->id)}}">
                       {{ csrf_field() }}

                       <button class="btn btn-info" type="submit" >Undo
                       </button>
                     </form>
                     @endif
                   </td>
                   <td>
                    @if($user->deleted_at)
                    <form method="POST" action="{{route('manageusers.deleteforever', $user->id)}}">
                     {{ csrf_field() }}

                     <button class="btn btn-warning" type="submit" >Destroy
                     </button>
                   </form>
                   @endif
                 </td>
               </tr>
               @endforeach
             </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Phone</th>
                  <th>Date Created</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
           <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
@endsection
