@extends('layouts.layout')
@section('content')
  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($enterprises as $enterprise)
          
          <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $enterprise->name }}</td>
              <td>{{ $enterprise->email }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('enterprise.edit',$enterprise->id) }}">Modify</a>
                <form method="POST" action="{{ route('enterprise.destroy',$enterprise->id) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }} 
                  <button type="submit" name="deleteenterprise" class="btn btn-danger"> {{ __("Delete") }} </button> 
                </form>
              </td>
          </tr>
          
          @empty
              <div class="alert alert-danger">
                  {{ __("No hay ninguna empresa en este momento") }}
              </div>
          @endforelse
        </tbody>
        <tfoot>
          <tr>
            <th rowspan="1" colspan="1">Name</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('enterprise.create') }}" class="btn btn-primary">Add enterprise</a>
    </div>

@endsection