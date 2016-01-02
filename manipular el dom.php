<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>firstChild,lastChild,parentNode,nextSibling,previousSibling,nodeValue</title>
</head>
<body>
	<h1>Cosas para hacer</h1>
	<ol id="listaTareas">
		<li id="li1">Terminar el guion</li>
		<li id="li2">Preparar los graficos</li>
		<li>Grabar la primera parte</li>
	</ol>
	<p id="first"></p>
	<button onclick="funcion1()">FirstChild</button>
	<script type="text/javascript">
		function funcion1(){
			var lista=document.getElementById("listaTareas").firstElementChild.innerHTML; // es lo mismo que childNodes[0].innerHTML
			document.getElementById("first").innerHTML=lista;
		}
	</script>
	
	<p id="last"></p>
	<button onclick="funcion2()">LastChild</button>
	<script type="text/javascript">
		function funcion2(){
			var lista2=document.getElementById("listaTareas").lastElementChild.innerHTML; // 
			document.getElementById("last").innerHTML=lista2;
		}
	</script>

	<p id="padre"></p>
	<button onclick="funcion3()">parentNode</button>
	<script type="text/javascript">
		function funcion3(){
			var x=document.getElementById("li1").parentNode.nodeName; // 
			document.getElementById("padre").innerHTML=x;
		}
	</script>

	<p id="pre"></p>
	<button onclick="funcion4()">previousSibling</button>
	<script type="text/javascript">
		function funcion4(){
			var y=document.getElementById("li2").previousElementSibling.innerHTML; // 
			document.getElementById("pre").innerHTML=y;
		}
	</script>

	<p id="next"></p>
	<button onclick="funcion5()">nextSibling</button>
	<script type="text/javascript">
		function funcion5(){
			var z=document.getElementById("li2").nextElementSibling.innerHTML; // 
			document.getElementById("next").innerHTML=z;
		}
	</script>

	<p id="value"></p>
	<button onclick="funcion6()">onValue</button><!usado para devolver el texto almacenado en un nodo de texto>
	<script type="text/javascript">
	//getElementByTagName: permite acceder a cualquier elemento
	//de la pagina por su tag [index] (por si hay mas de uno)
		function funcion6(){
			var c=document.getElementsByTagName("LI")[0]; 
			var d=c.childNodes[0].nodeValue;// 
			document.getElementById("value").innerHTML=d;
		}
	</script>


</body>
</html>