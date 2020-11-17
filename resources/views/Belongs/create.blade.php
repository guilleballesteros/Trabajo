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
				<div class="panel-heading">
					<h3 class="panel-title">Creating a new Student and Enterprise Relation</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
					<div class="card-primary">
						<form method="POST" action="{{ route('belong.store') }}"  role="form">
						{{ csrf_field() }}
							<div class="card-body">
							<div class="form-group">
								<label for="student_id">Student id</label>
								<div class="form-group">
								<select name="student_id" class="form-control select2" style="width: 100%;">
                                    @foreach($students as $student)
                                    @if(($student->type) =='al')
                                        <option value="{{ $student->id }}">{{ $student->id }}->{{ $student->name }}</option>
                                     @endif
                                    @endforeach
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="enterprise_id">Enterprise id</label>
								<div class="form-group">
								<select name="enterprise_id" class="form-control select2" style="width: 100%;">
                                    @foreach($enterprises as $enterprise)
                                        <option value="{{ $enterprise->id }}">{{ $enterprise->id }}->{{ $enterprise->name }}</option>
                                    @endforeach
								</select>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
							<button type="submit" class="btn btn-primary">Create</button>
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