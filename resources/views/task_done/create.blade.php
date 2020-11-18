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
								<label for="student_id">student_id</label>
								<select name="student_id" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="">Empty</option>
									@foreach($Users as $User)
									<option value="{{ $User->id }}">{{ $User->id }}------{{ $User->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="task_id">Task_id</label>
								<input name="task_id" type="task_id" class="form-control" id="task_id" placeholder="Enter task_id">
							</div>
							<div class="form-group">
								<label for="mask">Mask</label>
								<input name="mask" type="mask" class="form-control" id="mask" placeholder="Enter mask">
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