@extends('layouts.app') @section('content')
<head>
<style type="text/css">

ol {
	margin: 0;
	padding: 0
}

table td, table th {
	padding: 0
}

.c0 {
	font-size: 12pt;
	font-family: "Verdana";
	font-style: italic;
	color: #000000;
	font-weight: 700
}

.c9 {
	font-size: 16pt;
	font-family: "Arial";
	font-style: italic;
	color: #000000;
	font-weight: 700
}

.c4 {
	font-size: 16pt;
	font-family: "Verdana";
	color: #000000;
	font-weight: 400
}

.c7 {
	font-size: 12pt;
	font-family: "Verdana";
	color: #000000;
	font-weight: 700
}

.c3 {
	font-size: 12pt;
	font-family: "Verdana";
	color: #000000;
	font-weight: 400
}

.c6 {
	background-color: #ffffff;
	max-width: 439.4pt;
	padding: 113.4pt 42.5pt 42.5pt 113.4pt
}

.c2 {
	orphans: 2;
	widows: 2;
	text-align: justify
}

.c8 {
	orphans: 2;
	widows: 2
}

.c1 {
	text-decoration: underline
}

.c5 {
	height: 11pt
}

.title {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 16pt;
	padding-bottom: 3pt;
	font-family: "Arial";
	line-height: 1.5;
	orphans: 2;
	widows: 2;
	text-align: center
}

.subtitle {
	padding-top: 0pt;
	color: #000000;
	font-size: 11pt;
	padding-bottom: 3pt;
	font-family: "Arial";
	line-height: 1.5;
	orphans: 2;
	widows: 2;
	text-align: center
}

li {
	color: #000000;
	font-size: 11pt;
	font-family: "Calibri"
}

p {
	margin: 0;
	color: #000000;
	font-size: 11pt;
	font-family: "Calibri"
}

h1 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 16pt;
	padding-bottom: 3pt;
	font-family: "Arial";
	line-height: 1.5;
	page-break-after: avoid;
	orphans: 2;
	widows: 2;
	text-align: center
}

h2 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 14pt;
	padding-bottom: 3pt;
	font-family: "Arial";
	line-height: 1.5;
	page-break-after: avoid;
	font-style: italic;
	orphans: 2;
	widows: 2;
	text-align: center
}

h3 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 13pt;
	padding-bottom: 3pt;
	font-family: "Arial";
	line-height: 1.5;
	page-break-after: avoid;
	orphans: 2;
	widows: 2;
	text-align: center
}

h4 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 14pt;
	padding-bottom: 3pt;
	font-family: "Calibri";
	line-height: 1.5;
	page-break-after: avoid;
	orphans: 2;
	widows: 2;
	text-align: center
}

h5 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 13pt;
	padding-bottom: 3pt;
	font-family: "Calibri";
	line-height: 1.5;
	font-style: italic;
	orphans: 2;
	widows: 2;
	text-align: center
}

