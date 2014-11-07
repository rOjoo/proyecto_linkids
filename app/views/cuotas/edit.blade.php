<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>Proyecto LinKids</title>

	  <!--Hoja de Estilo-->
      <style>
        	@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-color: #b4c731;
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

	<h2>Cuotas > Editar:</h2>
	
	{{ Form::open(array('url' => 'cuotas/' . $cuota->id, 'method' => 'put')) }}
	<h3>Fecha de Cuota: {{ Form::text('FechaCuota', $cuota->FechaCuota) }}</h3>
	<h3>Monto Pagado: {{ Form::text('MontoPagado', $cuota->MontoPagado) }}</h3>
    {{ Form::hidden('alumno_id', $cuota->alumno_id) }}
	<h4>Comentario 1: Haga "click" en GUARDAR para salvar los datos ingresados.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014<br/>
				por Gladys Cerro Miranda y Joaquín Macías Cáceres</footer>

	</body>   
</html>
