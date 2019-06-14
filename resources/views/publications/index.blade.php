@extends('layouts.app')
@section('content')
<a href="{{url('home/publication/create')}}">Crear</a>
    <table class="table table-bordered">
        <tr>
            <td>Nombre</td>
            <td>Description</td>
            <td>Categoria</td>
        </tr>
        @foreach ($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
