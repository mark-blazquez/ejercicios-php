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
			<p>oola esta es la pgina de inicio del examen </p>
		</div>
		

		<!--script de bootstrap-->
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
		
	</body>
</html>
