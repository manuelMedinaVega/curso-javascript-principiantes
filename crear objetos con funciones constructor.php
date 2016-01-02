<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<Title>Crear objetos con funciones constructor</Title>
		<script>
			//Creamos una nueva plantilla, que sera un constructor para objetos
			function miTipoObjeto(){
					this.info='Soy un nuevo objeto basico';
					this.mostrarInfo=function(){
						alert(this.info);
					}
					this.configurarInfo=function(nuevaInfo){
						this.info=nuevaInfo;
					}
			}
			//Instanciamos un objeto
			var miNuevoObjeto1=new miTipoObjeto();
			var miNuevoObjeto2=new miTipoObjeto();

			function Persona(nombrePersona){
				this.nombre=nombrePersona;
				this.info='Esta persona se llama '+this.nombre;
				this.mostrarInfo=function(){
						alert(this.info);
				}
				this.cambiarNombre=function (nuevoNombre){
					this.nombre=nuevoNombre;
					alert(this.nombre);
				}
			}
			var persona1=new Persona("Manuel");
			var persona2=new Persona("Alejandro");

			function Carro(color,marca,kilometros){
				this.color=color;
				this.marca=marca;
				this.kilometros=kilometros;
				this.info="Coche de la marca "+this.marca+", color "+this.color+", km="+this.kilometros;
				this.mostrarInfo=function(){
					alert(this.info);
				}
			}

			var carro1=new Carro("rojo","toyota",1200);
			var carro2=new Carro("azul","meche",0);
		</script>
	</head>
	<body>
		<input type="button" value="mostrar info1" onclick="miNuevoObjeto1.mostrarInfo()"/>
		<input type="button" value="mostrar info2" onclick="miNuevoObjeto2.mostrarInfo()"/>
		<input type="button" value="cambiar info2" onclick="miNuevoObjeto2.configurarInfo('Nueva informacion')"/>
		<br><br>
		<input type="button" value="mostrar persona1" onclick="persona1.mostrarInfo()"/>
		<input type="button" value="mostrar persona2" onclick="persona2.mostrarInfo()"/>
		<input type="button" value="cambiar info2" onclick="persona2.cambiarNombre('Juan')"/>
		<br><br>
		<input type="button" value="mostrar carro1" onclick="carro1.mostrarInfo()"/>
		<input type="button" value="mostrar carro2" onclick="carro2.mostrarInfo()" />
	</body>
</html>