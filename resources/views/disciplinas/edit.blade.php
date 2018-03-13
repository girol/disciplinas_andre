<form method="POST" action="/disciplinas/{{ $disciplina->id }}">
{{ csrf_field() }}
{{ method_field('patch') }}

Título: <input name="titulo" value="{{ $disciplina->titulo }}"><br><br>
Ementa: <textarea name="ementa"> 
{{ $disciplina->ementa }}
</textarea>
<br><br>
<button type="submit"> Salvar </button>
</form>
