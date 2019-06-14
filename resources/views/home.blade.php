@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <span>Categorias</span><br>
               <select id="category">
                   <option></option>
                   @foreach($data as $data)
                   <option value="{{$data->id}}">{{$data->name}}</option>
                   @endforeach
               </select>
               <a href="#" id="list">publicaciones</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="publications"></div>
    </div>
</div>
@endsection
