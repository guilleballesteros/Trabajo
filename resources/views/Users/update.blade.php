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
	    				<h3 class="panel-title">Updating an User</h3>
		    		</div>
			    	<div class="panel-body">					
    					<div class="table-container">
	        				<div class="card-primary">
			    			<form method="POST" action="{{ route('User.update',$user->id) }}"  role="form">
				    		{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
					    		<div class="card-body">
    						    	<div class="form-group">
	    							<label for="name">Name</label>
		    						<input name="name"type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }}">
			    				</div>
				    			<div class="form-group">
					    			<label for="firstname">First name</label>
						    		<input name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Enter first name" value="{{ $user->firstname }}">
    							</div>
	    						<div class="form-group">
		    						<label for="phone">Phone</label>
			    					<input name="phone" type="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ $user->phone }}">
				    			</div>
					    		<div class="form-group">
						    		<label for="email">Email</label>
							    	<input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="{{ $user->email }}">
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
									@if(($user->enterprise_id)=='')
										<option selected="selected" value="">Empty</option>
									@endif
									@foreach($enterprises as $enterprise)
										@if(($user->enterprise_id)==($enterprise->id))
										<option selected="selected" value="{{ $enterprise->id }}">{{ $enterprise->id }}------{{ $enterprise->name }}</option>
										@else
											<option value="{{ $enterprise->id }}">{{ $enterprise->id }}------{{ $enterprise->name }}</option>
										@endif
									@endforeach
									</select>
		    					</div>
			    				<div class="form-group">
				    				<label for="cycle_id">Cycle id</label>
					    			<select name="cycle_id" class="form-control select2" style="width: 100%;">
									@if(($user->enterprise_id)=='')
										<option selected="selected" value="">Empty</option>
									@endif
									@foreach($cycles as $cycle)
										@if(($user->cycle_id)==($cycle->id))
										<option selected="selected" value="{{ $cycle->id }}">{{ $cycle->id }}------{{ $cycle->name }}</option>
										@else
										<option value="{{ $cycle->id }}">{{ $cycle->id }}------{{ $cycle->name }}</option>
										@endif
									@endforeach
									</select>
						    	</div>
							    <!-- /.card-body -->
	    						<div class="card-footer">
    							<a href="{{ route('User.index') }}">
			                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left"></i>Back</button>
		                    	</a>
								<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Update</button>
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