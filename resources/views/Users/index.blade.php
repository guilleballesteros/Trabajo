@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Users</h1>
		</div>
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="First name: activate to sort column ascending">First name</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Telephone: activate to sort column ascending">Telephone</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email verifyed: activate to sort column ascending">Email verifyed</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending">Type</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Enterprise: activate to sort column ascending">Enterprise </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Cycle: activate to sort column ascending">Cycle</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $user->name }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->email_verified_at }}</td>
              <td>{{ $user->type }}</td>
              @if(($user->enterprise_id)==null)
              <td>{{$user->enterprise_id}}</td>
              @else
              <td>{{$user->enterprise_id}}----{{ $user->find($user->id)->enterprise->name }}</td>
              @endif
              @if(($user->cycle)==null)
              <td>{{$user->cycle_id}}</td>
              @else
              <td>{{$user->cycle_id}}----{{ $user->find($user->id)->cycle->name }}</td>
              @endif
              <td>
                <a class="btn btn-primary" data-toggle="tooltip" title="modify" href="{{ route('User.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{ route('User.destroy',$user->id) }}">
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
            <th rowspan="1" colspan="1">Name</th>
            <th rowspan="1" colspan="1">First name</th>
            <th rowspan="1" colspan="1">Telephone</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Email verifyed</th>
            <th rowspan="1" colspan="1">Type</th>
            <th rowspan="1" colspan="1">Enterprise</th>
            <th rowspan="1" colspan="1">Cycle</th>
            <th rowspan="1" colspan="1">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('User.create') }}" class="btn btn-primary">Add user</a>
    </div>
 
@endsection