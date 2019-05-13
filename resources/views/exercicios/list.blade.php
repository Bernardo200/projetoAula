<h1>Lista de Exercicios</h1>
<hr>
@foreach($exercicios as $a)

	<p>{{$a->titulo}}</p>
	<p>{{$a->texto}}</p>
	<p>{{$a->autor}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->       