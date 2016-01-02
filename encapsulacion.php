<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Encapsulacion en JavaScript</title>
	<script type="text/javascript">
		function Caja(ancho,largo,alto){
			function volumen(a,b,c){ //Funcion privada solo accesible desde dentro de la funcion constructor a la que pertenece
				return a*b*c;
			}
			this.volumenCaja=volumen(ancho, largo, alto); //si quitamos el this seria un atributo privado
			
		}
		var contenedor=new Caja(5,4,3);

	</script>
</head>
<body>
	<input type="button" value="VolumenNo" onclick="alert(volumen(5,4,3))"/>
	<input type="button" value="CajaNoEnObjeto" onclick="alert(contenedor.volumen(5,4,3))"/>
	<input type="button" value="VolumenSi" onclick="alert(contenedor.volumenCaja)"/>
</body>
</html>