<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de prompt</title>
	<script>
		/*
		El metodo prompt es otro metodo que abre una ventana de dialogo
		modal, el dialogo invita al usuario a q escriba su propia informacion
		Permite un segundo argumento que es opcional, que es el resultado que se devuelve
		si el usuario no escribe nada, si se selecciona cancelar o se cierra
		la ventana, se devuelve null
		*/
	</script>
</head>
<body>
	<script>
		var respuesta = prompt("Escribe tu nombre completo");
		var respuesta = prompt("Escribe tu nombre completo","Manuel medina");
		alert(respuesta);
	</script>
</body>
</html>