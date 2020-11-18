@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="word: activate to sort column ascending" aria-sort="descending">Word</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="description: activate to sort column ascending">Description</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="ra_id: activate to sort column ascending">RA_id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="task_id: activate to sort column ascending">Task_id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="mark: activate to sort column ascending">Mark</th>

            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($ce as $ce)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $ce->word }}</td>
              <td>{{ $ce->description }}</td>
              <td>{{ $ce->ra_id }}</td>
              <td>{{ $ce->task_id }}</td>
              <td>{{ $ce->mark }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('ce.edit',$ce->id) }}">Modificar</a>
                <form method="POST" action="{{ route('ce.destroy',$ce->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteUser" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún CE en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">word</th>
            <th rowspan="1" colspan="1">description</th>
            <th rowspan="1" colspan="1">ra_id</th>
            <th rowspan="1" colspan="1">task_id</th>
            <th rowspan="1" colspan="1">mark</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('ce.create')}}" class="btn btn-primary">Añadir CE</a>
    </div>
 
@endsection