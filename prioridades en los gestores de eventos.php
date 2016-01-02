<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Prioridad Eventos</title>
	<script type="text/javascript">
		//definimos la funcion validar formulario
		function validarFormulario(){
			document.getElementById("form1").onsubmit=function(){
				var permitirSubmit=true;
				if(document.getElementById("usuario").value==""){
					alert("Campo nombre no puede estar en blanco");
					permitirSubmit=false;
				}
				if (permitirSubmit) {
					alert("Datos correctos-Enviando formulario");	
				}
				return permitirSubmit;
			}
		}
		//Se ejecutara cuando la pagina se carge completamente
		window.onload=validarFormulario;
	</script>
</head>
<body>
	<a href="http://www.youtube.com" id="miEnlace">Youtube</a>
	<script type="text/javascript">
		//Este gestor de eventos se ejecutara antes que lo que haga a
		document.getElementById("miEnlace").onclick=function(){
			this.href="http://www.google.com";
			//return false;//no se ira a ningun enlace
			return confirm("La pagina esta en mantenimiento. ¿quieres ir a google en su lugar?")
		}
		/*Esto se puede usar para validar los elementos de un formulario
		estos elementos tienen un gestor llamado onSubmit, que se 
		dispara cuando se pulsa para enviar el formulario*/
	</script>
	<form id="form1">
		Nombre:&nbsp; <input type="text" value="" name="Nombre Usuario" id="usuario"/> [Campo Obligatorio]<br/>
		Telefono: <input type="text" value="" name="telefono" id="phone"/>[Campo opcional]<br/>
		<input type="submit"/>
	</form>
</body>
</html>