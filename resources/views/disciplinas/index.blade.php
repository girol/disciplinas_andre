@extends('master')

@section('content')
<a class='btn btn-md btn-success' href="/disciplinas/create">Cadastrar disciplina</a>

    <body>
    <h1> Xurepschool </h1> 

    <ul>
    @foreach ( $disciplinas as $disc) 
       <li><a href="/disciplinas/{{$disc->id}}"> {{ $disc->titulo }}</a></li>
    @endforeach
    </ul>
    </body>

@endsection