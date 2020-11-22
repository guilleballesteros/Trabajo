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
					<h3 class="panel-title">New assistances</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{route('assistance.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group">
								<label for="type">Martes</label>
								<div class="form-group">
								<select name="Martes" class="form-control select2" style="width: 100%;">
									<option selected="selected">Asistido</option>
									<option>Falta justificada</option>
									<option>Falta sin justificar</option>
								</select>
								<div class="form-group">
									<div class="form-group">
										<input type="date" name="date1" id="date" class="form-control input-sm" placeholder="Fecha">
									</div>
								</div>
								</div>
								<div class="form-group">
								<label for="type">Miercoles</label>
								<div class="form-group">
								<select name="Miercoles" class="form-control select2" style="width: 100%;">
									<option selected="selected">Asistido</option>
									<option>Falta justificada</option>
									<option>Falta sin justificar</option>
								</select>
								<div class="form-group">
									<div class="form-group">
										<input type="date" name="date2" id="date" class="form-control input-sm" placeholder="Fecha">
									</div>
								</div>
								</div>
								<div class="form-group">
								<label for="type">Jueves</label>
								<div class="form-group">
								<select name="Jueves" class="form-control select2" style="width: 100%;">
									<option selected="selected">Asistido</option>
									<option>Falta justificada</option>
									<option>Falta sin justificar</option>
								</select>
								<div class="form-group">
									<div class="form-group">
										<input type="date" name="date3" id="date" class="form-control input-sm" placeholder="Fecha">
									</div>
								</div>
								</div>
							</div>
							</div>
							<div class="row">

								<div class="card-footer">
									<a href="{{ route('assistance.index') }}" >
									<button type="button" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left"></i>Back</button>
									</a>
									<input type="submit"  value="Guardar" class="btn btn-primary">	
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection