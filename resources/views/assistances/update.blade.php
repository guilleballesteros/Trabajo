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
	    				<h3 class="panel-title">Updating a new Assistance</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
                        <form method="POST" action="{{route('assistance.update', $assistance->id) }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group">
								<label for="type">Martes</label>
								<div class="form-group">
								<select name="Martes" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="al">Asistido</option>
									<option value="te">Falta justificada</option>
									<option value="tc">Falta sin justificar</option>
								</select>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="date1" id="date" class="form-control input-sm" placeholder="Fecha" value="{{$assistance->date}}"> >
									</div>
								</div>
								</div>
								<div class="form-group">
								<label for="type">Miercoles</label>
								<div class="form-group">
								<select name="Miercoles" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="al">Asistido</option>
									<option value="te">Falta justificada</option>
									<option value="tc">Falta sin justificar</option>
								</select>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="date2" id="date" class="form-control input-sm" placeholder="Fecha"value="{{$assistance->date}}">
									</div>
								</div>
								</div>
								<div class="form-group">
								<label for="type">Jueves</label>
								<div class="form-group">
								<select name="Jueves" class="form-control select2" style="width: 100%;">
									<option selected="selected" value="al">Asistido</option>
									<option value="te">Falta justificada</option>
									<option value="tc">Falta sin justificar</option>
								</select>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="date3" id="date" class="form-control input-sm" placeholder="Fecha"value="{{$assistance->date}}">
									</div>
								</div>
								</div>
							</div>
							</div>
							 <!-- /.card-body -->

                             <div class="card-footer">
    							<button type="submit" class="btn btn-primary">Update</button>
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