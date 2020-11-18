@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Task_dones</h1>
		</div>
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Student_id: activate to sort column ascending" aria-sort="descending">Student_id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Task_id: activate to sort column ascending">Task_id</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mark: activate to sort column ascending">Mark</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($task_dones as $task_done)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $task_done->student_id }}----{{ $task_done->find($task_done->id)->student->name }}</td>
              <td>{{ $task_done->task_id }}</td>
              <td>{{ $task_done->mark }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('task_done.edit',$task_done->student_id) }}">Modificar</a>
                <form method="POST" action="{{ route('task_done.destroy',$task_done->student_id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteTask_done" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún task done en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Student_id</th>
            <th rowspan="1" colspan="1">Task_id</th>
            <th rowspan="1" colspan="1">Mask</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('task_done.create') }}" class="btn btn-primary">Add task_done</a>
    </div>
 
@endsection