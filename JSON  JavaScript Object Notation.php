<!DOCTYPE html>
<html>
<head>
	<title>JSON con funcion eval()</title>
	<script type="text/javascript">
	/*JSOM=javascript object notation; nos permite otro modo de instanciar objetos e intercambiar datos
	Puede actuar como una sintaxis global de intercambio de datos, es una notacion simple y compacta
	para objetos javascript una vez expresado en json los objetos pueden ser convertidos
	a string para poder ser almacenados y transmitidos. Un objeto expresado en json es un objeto
	expresado en javascript
	Sintaxis: se base en pares nombre:valor, cada par se separa por comas,
	todo el contenido debe estar entre {}*/
	/*var jsonObject={
		"param1":"valor1",
		"param1":"valor1",
		"param1":"valor1"
	}*/
	/* La funcion eval() evalua o ejecuta el codigo javascript que se le pasa como argumento*/
	//var x=eval(4*3); //x=12
	</script>

	<script type="text/javascript">
		var usuario='{"nombreUsuario":"Manuel","pais":"Peru","altura":1.80}';
		//var miObjeto=eval('('+usuario+')'); no es necesario en los nuevos navegadores
		//eval convierte un objeto json en un objeto javascript
		//Usamos el metodo parse para lo mismo
		var miObjeto=parse(usuario);
		document.write("Su nombre es "+miObjeto.nombreUsuario+" es de "+miObjeto.pais+" mide "+miObjeto.altura);
	</script>
</head>
<body>

</body>
</html>