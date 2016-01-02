<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Gestor de eventos</title>
		<script>/*
				function alertaBoton(){
					alert("Has pulsado el boton");
				}
		Otra alternativa es envolver el gestor de eventos con windows onload
		window.onload=function(){
			document.getElementById("miBoton").onclick=alertaBoton;	
		}*/
		</script>
	</head>
	<body>	
		<!--Este es el estilo inline para gestionar un evento>
		<input type="button" id="miBoton" value="pulsar" onclick="alertaBoton()"/-->
		<input type="button" id="miBoton" value="pulsar" />
		<script>
				function alertaBoton(){
					alert("Has pulsado el boton");
				}
		//Podemos incluir el gestor de evento dentro del codigo
		//Javascript con getElementById(), para ello eliminamos el
		//evento onclick dentro de nuestro boton	
		//Al evento se le asigna la definicion de la funcion,
		//no la llamada, asi que no lleva ()
		//para asegurarnos que el script se ejecute al final, lo ponemos antes del </body>
		document.getElementById("miBoton").onclick=alertaBoton;	
		</script>
	</body>
</html>