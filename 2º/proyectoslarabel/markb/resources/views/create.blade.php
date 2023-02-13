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
			<div>
				<h2>añadir proyecto</h2>
				<form action="{{route("proyectosmb")}}" method="post">
					@csrf
					<div class="form-group">
						<label>nombre del proyecto</label>
						<input class="form-control" type="text" name="nombre"  >
					</div>
					<div class="form-group">
						<label>descripcion</label>
						<input class="form-control" type="text" name="descripccion"  >
					</div>
					<input class="btn btn-primary" type="submit">
				</form>
				
			</div>

		</div>
		

		<!--script de bootstrap-->
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
		
	</body>
</html>