@extends('admin.layout')
@section('content')
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tasks</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <!-- /.card-header -->
  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending" aria-sort="descending">Number</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending">Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($tasks as $task)
          <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $task->number }}</td>
              <td>{{ $task->description }}</td>
              <td>
                <a class="btn btn-primary" href="modUser/{{ $user->id }}">Modificar</a>
                <a class="btn btn-primary" href="delUser/{{ $user->id }}">Eliminar</a>
              </td>
          </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ninguna task en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Number</th>
            <th rowspan="1" colspan="1">Descrption</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="addtask" class="btn btn-primary">Añadir task</a>
    </div>
  <!-- jQuery -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminlte/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="adminlte/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
@endsection