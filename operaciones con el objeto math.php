<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Operaciones matematicas con el objeto math</title>
	<style>
		td{border: 1px solid gray; padding: 3px 5px;}
	</style>
</head>
<body>
	<p>Obtener un numero aleatorio con Math.random()</p>
	<button onclick="obtenerNumero()">Obtener</button>
	<p id="id1"></p>
	<script type="text/javascript">
			function obtenerNumero(){
				document.getElementById("id1").innerHTML=Math.random();
			}
	</script>
	<p>Obtener el numero menor con Math.min()</p>
	<button onclick="obtenerNumeroMenor()">Obtener</button>
	<p id="id2"></p>
	<script type="text/javascript">
			function obtenerNumeroMenor(){
				document.getElementById("id2").innerHTML=Math.min(2,52,1,-8);
			}
	</script>

	<p>Redondear un numero con Math.round()</p>
	<button onclick="redondear()">Redondear</button>
	<p id="id3"></p>
	<script type="text/javascript">
			function redondear(){
				document.getElementById("id3").innerHTML=Math.round(prompt("Ingresa un numero"));
			}
			//Otro metodo para redondear es Math.ceil(), este redondea hacia arriba 2.4 lo redondea a 3
			//Otro metodo para redondear es Math.floor(), este redondea hacia abajo 2.9 lo redondea a 2
	</script>

	<p>Obtener numeros entre 0 y 10</p>
	<button onclick="funcion()">Obtener</button>
	<p id="id4"></p>
	<script type="text/javascript">
			function funcion(){
				document.getElementById("id4").innerHTML=Math.floor(Math.random()*11);
				//Math.random * 11 devolvera numero entre 0 y 11
			}
	</script>

	<p>Constantes matematicas</p>
	<p id="id5"></p>
	<button onclick="constantes()">Mostrar constantes</button>
	<script type="text/javascript">
			function constantes(){
				document.write("<table>");
				document.write("<tr><td>Numero de Euler</td><td>"+Math.E+"</td></tr>");
				document.write("<tr><td>Valor de PI</td><td>"+Math.PI+"</td></tr>");
				document.write("<tr><td>Raiz cuadrada de 2</td><td>"+Math.SQRT2+"</td></tr>");
				document.write("<tr><td>Raiz cuadrada de 1/2</td><td>"+Math.SQRT1_2+"</td></tr>");
				document.write("<tr><td>Logaritmo natural de 2</td><td>"+Math.LN2+"</td></tr>");
				document.write("<tr><td>Logaritmo en base 2 de E</td><td>"+Math.LOG2E+"</td></tr>");
				document.write("</table>");
			}
	</script>

</body>
</html>