
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

<script src="./jquery-2.2.0.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"	charset="utf-8"></script>
<script	src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script	src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>

<!-- Wizard -->
<script src="./twitter-bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="./jquery-validation/dist/jquery.validate.min.js"></script>
<script src="./nvd3/build/nv.d3.min.js"></script>

<!-- Para el datepicker -->
<script src="./bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script	src="./bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
<link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">

<!-- Material Design fonts -->
<link rel="stylesheet"	href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap Material Design -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap-material-design-master/dist/js/ripples.min.js"></script>
<script src="./bootstrap-material-design-master/dist/js/material.min.js"></script>
<link href="./bootstrap-material-design-master/dist/css/bootstrap-material-design.css" rel="stylesheet">
<link href="./bootstrap-material-design-master/dist/css/ripples.min.css" rel="stylesheet">
<link href="./nvd3/build/nv.d3.min.css" rel="stylesheet">
<link href="./bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">

<script src="./validator/validator.min.js"></script>


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
