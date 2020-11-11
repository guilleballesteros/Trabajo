@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista tutores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('users.create') }}" class="btn btn-info" >Añadir tutor</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Name</th>
               <th>Firstname</th>
               <th>Email</th>
               <th>Phone</th>
               <th>IdCycle</th>
               <th>Deleted</th>
             </thead>
             <tbody>
              @if($users->count())  
              @foreach($users as $users)  
              <tr>
                <td>{{$users->name}}</td>
                <td>{{$users->firstname}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->phone}}</td>
                <td>{{$users->cycle_id}}</td>
                <td>{{$users->delete}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('TutorCController@edit', $users->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('TutorCController@destroy', $users->id)}}" method="post">
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
      {{ $libros->links() }}
    </div>
  </div>
</section>

@endsection