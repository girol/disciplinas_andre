@extends('master')

@section('content')

<form method="POST" action="/disciplinas">
{{ csrf_field() }}

Título: <input name="titulo"><br><br>
Ementa: <textarea name="ementa"></textarea>
<br><br>
<button type="submit"> Salvar </button>
</form>

@endsection