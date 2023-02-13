<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>examen</title>
	</head>

	
	<body>
		<!--la cabecera importada-->
		@component("componentes.cabecera")	
		@endcomponent
		<div class="container">
			estas son las tareas listadas
		</div>
		@foreach( $tareas as $key => $tarea )
			<div class="card m-2" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">nombre tarea:{{$tarea->nombre}}</h5>
					<p class="card-text">duracion:{{$tarea->duracion}}</p>
					<p class="card-text">fecha inicio:{{$tarea->fechainicio}}</p>
					<p class="card-text">fecha fin:{{$tarea->fechafin}}</p>
				</div>
		@endforeach
		

		<!--script de bootstrap-->
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
		
	</body>
</html>
