@extends('layouts.layout')
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
				<div class="row justify-content-center align-items-center">
					<h3 class="panel-title">Creating a new user</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
					<div class="card-primary">
						<form method="POST" action="{{ route('task.create')}}"  role="form">
						{{ csrf_field() }}
							<div class="card-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input name="name"type="name" class="form-control" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label for="firstname">First name</label>
								<input name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Enter first name">
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input name="phone" type="phone" class="form-control" id="phone" placeholder="Enter phone">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
							</div>
							<div class="form-group">
								<label for="type">Type</label>
								<div class="form-group">
								<select name="type" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="al">Alumno</option>
									<option value="te">Tutor laboral</option>
									<option value="tc">Tutor colegio</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="enterpise_id">Enterprise id</label>
								<select name="enterprise_id" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="">Empty</option>
									@foreach($enterprises as $enterprise)
									<option value="{{ $enterprise->id }}">{{ $enterprise->id }}------{{ $enterprise->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="cycle_id">Cycle id</label>
								<select name="cycle_id" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="">Empty</option>
									@foreach($cycles as $cycle)
									<option value="{{ $cycle->id }}">{{ $cycle->id }}------{{ $cycle->name }}</option>
									@endforeach
								</select>
								
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
							<a href="{{ route('User.index') }}">
			                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left"></i>Back</button>
		                    </a>
							<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Create</button>
							</div>
              			</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection