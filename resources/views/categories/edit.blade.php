@extends('layouts.app')
@section('content')
<form action="{{route('list.update',$data->id)}}" method="POST">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="form-group">
        <input type="text" value="{{$data->name}}" name="name">
        </div>
        <button type="submit" class="btn btn-primary">EDITAR</button>
    </form>
@endsection