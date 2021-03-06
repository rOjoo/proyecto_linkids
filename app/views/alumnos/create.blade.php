<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/img/favicon.png" />
	  <title>Bienvenidos a LinKids</title>

	  <!--Hoja de Estilo-->
      <style>
        	@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-image: url(/img/fondos.png);
		}
		h4{
			font-size: 12px;
			margin: 8px 0 0 0;
		}
		h2{
			font-size: 20px;
			margin: 10px 0 0 0M
		}
		ul, h3{
			font-size: 15px;
			margin: 8px 0 0 0;
		}
		button, a, a:visited {
			text-decoration:none;
		}
		footer{
			font-size: 11px;
			margin: 8px 0 0 0;
			text-align: center;
		}
        </style>
     <!--Fin Hoja de Estilo-->

     <body>

	<h2>Alumnos > Crear:</h2>

	
	{{ Form::open(array('url' => 'alumnos')) }}
	<h3>Nombre: {{ Form::text('nombrealumno', null, array('placeholder' => 'Introduce tu Nombre')) }} (*)</h3>
	<h3>Fecha de Nacimiento{{ Form::text('fechanacimiento', null, array('placeholder' => 'Introduce tu F. de Nacimiento')) }} (*)</h3>
	<h3>Nivel: {{ Form::text('nivel', null, array('placeholder' => 'Introduce tu Nivel')) }} (*)</h3>
	<h3>Dirección: {{ Form::text('direccion', null, array('placeholder' => 'Introduce tu Dirección')) }} (*)</h3>
	<h3>Teléfono: {{ Form::text('telefono', null, array('placeholder' => 'Introduce tu Teléfono')) }} (*)</h3>
	
	<br/><h4>(*) Todos los campos son obligatorios.</h4>
	<h4>Haga "click" en GUARDAR para salvar el nuevo Usuario ingresado.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014<br/>
				por Gladys Cerro Miranda y Joaquín Macías Cáceres</footer>
	</body>   
</html>