h6 {
	padding-top: 12pt;
	color: #000000;
	font-weight: 700;
	font-size: 11pt;
	padding-bottom: 3pt;
	font-family: "Calibri";
	line-height: 1.5;
	orphans: 2;
	widows: 2;
	text-align: center
}
</style>
</head>
<div class="row main">
	<p class="c8">
		<span class="c0 c1">ACTA DENUNCIA - {{ $denuncia->tipo }}</span>
	</p>
	<p class="c2">
		<span class="c0 c1">AUTOS: {{ $denuncia->id }}</span>
	</p>
	<p class="c2">
		<span class="c0">EXPTE: {{ $denuncia->id }}
	</p>
	<p class="c2">
		<span class="c4">???</span>
	</p>
	<p class="c2 c5">
		<span class="c4"></span>
	</p>
	<p class="c2">
		<span class="c7">ACTA DE DENUNCIA PENAL DE: {{ $denunciante->apellidos}}, {{ $denunciante->nombres }}</span>
	</p>
	<p class="c3">
		    En la ciudad de
			<span class="c7">{{ $denuncia->acto_localidad }}</span>,
			 el 
			<span class="c7">{{ date('d/m/Y', strtotime($denuncia->acto_datetime)) }}</span>,
		     siendo las 
			<span class="c7">{{ date('H:i:s', strtotime($denuncia->acto_datetime)) }}</span>
		    hs, se presenta ante el Ministerio P&uacute;blico Fiscal de la Primera
			Circunscripci&oacute;n Judicial, una persona que manifiesta el deseo
			de formular una denuncia sobre un hecho que a su juicio est&aacute;
			relacionado con un il&iacute;cito penal. Por lo que de conformidad a
			lo dispuesto por el Art. 155 del C.P.P. se resuelve recibirla a
			continuaci&oacute;n en legal forma. Impuesta que fue de las penas por
			falsa denuncia de dos meses a un a&ntilde;o de prisi&oacute;n o multa
			(Art. 245 del c&oacute;digo penal) jur&oacute; decir verdad de todo
			cuanto declare. Preguntado por sus condiciones personales, dijo
			llamarse:
			<span class="c7">{{ $denunciante->apellidos}}, {{ $denunciante->nombres }}</span>;
			D.N.I.
			<span class="c7">{{ $denunciante->dni}}</span>;
			que exhibe, domiciliado en
			<span class="c7">{{ $denunciante->localidad }}</span>;
			nacido en fecha 
			<span class="c7">{{ date('d/m/Y', strtotime($denunciante->fecha_nacimiento)) }}</span>;
			de 
			<span class="c7">{{ date('Y',strtotime($denuncia->acto_datetime)) - date('Y', strtotime($denunciante->fecha_nacimiento))}}</span>
			a&ntilde;os de edad, nacionalidad 
			<span class="c7">{{ $denunciante->nacionalidad }}</span>;
			tel&eacute;fono N&ordm;
			<span class="c7">{{ $denunciante->telefono }}</span>;
			Preguntada/o en relaci&oacute;n al motivo de su
			comparendo, manifest&oacute; seguidamente que autores ignorados:</span>
	</p>
	<p class="c2 c5">
		<span class="c3"></span>
	</p>
	<p class="c2">
		<span class="c3 c1">FECHA Y HORA HECHO</span><span class="c3">:
			Ocurri&oacute; el
			<span class="c7">{{ $denuncia->hecho_datetime->format('d/m/Y') }}</span>
			a las
			<span class="c7">{{ $denuncia->hecho_datetime->format('H:i:s') }}</span> hs
	</p>
	<p class="c2">
		<span class="c3 c1">LUGAR DEL HECHO</span><span class="c3">:CALLE: -
			NRO.: - PISO: - DTO: - BARRIO: - ENTRE</span><span class="c3 c1">&nbsp;CALLE
			Y CALLE</span><span class="c3">&nbsp;- LOCALIDAD: - C.P.: -
			PROVINCIA: .</span>
	</p>
	<p class="c2">
		<span class="c3">PREGUNTADO: si hubo fuerza en las cosas
			CONTEST&Oacute;:</span>
	</p>
	<p class="c2">
		<span class="c3">PREGUNTADO: si hubo violencia f&iacute;sica en las
			personas CONTEST&Oacute;:</span>
	</p>
	<p class="c2">
		<span class="c3">PREGUNTADO: valuaci&oacute;n de los elementos
			sustra&iacute;dos CONTEST&Oacute;:</span>
	</p>
	<p class="c2">
		<span class="c3">TESTIGOS:</span>
	</p>
	<p class="c2">
		<span class="c3">Se adjunta en ANEXO 1 detalle de los elementos
			sustra&iacute;dos</span>
	</p>
	<p class="c2">
		<span class="c3">Seguidamente se le informa al compareciente sobre las
			disposiciones de los Arts. 67, 74 sgtes y ccdtes del C.P.P., de lo
			que se da por debidamente impuesto, entreg&aacute;ndosele en este
			acto una foja con la transcripci&oacute;n de los art. referidos que
			recibe de conformidad. Con lo cual y no siendo para m&aacute;s, se da
			por finalizado el presente acto, previa lectura y ratificaci&oacute;n
			que el compareciente hace por s&iacute;, firmando de conformidad
			despu&eacute;s del Sr. Agente Fiscal.-</span>
	</p>
	<p class="c5 c8">
		<span class="c3"></span>
	</p>
</div>
@endsection
