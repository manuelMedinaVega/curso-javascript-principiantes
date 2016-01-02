<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Navegando por el DOM</title>
	<script type="text/javascript">
		function contarListaItems(){
			var elemento01=document.getElementById("listaTareas");
			var cuenta=0;
			for (var i = 0; i < elemento01.childNodes.length; i++) {
				if(elemento01.childNodes[i].nodeType==1) cuenta++; //Para acceder a los elementos HTML nodeType==1 (element node)
			}
			alert("La lista ordenada contiene "+cuenta+" items");
		}
		
		//elemento01.childNodes; //para acceder a los nodos hijos del nodo seleccionado en este caso ol
		window.onload=contarListaItems;
	</script>
</head>
<body>
	<h1>Cosas para hacer</h1>
	<ol id="listaTareas">
		<li>Terminar el guion</li>
		<li>Preparar los graficos</li>
		<li>Grabar la primera parte</li>
	</ol>
	<p id="notasLista">Asegurate de terminar
	antes de las 9 para ver el siguiente capitulo de
	Ghotam</p>
	<br/><br/><br/>
	<p>Este es el diagrama del arbol del DOM de la pagina (de arriba)</p><br/>
	<img src="arbol.jpg">
	<script type="text/javascript">
		/*La propiedad childnodes devuelve un array con los
		nodos hijos 
		childNode es una lista node con los hijos indexados*/
		alert(document.childNodes.length);
	</script>
</body>
</html>