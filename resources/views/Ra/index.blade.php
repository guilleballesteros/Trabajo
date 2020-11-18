@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="number: activate to sort column ascending" aria-sort="descending">Number</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="description: activate to sort column ascending">Description</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="module_id: activate to sort column ascending">Module_id</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($ra as $ra)
            @if( ($ra->deleted) ==0)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $ra->number }}</td>
              <td>{{ $ra->description }}</td>
              <td>{{ $ra->module_id }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('ra.edit',$ra->id) }}">Modificar</a>
                <form method="POST" action="{{ route('ra.destroy',$ra->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteUser" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
           @endif
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún RA en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">number</th>
            <th rowspan="1" colspan="1">description</th>
            <th rowspan="1" colspan="1">module_id</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('ra.create')}}" class="btn btn-primary">Añadir RA</a>
    </div>
 
@endsection