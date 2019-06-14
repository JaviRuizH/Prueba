@extends('layouts.app')
@section('content')
<table class="table">
<button class="btn btn-default"><a href="{{route('list.create')}}"><p>Nueva</p></a></button>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th colspan="2">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
               <tr>
          <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
               <td><a href="{{url('home/list',$data->id)}}/edit">Editar</a></td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
@endsection