@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Students and Enterprises</h1>
		</div>
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Student Id: activate to sort column ascending" aria-sort="descending">Student Id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Enterprise Id: activate to sort column ascending">Enterprise Id</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($belongs as $belong)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $belong->student_id }}----{{ $belong->find($belong->id)->student->name }}</td>
              <td>{{ $belong->enterprise_id }}----{{ $belong->find($belong->id)->enterprise->name }}</td>
              <td>
                <a class="btn btn-primary" data-toggle="tooltip" title="modify" href="{{ route('belong.edit',$belong->id) }}"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{ route('belong.destroy',$belong->id) }}">
                    {{ method_field('DELETE') }} 
                    {{ csrf_field() }} 
                      <button type="submit" data-toggle="tooltip" title="delete" name="deleteUser" class="btn btn-danger"><i class="far fa-trash-alt"></i></button> 
                </form>
              </td>
           </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún Usuario en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Student Id</th>
            <th rowspan="1" colspan="1">Enterprise Id</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('belong.create') }}" class="btn btn-primary">Add relation</a>
    </div>
 
@endsection