@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" aria-sort="descending">Type</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending">Reason</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Observation: activate to sort column ascending">Observation</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending">Phone</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tutor_c_id: Verificado: activate to sort column ascending">Tutor_c_id</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($tracings as $tracing)
            @if( ($user->deleted) ==0)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $tracing->type }}</td>
              <td>{{ $tracing->reason }}</td>
              <td>{{ $tracing->observation }}</td>
              <td>{{ $tracing->phone }}</td>
              <td>{{ $tracing->tutor_c_id }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('Tracing.edit',$tracing->id) }}">Modificar</a>
                <form method="POST" action="{{ route('Tracing.destroy',$tracing->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteTracing" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
           @endif
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún tracing en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Type</th>
            <th rowspan="1" colspan="1">Reason</th>
            <th rowspan="1" colspan="1">observation</th>
            <th rowspan="1" colspan="1">Phone</th>
            <th rowspan="1" colspan="1">Tutor_c_id</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('User.create') }}" class="btn btn-primary">Add tracing</a>
    </div>
 
@endsection