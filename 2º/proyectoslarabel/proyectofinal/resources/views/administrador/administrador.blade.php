
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
				
				<h4><a class="text-dark" href="{{route("create")}}">Añadir producto</a></h4></br>
			</div>
			<div class="d-flex">
				<?php
				if(isset($productos)){?>
				@foreach( $productos as $key => $producto )
				<div class="card m-2" style="width: 18rem;">
					<img class="card-img-top" src="{{$producto->imagen}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">id producto:{{$producto->id}}</h5>
						<p class="card-text">nombre del producto:{{$producto->nombre}}</p>
						<p class="card-text">categoria del producto:{{$producto->categoria}}</p>
						<div class="d-flex">
							<form action="{{route("administrador")}}" method="post">
								@csrf @method("delete")
								<div class="form-group d-none">
									<label>id del producto</label>
									<input class="form-control" type="number" name="id" value="{{$producto->id}}" placeholder="id del producto">
									{!! $errors->first("id","<small class='text-danger'>:message</small></br>") !!}
								</div>
								<input class="btn btn-danger" type="submit" value="eliminar">
							</form>
							<form action="{{route("update")}}" method="post">
								@csrf 
								<div class="form-group d-none">
									<label>id del producto</label>
									<input class="form-control" type="number" name="id" value="{{$producto->id}}" placeholder="id del producto">
									{!! $errors->first("id","<small class='text-danger'>:message</small></br>") !!}
								</div>
								<input class="btn btn-warning" type="submit" value="modificar">
							</form>
						</div>
					</div>
					
				</div>
				@endforeach
				<?php }?>
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