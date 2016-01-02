<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Definir y llamar funciones</title>
	<script>
		//Se aconseja poner el codigo con funciones en el head
		function diHola(){
			alert("Hola");
		}

		function diAdios(){
			alert("Adios");
		}
	</script>
</head>
<body>
	<input type="button" value="Di Hola" onclick="diHola()" /><br><br>
	<input type="button" value="Di Adios" onclick="diAdios()" />
</body>
</html>