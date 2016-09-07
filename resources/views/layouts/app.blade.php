
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Sysadmins">
<meta name="author" content="Matias Pierantoni">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="icon" href="./favicon.ico">
<title>Denuncias</title>
<!-- Bootstrap core CSS -->
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Material Design fonts -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
	type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- Bootstrap Material Design -->
<link
	href="./bootstrap-material-design-master/dist/css/bootstrap-material-design.css"
	rel="stylesheet">
<link href="./bootstrap-material-design-master/dist/css/ripples.min.css"
	rel="stylesheet">

<link href="./nvd3/build/nv.d3.min.css" rel="stylesheet">


<!-- Custom styles -->
<link href="dashboard.css" rel="stylesheet">
</head>

<body>


	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-gus-responsive-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/home') }}" style="font-size: 25px;">Sistema
					Judicial</a>
			</div>

			<div class="navbar-collapse collapse navbar-gus-responsive-collapse">
				<ul class="nav navbar-nav navbar-right">



					<!-- Right Side Of Navbar -->
					<!-- Authentication Links -->
					@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li> @else
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false"> {{
							Auth::user()->name }} <span class="caret"></span>
					</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/logout') }}"><i
									class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul></li> @endif

				</ul>
			</div>

		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">

				<ul class="nav nav-sidebar navbar-collapse collapse"
					role="navigation">
					<li class=" withripple"><a href="{{ url('/home') }}"> <i
							class="material-icons">home</i> Inicio
					</a></li>
					<li>
					
					<li class="active withripple"><a href="{{ url('/denuncias') }}"> <i
							class="material-icons">report_problems</i> Denuncias
					</a></li>

					<li class=" withripple"><a href="{{ url('/home') }}"> <i
							class="material-icons">help</i> Ayuda
					</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">

				@yield('content')

</body>
</html>
