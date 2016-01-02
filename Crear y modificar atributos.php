<!DOCTYPE html>
<html>
<head>
	<title>Crear y modificar atributos.</title>
	<meta charset="UTF-8">
	<style type="text/css">
		.democlass{
			color:green;
		}
	</style>
	<script type="text/javascript">
	/*
		El metodo setAttribute crea atributos y les asigna valores,
		con 2 argumentos el atributo y el valor que se le dara a ese atributo
	*/
	</script>
</head>
<body>
	<a id="miLink">Un enlace: Ir a youtube.com</a>
	<br>
	<input value="OK">
	<h1>Hola Mundo</h1>
	<p>Pulsa el boton para añadir una clase atributo con el valor de "democlass" al emento h1</p>
	<button onclick="miFuncion()">Pruebalo</button>
	<script type="text/javascript">
		function miFuncion() {
			document.getElementsByTagName("H1")[0].setAttribute("class","democlass");
			document.getElementsByTagName("INPUT")[0].setAttribute("type","button");
			document.getElementById("miLink").setAttribute("href","http://www.youtube.com");
		}
	</script>
</body>
</html>