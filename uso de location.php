<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de location</title>
	<script>
		/*
		El objeto location contiene informacion sobre la pagina que tenemos cargada en el navegador, vemos alguna propiedades con un ejemplo
		location.href ... http://www.example.com:8080/tools/dosplay.php? section=435#list
		location.protocol ... http
		location.host ... www.example.com:8080
		location.hostname ... www.example.com
		location.port ... 8080
		location.pathname ... /tools/display.php
		location.search ... ?section=435
		location.hash ... #list
		*/
	</script>
</head>
<body>
	<script>
		function recargar(){
			document.location.reload(true);//recarga la pagina del servidor y no de la cache
		}
		function youtube(){
			//document.location.href='http://www.youtube.com';
			document.location.replace('http://www.youtube.com'); //reemplaza la pagina original, no se puede retornar
			//elimina la pagina del historial
			//el metodo reload permite recargar la pagina
		}//nos llevara a la pagina youtube
	</script>
	<button onclick="youtube()">Youtube</button><br>
	<button onclick="recargar()">Recargar</button><br>
	<p>Texto...</p>
	<img src="imagen.jpg" >
</body>
</html>