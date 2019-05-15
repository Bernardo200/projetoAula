<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $a)
	<p><a href="/mensagens/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->autor}}</p>
    <p>{{$a->texto}}</p>
	<br>
@endforeach


@if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif