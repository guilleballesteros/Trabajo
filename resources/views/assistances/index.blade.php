@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Assistance</h1>
		</div>
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Student_id: activate to sort column ascending" aria-sort="descending">Student_id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Assistance: activate to sort column ascending">Assistance</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($assistances as $assistance)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{$assistance->student_id}}----{{ $assistance->find($assistance->id)->student->name }}</td>
              <td>{{ $assistance->date }}</td>
              <td>{{ $assistance->assistance }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('assistance.edit',$assistance->id) }}">Modify</a>
                <form method="POST" action="{{ route('assistance.destroy',$assistance->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteaAssistance" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún assistance en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Student_id</th>
            <th rowspan="1" colspan="1">Date</th>
            <th rowspan="1" colspan="1">Assistance</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('assistance.create') }}" class="btn btn-primary">Add assistance</a>
    </div>
 
@endsection