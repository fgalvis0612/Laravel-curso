@extends('layouts.plantilla')

@section('title', 'index')

@section('content')
    <h1 class="text-3xl font-bold">Bienvenidos a la pagina index</h1><br>
    <a href="{{route('cursos.create')}}">Crear curso</a><br><br>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>
{{$cursos->links('pagination::bootstrap-5')}}
@endsection
