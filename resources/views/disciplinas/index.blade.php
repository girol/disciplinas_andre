<html>

    <body>
    <h1> Xurepschool </h1> 

    @foreach ( $disciplinas as $disc) 
        {{ $disc->titulo }}
        <hr>
    @endforeach
    </body>
</html>
