@extends('admin.layout')
@section('content')
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios</title>
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
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" aria-sort="descending">Nombre</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Apellido: activate to sort column ascending">Apellido</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Telefono: activate to sort column ascending">Telefono</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email Verificado: activate to sort column ascending">Email verificado</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tipo: activate to sort column ascending">Tipo</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Id de la empresa: activate to sort column ascending">Id de la empresa</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Id del ciclo: activate to sort column ascending">Id del ciclo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
          <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $user->name }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->email_verified_at }}</td>
              <td>{{ $user->type }}</td>
              <td>{{ $user->enterprise_id }}</td>
              <td>{{ $user->cycle_id }}</td>
              <td>
                <a class="btn btn-primary" href="modUser/{{ $user->id }}">Modificar</a>
                <a class="btn btn-primary" href="delUser/{{ $user->id }}">Eliminar</a>
              </td>
          </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún Usuario en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Nombre</th>
            <th rowspan="1" colspan="1">Apellido</th>
            <th rowspan="1" colspan="1">Telefono</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Email verificado</th>
            <th rowspan="1" colspan="1">Tipo</th>
            <th rowspan="1" colspan="1">Id de la empresa</th>
            <th rowspan="1" colspan="1">Id del ciclo</th>
            <th rowspan="1" colspan="1">Acciones</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="añadirUsuario" class="btn btn-primary">Añadir usuario</a>
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