<html>

<a href="/disciplinas/create">Cadastrar disciplina</a>

    <body>
    <h1> Xurepschool </h1> 

    @foreach ( $disciplinas as $disc) 
        {{ $disc->titulo }}
        <hr>
    @endforeach
    </body>
</html>
