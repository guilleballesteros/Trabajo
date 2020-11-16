@extends('admin.layout')
@section('content')
<div class="wrapper">
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
					<h3 class="panel-title">New enterprise</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('enterprise.store') }}"  role="form">
						{{ csrf_field() }}
							<div class="card-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input name="name" type="name" class="form-control" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
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
@endsection