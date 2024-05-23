@extends('layouts.plantilla')

@section('title', 'Editar')
    
@section('content')
    <h1 class="text-3xl font-bold">Editar curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name)}}">
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
            <input type="text" name="slug" value="{{ old('slug', $curso->slug)}}">
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
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            {{$message}}
            <br>
        @enderror
        
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection