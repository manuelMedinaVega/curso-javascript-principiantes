<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crear nuevos nodos en el DOM</title>
	<script type="text/javascript">
		function reemplazarCabecera() {
			var nuevoH2=document.createElement("h2");
			var texto=document.createTextNode("Bienvenido");
			nuevoH2.appendChild(texto);
			var miDiv3=document.getElementById("id2");
			var viejoParra=document.getElementById("parra1");
			miDiv3.replaceChild(nuevoH2,viejoParra);
			var miParra=document.getElementById("parra2");
			miDiv3.removeChild(miParra);
		}
		/*window.onload=function(){
			document.getElementById("btn").onclick=reemplazarCabecera;
		}*/
	</script>

</head>
<body>
	<!--Crear nuevos nodos en el arbol DOM incluye dos pasos
	1ero creamos un nuevo nodo llamandolo en el metodo createElement("div")
	2do añadimos el nodo en la localizacion deseada

	Creamos nuevos nodos de texto usando el metodo createTextNode(), pas
	sandole como argumento el String que queremos colocar como texto dentro
	de un Nodo Element
	
	Podemos usar cloneNode() para crear una copia identica de un nodo
	con cloneNode(true) no solo se clona el nodo si no tmb todos sus hijos
	como el texto que contiene, si es false se clona el div vacio 
	cloneNode(true) puede clonar tambien la id de un nodo elemento, asi que debe cambiarse
	
	Un metodo simple para añadir un nodo en el DOM es con appendChild(), se
	añade como nodo hijo a un nodo que ya existe

	El metodo insertBefore() añade un nuevo nodo antes del nodo que se le indique
	este metodo toma dos argumentos: el nodo a añadir y el nodo del que colocarse antes
	
	El metodo replaceChild() permite reemplazar un nodo hijo existente por otro
	Toma dos argumentos el nuevo elemento a añadir y el viejo elemento a eliminar
	
	El metodo removeChild() elimina un nodo hijo
	-->
	<div id="id1">Este es el contenido del Div con id id1</div>

	<script type="text/javascript">
		/*var nuevoDiv=document.createElement("div") // no tiene contenidos, ni atributos ni una localizacion en el arbol del DOM
		var nuevoNodoTexto=document.createTextNode("Aqui esta el contenido del texto"); //tampoco esta ubicado en el arbol del DOM
		var miDiv=document.getElementById("id1");
		var cloneDiv=miDiv.cloneNode(true);*/
	</script>

	<script type="text/javascript">
		var nuevoTexto=document.createTextNode("Este es el nodoTexto hijo");
		var miDiv=document.getElementById("id1");
		miDiv.appendChild(nuevoTexto);
		var nuevoDiv=document.createElement("div");
		var nuevoTexto2=document.createTextNode("Este es el texto del div añadido");
		nuevoDiv.appendChild(nuevoTexto2);
		miDiv.appendChild(nuevoDiv);
	</script>

	<br/><br/>
	<div id="id2">
		<p id="parra1">Este parrafo contiene un texto</p>
		<p id="parra2">Aqui va mas texto</p>
		<input type="button" id="btn" value="Reemplazar elemento" onclick="reemplazarCabecera()" />
	</div>
	<script type="text/javascript">
		var nuevoParra=document.createElement("p");
		var nuevoTexto3=document.createTextNode("Nuevo parrafa insertado");
		nuevoParra.appendChild(nuevoTexto3);
		var miDiv2=document.getElementById("id2");
		var parra2=document.getElementById("parra2");
		miDiv2.insertBefore(nuevoParra,parra2);	
	</script>
</body>
</html>