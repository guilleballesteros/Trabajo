@extends('layouts.layout')
@section('content')

  <div class="row"><div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" aria-sort="descending">Nombre</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Apellido: activate to sort column ascending">Apellido</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Telefono: activate to sort column ascending">Telefono</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email Verificado: activate to sort column ascending">Email verificado</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tipo: activate to sort column ascending">Tipo</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Id de la empresa: activate to sort column ascending">Id de la empresa</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Id del ciclo: activate to sort column ascending">Id del ciclo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
            @if( ($user->deleted) ==0)
            <tr role="row" class="odd">
              <td class="sorting_1" tabindex="0">{{ $user->name }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->email_verified_at }}</td>
              <td>{{ $user->type }}</td>
              <td>{{ $user->enterprise_id }}</td>
              <td>{{ $user->cycle_id }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('User.edit',$user->id) }}">Modificar</a>
                <form method="POST" action="{{ route('User.destroy',$user->id) }}">
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
            <th rowspan="1" colspan="1">Nombre</th>
            <th rowspan="1" colspan="1">Apellido</th>
            <th rowspan="1" colspan="1">Telefono</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Email verificado</th>
            <th rowspan="1" colspan="1">Tipo</th>
            <th rowspan="1" colspan="1">Id de la empresa</th>
            <th rowspan="1" colspan="1">Id del ciclo</th>
            <th rowspan="1" colspan="1">Acciones</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="card-footer">
      <a href="{{ route('User.create') }}" class="btn btn-primary">Añadir usuario</a>
    </div>
 
@endsection