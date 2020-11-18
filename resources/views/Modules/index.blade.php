@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">modules</h1>
		</div>
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Cycle Id: activate to sort column ascending">Cycle Id</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($modules as $module)
            @if( ($module->deleted) ==0)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $module->name }}</td>
              <td>{{ $module->cycle_id }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('module.edit',$module->id) }}">Modify</a>
                <form method="POST" action="{{ route('module.destroy',$module->id) }}">
                {{ method_field('DELETE') }} 
                {{ csrf_field() }} 
                  <button type="submit" name="deleteUser" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
           </tr>
           @endif
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ningún Usuario en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Name</th>
            <th rowspan="1" colspan="1">Cycle Id</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('module.create') }}" class="btn btn-primary">Add Module</a>
    </div>
 
@endsection