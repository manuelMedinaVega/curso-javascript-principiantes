<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de history</title>
	<script>
		/*
		El objeto window.history nos sirve para acceder a la historia del navegador y muestra una lista de las url
		visitadas previamente, su unica propiedad es length que 
		indica el numero de paginas que hemos visitado, y tiene
		tres metodos forward() y back() son similares al presionar
		el boton siguiente y atras en el navegador, el tercer metodo es el metodo go() que recibe como parametro un
		numero entero positivo o negativo que nos lleva a la pagina
		del historial que indiquemos, tambien podemos usar un string como parametro que contenga una url que se encuentre en el historial 
		*/
	</script>
</head>
<body>
	<script>
		function siguiente(){
			window.history.back()
		}
		//history.go(-3); //vuelve hacia atras 3 paginas
		//history.go(2); //va hacia adelante 2 paginas
		alert("has visitado "+ history.length +" paginas web");
	</script>
	<button onclick="siguiente()">Atras</button>
</body>
</html>