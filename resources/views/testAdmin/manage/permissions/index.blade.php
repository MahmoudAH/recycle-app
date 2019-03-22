@extends('layouts.master')

@section('content')
<div class="panel-body" style="background-color: #ffcdd2;text-align: center;color: #4CAF50;padding: 0;margin: 0 80px;font-size: 20px">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</div>
<div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Permissions</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
      </div>
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /CONTACT TABLE -->
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>Name</th>
                   <th>Slug</th>
                   <th>Description</th>
                   <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($permissions as $permission)
                <tr>
                  <th>{{$permission->name}}</th>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->description}}</td>
                  <td >
                    <a class=" btn btn-primary" href="{{route('permissions.show', $permission->id)}}" style="margin-right: 3px">View</a>
                    <a class="btn btn-info" href="{{route('permissions.edit', $permission->id)}}">Edit</a>  
                    <button class="btn btn-warning" onclick="event.preventDefault();
                    document.getElementById('delete-post-form').submit();" type="submit">Delete</button>
                  </td>
                  <form method="POST" id="delete-post-form" action="{{route('permissions.destroy', $permission->id)}}">
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                  </form>
  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</tah>
                   <th>Slug</th>
                   <th>Description</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  

@endsection
@section('scripts')
<!-- DataTables -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable()
    $('#example3').DataTable()
  })
</script>
@endsection