<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Leer los atributos de un elemento</title>
	<style type="text/css">
		.democlass{
			color:red;
		}
	</style>
</head>
<body>
<!--Los elementos de HTML a veces tienen uno o mas atributos
con valores asociados.
Los atributos siempre tienen el mismo formato nombre=valor
Estos atributos son nodos hijos del nodo que los contiene
que en este caso viene a ser un tag div
En este caso el elemento div tiene 3 nodos hijos
id ,tittle y aqui incluimos texto, los 2 primeros
son nodos del tipo atributo y el ultimo es un nodo del
tipo texto
El metodo getAttribute obtiene los valores de cada uno
de los atributos, si intentamos acceder a un atributo que no
existe getAttribute() devuelve null-->

	<div id="id1" title="informe">Aqui incluimos texto</div>
	<script type="text/javascript">
		var miNodo=document.getElementById("id1");
		alert(miNodo.getAttribute("title"));
	</script>

	<h1 id="id2" class="democlass">Hola Mundo</h1>
	<p id="demo"></p>
	<button onclick="funcion1()">Valor del atributo class de h1</button>
	<script type="text/javascript">
		function funcion1(){
			var x=document.getElementsByTagName("H1")[0].getAttribute("class");
			document.getElementById("demo").innerHTML=x;
		}
	</script>

	<br/>
	Entre a <a id="miAncla" href="http://www.youtube.com" target="_blank">Youtube</a>
	<p id="demo2"></p>
	<button onclick="funcion2()">Valor del atributo target de a</button>
	<script type="text/javascript">
		function funcion2(){
			var y=document.getElementById("miAncla").getAttribute("target");
			document.getElementById("demo2").innerHTML=y;
		}
	</script>
</body>
</html>