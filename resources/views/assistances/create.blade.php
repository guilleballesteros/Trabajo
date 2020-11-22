@extends('layouts.layout')
@section('content')
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
					<h3 class="panel-title">New asistencia</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{route('assistance.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="student_id " id="student_id" class="form-control input-sm" placeholder="ID del estudiante">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="date" id="date" class="form-control input-sm" placeholder="Fecha">
									</div>
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
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('assistance.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection