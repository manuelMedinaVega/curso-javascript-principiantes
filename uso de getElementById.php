<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de getElementById</title>
	<script>
		/*
		El metodo getElementById sirve para seleccionar un elemento de tu pagina html con una id especifica, se le pasa como argumento el id del elemento.
		Las id en HTML deben ser unicas
		innerHTML es una propiedad que nos permite obtener o configurar el valor del contenido HTML dentro de un
		elemento particular de la pagina
		*/
	</script>
</head>
<body>

	<div id="div1">
		<p>Contenido del Elemento DIV</p>
	</div>
	<script>
		var miDivContenido=document.getElementById("div1").innerHTML;
		alert(miDivContenido);
		document.getElementById("div1").innerHTML="Este es el parrafo que hemos modificado";	
	</script>
</body>
</html>