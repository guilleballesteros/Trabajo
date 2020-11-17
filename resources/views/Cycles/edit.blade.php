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
    				<div class="panel-heading
                    ">
	    				<h3 class="panel-title">Creating a new cycle</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
	        				<div class="card-primary">
			    			<form method="POST" action="{{ route('cycle.update',$cycle->id) }}"  role="form">
				    		{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
					    		<div class="card-body">
    						    	<div class="form-group">
	    							<label for="name">Name</label>
		    						<input name="name"type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $cycle->name }}">
			    				</div>
				    			<div class="form-group">
					    			<label for="grade">Grade</label>
						    		<input name="grade" type="grade" class="form-control" id="grade" placeholder="Enter grade" value="{{ $cycle->grade }}">
    							</div>
                                <div class="form-group">
					    			<label for="year">Year</label>
						    		<input name="year" type="year" class="form-control" id="year" placeholder="Enter year" value="{{ $cycle->year }}">
    							</div>
					    		<div class="form-group">
						    		<label for="autor">Autor</label>
							    	<input name="email" type="autor" class="form-control" id="autor" placeholder="Enter autor" value="{{ $cycle->autor }}">
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