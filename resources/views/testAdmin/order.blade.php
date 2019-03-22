@extends('layouts.master')
@section('styles')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
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
        <li class="active">Order tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                   
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