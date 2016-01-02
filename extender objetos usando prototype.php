<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Extender objetos con el uso de Prototype</title>
	<script type="text/javascript">
		function Persona(nombrePersona){
			this.nombre=nombrePersona;
			this.info="Esta persona se llama "+this.nombre;
			this.mostrarInfo=function(){
				alert(this.info);
			}
		} 
		

		var persona1=new Persona("Manuel");
		var persona2=new Persona("Alejandro");
		//Agregamos un nuevo metodo a Persona con prototype
		Persona.prototype.diHola=function(){
			alert(this.nombre+" dice Hola");
		}
	</script>
</head>
<body>
		<input type="button" value="mostrar info1" onclick="persona1.mostrarInfo()" />
		<input type="button" value="decir hola" onclick="persona1.diHola()"/>
</body>
</html>