@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">New user</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="insertUsers"  role="form">
							<div class="card-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="name" class="form-control" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label for="first name">Email</label>
								<input type="first name" class="form-control" id="first name" placeholder="Enter first name">
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="phone" class="form-control" id="phone" placeholder="Enter phone">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="email_verified_at">Confirmed Email</label>
								<input type="email_verified_at" class="form-control" id="email_verified_at" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Enter password">
							</div>
							<div class="form-group">
								<label for="type">Type</label>
								<input type="type" class="form-control" id="type" placeholder="Enter type">
							</div>
							<div class="form-group">
								<label for="enterpise_id">Email</label>
								<input type="enterprise_id" class="form-control" id="enterprise_id" placeholder="Enter enterprise id">
							</div>
							<div class="form-group">
								<label for="cycle_id">Email</label>
								<input type="cycle_id" class="form-control" id="cycle_id" placeholder="Enter cycle id">
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							</div>
              			</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/js/demo.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
@endsection