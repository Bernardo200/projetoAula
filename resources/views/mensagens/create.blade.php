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
<h1> Formulário de Cadastro de Mensagens </h1>
<hr>
<form action="/mensagens" method="post">
{{ csrf_field() }}
Título: <input type="text" name="title"> <br>
Autor: <input type="text" name="autor"> <br>
Texto: <input type="text" name="texto"> <br> 
<input type="submit" value="Salvar">
</form>