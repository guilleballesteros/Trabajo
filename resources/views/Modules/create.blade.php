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
					<h3 class="panel-title">Creating a new user</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
					<div class="card-primary">
						<form method="POST" action="{{ route('module.create')}}"  role="form">
						{{ csrf_field() }}
							<div class="card-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input name="name"type="name" class="form-control" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label for="cycle_id">Cycle id</label>
								<select name="cycle_id" class="form-control select2" style="width: 100%;">
									@foreach($cycles as $cycle)
									<option value="{{ $cycle->id }}">{{ $cycle->id }}------{{ $cycle->name }}</option>
									@endforeach
								</select>
								
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
                            <a href="{{ route('module.index') }}">
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