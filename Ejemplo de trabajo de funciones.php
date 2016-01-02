<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejemplo practico de trabajo con funciones</title>
	<script>
		//Se aconseja poner el codigo con funciones en el head
		function informeBoton(botonId, botonNombre, botonValor){
			//informacion sobre el id del boton
			var userMessage1="Id del boton: "+botonId+"\n";
			//informacion sobre el nombre del boton
			var userMessage2="Nombre del boton: "+botonNombre+"\n";
			//informacion sobre el valor del boton
			var userMessage3="Valor del boton: "+botonValor+"\n";
			alert(userMessage1+userMessage2+userMessage3)
		}
	</script>
</head>
<body>
		<input type="button" value="Izquierdo" id="id1" name="Boton Izquierdo" onclick="informeBoton(this.id, this.name, this.value)"/>
		<input type="button" value="Derecho" id="id2" name="Boton Derecho" onclick="informeBoton(this.id, this.name, this.value)"/>
</body>
</html>