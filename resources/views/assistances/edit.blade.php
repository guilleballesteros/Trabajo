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
	    				<h3 class="panel-title">Creating a new assistance</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
	        				<div class="card-primary">
			    			<form method="POST" action="{{ route('assistance.update',$assistance->id) }}"  role="form">
				    		{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
					    		<div class="card-body">
    						    	<div class="form-group">
	    							<label for="student_id">Student_id</label>
		    						<input student_id="student_id"type="student_id" class="form-control" id="student_id" placeholder="Enter student_id" value="{{ $assistance->student_id }}">
			    				</div>
				    			<div class="form-group">
					    			<label for="date">Date</label>
						    		<input name="date" type="date" class="form-control" id="date" placeholder="Enter date" value="{{ $assistance->date }}">
    							</div>
                                <div class="form-group">
					    			<label for="assistance">Assistance</label>
						    		<input name="assistance" type="assistance" class="form-control" id="assistance" placeholder="Enter assistance" value="{{ $assistance->assistance }}">
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