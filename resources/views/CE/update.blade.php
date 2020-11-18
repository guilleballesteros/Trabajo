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
	    				<h3 class="panel-title">Creating a new CE</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
	        				<div class="card-primary">
			    			<form method="POST" action="{{ route('ce.update', $ce->id)}}"  role="form">
				    		{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
					    		<div class="card-body">
							<div class="form-group">
								<label for="word">Word</label>
								<input name="word"type="word" class="form-control" id="word" placeholder="Enter word" value="{{$ce->word}}">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input name="description" type="description" class="form-control" id="description" placeholder="Enter description" value="{{$ce->description}}">
							</div>
							<div class="form-group">
								<label for="ra_id">RA_id</label>
								<input name="ra_id" type="ra_id" class="form-control" id="ra_id" placeholder="Enter ra_id" value="{{$ce->ra_id}}">
							</div>
							<div class="form-group">
								<label for="task_id">Task_id</label>
								<input name="task_id" type="task_id" class="form-control" id="task_id" placeholder="Enter task_id" value="{{$ce->task_id}}">
							</div>
							<div class= "form-group">
								<label for="mark">Mark</label>
								<input name="mark" type="mark" class="form-control" id="mark" placeholder="Enter mark" value="{{$ce->mark}}">
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