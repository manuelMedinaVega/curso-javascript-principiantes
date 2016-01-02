<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Programacion orientada a objetos</title>
	<script type="text/javascript">
		miNuevoObjeto=new Object();
		miNuevoObjeto.info='Soy un objeto nuevo'; //crear un atributo para el objeto
		function miFunc(){
			alert(this.info); //this se refiere al objeto padre de la funcion (miNuevoObjeto)
		}
		miNuevoObjeto.mostrarInfo=miFunc; //creamos un metodo
		//El metodo sera mostrarInfo y le asignamos la funcion MiFunc sin parentesis

		//Crear un metodo usando una funcion anonima
		miNuevoObjeto.mostrarInfo2=function(){
			alert(this.info);
		}

	</script>
</head>
<body>
	<input type="button" value="llamada a miFunc()" onclick="miFunc()"/>
	<input type="button" value="llamada a miFunc()" onclick="miNuevoObjeto.mostrarInfo()"/>
	<input type="button" value="llamada a funcion anonima()" onclick="miNuevoObjeto.mostrarInfo2()"/>
</body>
</html>