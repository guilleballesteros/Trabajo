@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Grade: activate to sort column ascending">Grade</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Year: activate to sort column ascending">Year</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($cycles as $cycle)
            
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $cycle->name }}</td>
              <td>{{ $cycle->grade }}</td>
              <td>{{ $cycle->year }}</td>
              <td>
                <a class="btn btn-primary" data-toggle="tooltip" title="modify" href="{{ route('cycle.edit',$cycle->id) }}"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{ route('cycle.destroy',$cycle->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" data-toggle="tooltip" title="delete" name="deletecycle" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button>
                </form>
              </td>
           </tr>
           
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún ciclo en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Name</th>
            <th rowspan="1" colspan="1">Grade</th>
            <th rowspan="1" colspan="1">Year</th>
            <th rowspan="1" colspan="1">Acciones</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('cycle.create') }}" class="btn btn-primary">Add cycle</a>
    </div>
 
@endsection