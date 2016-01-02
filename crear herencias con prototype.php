<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crear herencias con prototype</title>
	<script type="text/javascript">
		function Domestico(){
			this.animal="";
			this.nombre="";
			this.configurarAnimal=function(nuevoAnimal){
				this.animal=nuevoAnimal;
			}
			this.configurarNombre=function(nuevoNombre){
				this.nombre=nuevoNombre;
			}
		}
		var miGato=new Domestico();
		miGato.configurarAnimal("gato");
		miGato.configurarNombre("Silvestre");

		//Para crear un nuevo consructor que herede de Domestico usamos prototype
		//Todo lo que esta en domestico tmb estara en Perro
		Perro.prototype=new Domestico();
		function Perro(){
				this.raza="";
				this.configurarRaza=function(nuevaRaza){
					this.raza=nuevaRaza;
				}
				this.mostrarInfo=function(){
					alert(this.nombre+" es un "+this.raza);
				}
		}
		var miPerra= new Perro();
		miPerra.configurarNombre("Belen");
		miPerra.configurarRaza("Labrador");

		//Hereder de objetos preconstruidos
		String.prototype.voltear=function(){
			var salida="";
			for(var i=this.length-1;i>=0;i--){
				salida+=this.substr(i,1);
			}
			return salida;
		}
	</script>

</head>
<body>
		<input type="button" value="mostrar info perra" onclick="miPerra.mostrarInfo()" />
		<script type="text/javascript">
		 var enString=prompt("Escriba el texto a voltear:");
		 document.write(enString.voltear());
		</script>
</body>
</html>