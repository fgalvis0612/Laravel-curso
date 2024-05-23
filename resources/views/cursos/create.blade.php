@extends('layouts.plantilla')

@section('title', 'Crear')
    
@section('content')
    <h1 class="text-3xl font-bold">Crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            {{$message}}
            <br>
        @enderror
        <br>

        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <br>
            {{$message}}
            <br>
        @enderror
        <br>


        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            {{$message}}
            <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            {{$message}}
            <br>
        @enderror
        <br><br>
        <button type="submit">Guardar</button>
    </form>
@endsection