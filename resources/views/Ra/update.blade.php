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
	    				<h3 class="panel-title">Creating a new RA</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
	        				<div class="card-primary">
			    			<form method="POST" action="{{ route('ra.update', $ra->id)}}"  role="form">
				    		{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
					    		<div class="card-body">
							<div class="form-group">
								<label for="number">Number</label>
								<input name="number"type="number" class="form-control" id="number" placeholder="Enter number" value="{{$ra->number}}">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input name="description" type="description" class="form-control" id="description" placeholder="Enter description" value="{{$ra->description}}">
							</div>
							<div class="form-group">
								<label for="module_id">Module_id</label>
								<input name="module_id" type="module_id" class="form-control" id="module_id" placeholder="Enter module_id" value="{{$ra->module_id}}">
							</div>
							    <!-- /.card-body -->

	    						<div class="card-footer">
								<a href="{{ route('User.index') }}">
			                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left"></i>Back</button>
		                    </a>
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