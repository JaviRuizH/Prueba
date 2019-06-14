@extends('layouts.app')
@section('content')
    <section>
    <form role="form" id="Formulario" action="{{route('publication.store')}}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <select name="category">
                    @foreach ($data as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label class="control-label" for="Name">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="nueva categoria" required autofocus />
            </div>
            <div class="form-group">
                    <label class="control-label" for="Name">Descripcion</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="nueva categoria" required autofocus />
                </div>   
            <button type="submit">Crear</button> 
    </form>
</section>
@endsection
