@extends('layouts.app')
@section('content')
    <section>
    <form role="form" id="Formulario" action="{{route('list.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label" for="Name">Nombre Categoria</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nueva categoria" required autofocus />
            </div>  
            <button type="submit">Crear</button> 
    </form>
</section>
@endsection
