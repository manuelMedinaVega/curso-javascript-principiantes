<!DOCTYPE html>
<html>
<head>
	<title>metodos parse y stringigy de json</title>
	<script type="text/javascript">
	/*Funcion que nos permita convertir cualquier objeto JSON en un objeto javascript*/
	function jsonParse(){
		var enString = prompt("Escriba un objeto JSON");
		var salida="";
		miObjeto=JSON.parse(enString);
		for(i in miObjeto){
			salida+="Propiedad: "+i+"= "+miObjeto[i]+"\n";
		}
		alert(salida);
	}

	</script>
</head>
<body onload="jsonParse()"><!--Esto hace que al momento de cargarse la pagina se llame al metodo jsonParse-->
	<script type="text/javascript">
		//Creamos un objeto javascript
		var Jazzman=new Object();
		Jazzman.altura=1.85;
		Jazzman.edad=41;
		Jazzman.colorOjos="azul";
		//para serializar este objeto usando el metodo stringify
		//convertimos el objeto Jazzman en un objeto json
		document.write("Las propiedades de Jazzman son "+JSON.stringify(Jazzman));
	</script>

</body>
</html>