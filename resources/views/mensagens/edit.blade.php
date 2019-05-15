<h1> Formulário de Edição de Mensagens código {{$mensagens->id}}</h1>
<hr>
<form action="/mensagens/{{$mensagens->id}}" method="post">
{{ csrf_field() }}
{{ method_field('PUT') }}
Título: <input type="text" name="title" value="{{$mensagens->title}}" ><br>
Autor: <input type="text" name="autor" value="{{$mensagens->autor}}"> <br>
Texto: <input type="text" name="texto" value="{{$mensagens->texto}}"> <br>
<input type="submit" value="Salvar">
</form>
@if ($errors->any())
		<div class="row">
		  <div class="alert alert-danger">
		    <ul>
		      @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
		      @endforeach
		    </ul>
		  </div>
		</div>
	  @endif