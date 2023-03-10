<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>proyectoinica</title>
	</head>

	
	<body>
		<!--la cabecera importada-->
		@component('componentes.cabeceraadmin')	
		@endcomponent
		<div class="container">
			<div class="d-flex justify-content-center">
				<h2>gestion de productos</h2>
			</div>
			<div>
				<h2>añadir producto</h2>
				<form action="{{route("administrador")}}" method="post">
					@csrf
					<div class="form-group">
						<label>nombre del producto</label>
						<input class="form-control" type="text" name="nombre" value="{{old("name")}}" placeholder="nombre">
						{!! $errors->first("nombre","<small class='text-danger'>:message</small></br>") !!}
					</div>
					<div class="form-group">
						<label>categoria del producto</label>
						<input class="form-control" type="text" name="categoria" value="{{old("categoria")}}" placeholder="categoria">
						{!! $errors->first("categoria","<small class='text-danger'>:message</small></br>") !!}
					</div>
					<div class="form-group">
						<label>imagen del producto</label>
						<input class="form-control" type="text" name="imagen" value="{{old("iamgen")}}" placeholder="imagen">
						{!! $errors->first("imagen","<small class='text-danger'>:message</small></br>") !!}
					</div>

					<input class="btn btn-success" type="submit">
				</form>
				
			</div>

		</div>
		<!--script de bootstrap-->
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>		
	</body>
</html>
