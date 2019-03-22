@extends('layouts.master')
@section('styles')
<!-- DataTables -->
 
@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All tables</li>
      </ol>
    </section>

    <!-- Main content -->
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
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td> {{$user->city}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                  <td>
                    <a class="btn btn-info" href="{{route('manageusers.show', $user->id)}}">view</a>
                    <a class="btn btn-primary" href="{{route('manageusers.edit', $user->id)}}">edit</a> 
                    <a class="btn btn-danger" href="{{route('manageusers.edit', $user->id)}}">delete</a> </td>
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
 aa           <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- /ORDER TABLE-->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Orders Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                  <th>plastic_containers</th><th>kanz_containers</th>
                  <th>plastic_bages</th><th>electronic</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->city }}
                  </td>
                  <td>{{ $order->return }}</td>
                  <td> {{ $order->paper }}</td>
                  <td>{{ $order->glass }}</td>
                  <td>{{ $order->food }}</td>
                  <td>{{ $order->steal }}</td>
                  <td>{{ $order->plastic_containers }}</td>
                  <td>{{ $order->plastic_bages }}</td>
                  <td>{{ $order->electronic }}</td>
                  <td>{{ $order->kanz_containers }}</td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>Address</th>
                  <th>Return</th>
                  <th>glass</th>
                  <th>paper</th>
                  <th>food</th>
                  <th>steal</th>
                  <th>plastic_containers</th>
                  <th>kanz_containers</th>
                  <th>plastic_bages</th>
                  <th>electronic</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /CONTACT TABLE -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-hover">
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
                  <td>{{ $contact->name }}
                  </td>
                  <td>{{ $contact->email }}</td>
                  <td> {{ $contact->telephone }}</td>
                  <td>{{ $contact->message }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>id </th>
                  <th>name </th>
                  <th>email</th>
                  <th>telephone</th>
                  <th>message</th>
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