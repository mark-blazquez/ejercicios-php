<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">

			<div class="d-flex">
				<a class="text-dark" href="{{ route('administrador') }}"><h1 class="jsutify-content-center">PAGINA ADMIN</h1></a>			
			</div>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">

			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}"><h2>{{ __('Login') }}</h2></a>
						</li>
					@endif
					
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}"><h2>{{ __('Register') }}</h2></a>
						</li>
					@endif
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<h2>{{ Auth::user()->name }}</h2>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('cerrar sesion') }}
							</a>
							

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</ul>
		</div>
		
	</nav>
</header>