@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de empresas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('enterprise.create') }}" class="btn btn-info" >Añadir estudiante</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>email</th>
               <th>deleted</th>
             </thead>
             <tbody>
              @if($enterprises->count())  
              @foreach($enterprises as $enterprise) 
              <tr>
                <td>{{$enterprise->name}}</td>
                <td>{{$enterprise->email}}</td>
                <td>{{$enterprise->deleted}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('StudentController@edit', $enterprise->name)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('StudentController@destroy', $enterprise->name)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $students->links() }}
    </div>
  </div>
</section>

@endsection