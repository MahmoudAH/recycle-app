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
        <li class="active">Contact table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
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