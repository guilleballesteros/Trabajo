@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="number: activate to sort column ascending" aria-sort="descending">Number</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="description: activate to sort column ascending">Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @if((Auth::user()->type)=='tc')
          @forelse($ras as $ra)
            @foreach(($ra->find($ra->id)->ces) as $ce)
              @if(($ce->find($ce->id)->task->deleted)==0)
                <tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">{{ $ce->find($ce->id)->task->number }}</td>
                  <td>{{  $ce->find($ce->id)->task->description }}</td>
                  <td>
                    <a class="btn btn-primary"  data-toggle="tooltip" title="modify" href="{{ route('task.edit',$ce->task_id) }}"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{ route('task.destroy',$ce->task_id) }}">
                    {{ method_field('DELETE') }} 
                    {{ csrf_field() }} 
                      <button type="submit" data-toggle="tooltip" title="delete" name="deleteUser" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button> 
                    </form>
                  </td>
                </tr>
              @endif
            @endforeach
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún task en este momento") }}
              </div>
          @endforelse
        @else
          @forelse($tasks as $task)
                <tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">{{ $task->number }}</td>
                  <td>{{ $task->description }}</td>
                  <td>
                    <a class="btn btn-primary" data-toggle="tooltip" title="modify" href="{{ route('task.edit',$task->id) }}"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{ route('task.destroy',$task->id) }}">
                    {{ method_field('DELETE') }} 
                    {{ csrf_field() }} 
                      <button type="submit" data-toggle="tooltip" title="delete" name="deleteUser" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button> 
                    </form>
                  </td>
                </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún task en este momento") }}
              </div>
          @endforelse
        @endif
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">number</th>
            <th rowspan="1" colspan="1">description</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('task.create')}}" class="btn btn-primary">Añadir task</a>
    </div>
 
@endsection