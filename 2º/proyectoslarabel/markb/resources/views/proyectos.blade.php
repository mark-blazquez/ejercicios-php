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
			<p>estos son los proyectos elige accion</p></br>
			<a class="nav-link" href="{{route("createmb")}}">añadir</a> </br>
		</div>

			@foreach( $proyectos as $key => $proyecto )
				<div class="card m-2" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">nombre proyecto:{{$proyecto->nombre}}</h5>
						<p class="card-text">descripcion:{{$proyecto->descripcion}}</p>
					</div>
					<div>
						<form action="{{route("proyectosmb")}}" method="post">
							@csrf @method("delete")
							<div class="form-group d-none">
								<input class="form-control"  name="id" value="{{$proyecto->id}}" placeholder="id del producto">
							</div>
							<input class="btn btn-danger" type="submit" value="eliminar">
						</form>
					</div>
				</div>
				
			</div>
			@endforeach		

		<!--script de bootstrap-->
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
		
	</body>
</html>
